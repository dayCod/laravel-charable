<?php

namespace DayCod\Charable;

class CharableFunction extends BaseCharable
{
    /**
     * Get only alphabet in row of character
     *
     * @return string
     */
    public function getOnlyAlphabet(string $char, bool $remove_whitespace = false)
    {
        return (!$remove_whitespace)
            ? preg_replace("/[^A-Za-z]/"," $1" ,$char)
            : trim(preg_replace("/[^A-Za-z]/","$1" ,$char));
    }

    /**
     * Get only number or digit in row of character
     *
     * @return string
     */
    public function getOnlyNumberOrDigit(string $char, bool $remove_whitespace = false)
    {
        return (!$remove_whitespace)
            ? preg_replace("/[^0-9]/"," $1" ,$char)
            : trim(preg_replace("/[^0-9]/","$1" ,$char));
    }

    /**
     * Get only lowercase alphabet in row of character
     *
     * @return string
     */
    public function getOnlyLowerAlphabet(string $char, bool $remove_whitespace = false)
    {
        return (!$remove_whitespace)
            ? preg_replace("/[^a-z]/"," $1" ,$char)
            : trim(preg_replace("/[^a-z]/","$1" ,$char));
    }

    /**
     * Get only uppercase alphabet in row of character
     *
     * @return string
     */
    public function getOnlyUpperAlphabet(string $char, bool $remove_whitespace = false)
    {
        return (!$remove_whitespace)
            ? preg_replace("/[^A-Z]/"," $1" ,$char)
            : trim(preg_replace("/[^A-Z]/","$1" ,$char));
    }

    /**
     * Get only alphabet numeric in row of character
     *
     * @return string
     */
    public function getOnlyAlphabetNumeric(string $char, bool $remove_whitespace = false)
    {
        return (!$remove_whitespace)
            ? preg_replace("/[^A-Za-z0-9]/"," $1" ,$char)
            : trim(preg_replace("/[^A-Za-z0-9]/","$1" ,$char));
    }
}
