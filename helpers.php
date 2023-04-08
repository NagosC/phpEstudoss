<?php

/**
 * Turns the value into R$
 *
 * @param float|null $value value to be modified
 * @return string   Value converted into R$
 */

function formatValue(float $value = null): string
{
    return number_format(($value ? $value : 0), 2, ',', '.');
}

/**
 * dot notation in value
 *
 * @param int|null $number value to be modifed
 * @return string   Value converted
 */
function formatNumber(int $number = null): string
{
    return number_format($number ? $number : 0, 0, '.', '.');
}

/**
 * Summarizes a text by removing the tags
 * @param string $text text to be modified
 * @param int $limit amount of characters
 * @param string $continue optional -  should be displayed at the end o f the summary
 * @return string short rext without tags
 */

function resumeText(string $text, int $limit, string $continue = '...'): string
{
    $cleanText = trim(strip_tags($text));

    if (mb_strlen($cleanText) <= $limit) {
        return $cleanText;
    }

    $Cuttext = mb_substr($cleanText, 0, mb_strrpos(mb_substr($cleanText, 0, $limit), ''));

    return $Cuttext . $continue;
}
