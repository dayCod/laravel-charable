<?php

namespace DayCod\Charable;

class BaseCharable
{
    /**
     * Check if there is an alphabet in it
     *
     * @return bool
     */
    public function hasAlphabet(string $text): bool
    {
        return \is_string($text) && '' !== $text && !preg_match('/[^A-Za-z]/', $text);
    }

    /**
     * Check if there is an number or digit in it
     *
     * @return bool
     */
    public function hasNumberOrDigit(string $text): bool
    {
        return \is_string($text) && '' !== $text && !preg_match('/[^0-9]/', $text);
    }

    /**
     * Check if there is an lowercase alphabet in it
     *
     * @return bool
     */
    public function hasLowerAlphabet(string $text): bool
    {
        return \is_string($text) && '' !== $text && !preg_match('/[^a-z]/', $text);
    }

    /**
     * Check if there is an uppercase alphabet in it
     *
     * @return bool
     */
    public function hasUpperAlphabet(string $text): bool
    {
        return \is_string($text) && '' !== $text && !preg_match('/[^A-Z]/', $text);
    }

    /**
     * Check if there is an alphabet numeric in it
     *
     * @return bool
     */
    public function hasAlphabetNumeric(string $text): bool
    {
        return \is_string($text) && '' !== $text && !preg_match('/[^A-Za-z0-9]/', $text);
    }
}
