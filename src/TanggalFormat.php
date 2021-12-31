<?php

/**
 * @author AfrizalMY <saweria.co/afrizalmy>
 * @license MIT
 */

namespace Laraindo;

use Carbon\Carbon;


class TanggalFormat
{
    public static function DateIndo(string $date, string $format = null)
    {
        $locale = config('laraindo', true);
        $date = Carbon::parse($date)->locale($locale['TanggalFormat']['locale']);

        $date->settings(['formatFunction' => 'translatedFormat']);

        return $date->format(($format != null ? $format : 'l, j F Y')); // Selasa, 16 Maret 2021 ; 08:27 pagi
    }
}
