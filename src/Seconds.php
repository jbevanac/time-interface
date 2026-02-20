<?php

namespace Jbevanac\TimeInterface;

use DateTimeInterface;

class Seconds implements TimeInterface
{
    public const IN_SECONDS = 1;
    public const IN_MINUTES = 0.016666666666667;
    public const IN_HOURS = 0.000277777777778;

    private float $seconds;

    public function __construct(float $seconds)
    {
        $this->seconds = $seconds;
    }

    /**
     * Set Value of seconds
     * @param float $seconds
     */
    public function setSeconds(float $seconds): void
    {
        $this->seconds = $seconds;
    }

    public static function create(float $time) : TimeInterface
    {
        return new Seconds($time);
    }

    public static function createFromHours(float $hours) : TimeInterface{
        return new Seconds(Hours::inSeconds($hours));
    }

    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Seconds(Minutes::inSeconds($minutes));
    }

    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Seconds($seconds);
    }

    public function getHours(): float
    {
        return round($this->seconds * self::IN_HOURS, 2);
    }

    public function getMinutes(): float
    {
        return $this->seconds * self::IN_MINUTES;
    }

    public function getSeconds(): float
    {
        return $this->seconds;
    }

    public static function fromDateTime(DateTimeInterface $dateTime): float
    {
        $hours = $dateTime->format("H");
        $minutes = $dateTime->format("i");
        return Hours::inSeconds(floatval($hours)) + Minutes::inSeconds(floatval($minutes));
    }

    public static function inHours(float $time) : float {
        return round($time * Seconds::IN_HOURS, 2);
    }

    public static function inMinutes(float $time) : float{
        return $time * Seconds::IN_MINUTES;
    }

    public static function inSeconds(float $time) : float{
        return $time;
    }
}
