<?php

namespace Realreef\Limiter;

class Limiter
{
  /**
  * Limit the number of words in a string.
  *
  * @param string $value
  * @param int $words
  * @param string $end
  * @return string
  */
  public static function words_limiter($value, $words = 100, $end = '...')
  {
    preg_match('/^\s*+(?:\S++\s*+){1,'.$words.'}/u', $value, $matches);

    if (! isset($matches[0]) || mb_strlen($value) === mb_strlen($matches[0])) {
        return $value;
    }

    return rtrim($matches[0]).$end;
  }
}