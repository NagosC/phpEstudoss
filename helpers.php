<?php
/**
 * Shape the url according to the environment you are in
 *
 * @param string $url 
 * @return string
 */

function url(string $url): string
{
    $servidor = $_SERVER['SERVER_NAME'];

    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if(str_starts_with($url, '/')){
        return $ambiente.$url;
    }

    return $ambiente.'/'.$url;
}

/**
 * Get the server name if for 
 * localhost returns true if different returns false
 *
 * @return boolean
 */
function localhost(): bool
{
    $servidor = $_SERVER['SERVER_NAME'];

    if ($servidor == 'localhost') {
        return true;
    }

    var_dump($servidor);
    return false;
}

/**
 * Validate the email
 *
 * @param string $email Email to be validated
 * @return boolean
 */
function emailValid(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


/**
 * Count the time that passed
 *
 * @param string $data current date
 * @return string $time time that passed
 */
function timeCount(string $data): string
{
    $now = strtotime(date('Y-m-d H:i:s'));
    $time = strtotime($data);
    $diff = $now - $time;

    $segs = $diff;
    $min = round($diff / 60);
    $hours = round($min / 60);
    $days = round($hours / 24);
    $week = round($days / 7);
    $month = round($week / 4);
    $years = round($month / 12);

    if ($segs <= 60) {
        return 'now';
    } elseif ($min <= 60) {
        return $min == 1 ? '1 minute ago' :  $min . ' minutes ago';
    } elseif ($hours <= 24) {
        return $hours == 1 ? '1 hour ago' : $hours . ' hours ago';
    } elseif ($days <= 7) {
        return $days == 1 ? '1 day ago' : $days . ' days ago';
    } elseif ($week <= 4) {
        return $week == 1 ? '1 week ago' : $week . ' weeks ago';
    } elseif ($month <= 12) {
        return $month == 1 ? '1 month ago' : $month . ' months ago';
    } else {
        return $years == 1 ? '1 year ago' : $years . ' years ago';
    }
}



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