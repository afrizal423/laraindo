<?php

use Laraindo\RupiahFormat;
use Laraindo\directives\Parser;
use Laraindo\TanggalFormat;

return [
    'RupiahFormat' => function ($expression) {
        if (!empty($expression)) {
            return RupiahFormat::currency($expression);
        }
    },
    'RupiahTerbilang' => function ($expression) {
        if (!empty($expression)) {
            return RupiahFormat::terbilang($expression);
        }
    },
    'DateIndo' => function ($expression) {
        $expression = Parser::multipleArgs($expression);
        return TanggalFormat::DateIndo(Parser::stripQuotes($expression->get(1)), Parser::stripQuotes($expression->get(3)));
    },
];
