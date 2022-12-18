<?php

/**
 * @author AfrizalMY <saweria.co/afrizalmy>
 * @license MIT
 */

namespace Laraindo;

class RupiahFormat
{
    /**
     * Penyebut function untuk mengubah ke string
     *
     * @param integer $nilai
     * @return string
     */
    public function penyebut(int $nilai): string
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = match (true) {
            $nilai < 12 => " " . $huruf[$nilai],
            $nilai < 20 => $this->penyebut($nilai - 10) . " belas",
            $nilai < 100 => $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10),
            $nilai < 200 => " seratus" . $this->penyebut($nilai - 100),
            $nilai < 1000 => $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100),
            $nilai < 2000 => " seribu" . $this->penyebut($nilai - 1000),
            $nilai < 1000000 => $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000),
            $nilai < 1000000000 => $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000),
            $nilai < 1000000000000 => $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000)),
            $nilai < 1000000000000000 =>  $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000)),
            default => $temp = 'Unknown',
        };
        return $temp;
    }

    /**
     * Terbilang static function
     *
     * @param integer $nilai
     * @return string
     */
    public static function terbilang(int $nilai): string
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim((new self)->penyebut($nilai));
        } else {
            $hasil = trim((new self)->penyebut($nilai));
        }
        return ucwords($hasil)." Rupiah";
    }


    /**
     * currency static function untuk mengubah format rupiah
     *
     * @param mixed $value
     * @return string
     */
    public static function currency(mixed $value) : string
    {
        $value = floatval($value);
        return "Rp. " . number_format($value,0,',','.');
    }
}
