<?php
namespace Jbevanac\TimeInterface;

use DateTimeInterface;

class Minutes implements TimeInterface
{
    public const IN_HOURS = 0.016666666666667;
    public const IN_MINUTES = 1;
    public const IN_SECONDS = 60;

    private float $minutes;

    public function __construct(float $minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * Sets Value of Minutes
     * @param float $minutes
     */
    public function setMinutes(float $minutes): void
    {
        $this->minutes = $minutes;
    }

    public static function create(float $time) : TimeInterface
    {
        return new Minutes($time);

    }

    public static function createFromHours(float $hours) : TimeInterface{
        return new Minutes(Hours::inMinutes($hours));
    }

    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Minutes($minutes);
    }

    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Minutes(Seconds::inMinutes($seconds));
    }

    public function getHours(): float
    {
        return $this->minutes * self::IN_HOURS;
    }

    public function getMinutes(): float
    {
        return $this->minutes;
    }

    public function getSeconds(): float
    {
        return round($this->minutes * self::IN_SECONDS);
    }

    public static function fromDateTime(DateTimeInterface $dateTime): float
    {
        $hours = $dateTime->format("H");
        $minutes = $dateTime->format("i");
        return Hours::inMinutes(floatval($hours)) + floatval($minutes);
    }

    public static function inHours(float $time) : float {
        return round($time * Minutes::IN_HOURS, 2);
    }

    public static function inMinutes(float $time) : float{
        return $time;
    }

    public static function inSeconds(float $time) : float{
        return round($time * Minutes::IN_SECONDS);
    }
}
