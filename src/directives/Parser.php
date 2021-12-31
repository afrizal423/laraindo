<?php

namespace Laraindo\directives;

class Parser
{
    /**
     * Parse expression.
     *
     * @param  string $expression
     * @return \Illuminate\Support\Collection
     */
    public static function multipleArgs($expression)
    {
        $expression = str_replace(["'", '"'], "'", $expression);
        return collect(explode("'", $expression))->map(function ($item) {
            return trim($item);
        });
    }

    /**
     * Strip quotes.
     *
     * @param  string $expression
     * @return string
     */
    public static function stripQuotes($expression)
    {
        return str_replace(["'", '"'], '', $expression);
    }
}
