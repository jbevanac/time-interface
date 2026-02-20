<?php

namespace Jbevanac\TimeInterface;

use DateTimeInterface;

class Hours implements TimeInterface
{
    public const IN_HOURS = 1;
    public const IN_MINUTES = 60;
    public const IN_SECONDS = 3600;

    private float $hours;

    public function __construct(float $hours)
    {
        $this->hours = $hours;
    }

    /**
     * Sets Value of Hours
     * @param float $hours
     */
    public function setHours(float $hours): void
    {
        $this->hours = $hours;
    }

    public static function create(float $time) : TimeInterface
    {
        return new Hours($time);
    }

    public static function createFromHours(float $hours) : TimeInterface{
        return new Hours($hours);
    }

    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Hours($minutes/self::IN_MINUTES);
    }

    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Hours(Seconds::inHours($seconds));
    }

    public function getHours(): float
    {
        return $this->hours;
    }

    public function getMinutes(): float
    {
        return $this->hours * self::IN_MINUTES;
    }

    public function getSeconds(): float
    {
        return round($this->hours * self::IN_SECONDS);
    }

    public static function fromDateTime(DateTimeInterface $dateTime): float
    {
        $hours = $dateTime->format("H");
        $minutes = $dateTime->format("i");
        return floatval($hours) + Minutes::inHours(floatval($minutes));
    }

    public static function inHours(float $time) : float {
        return $time;
    }

    public static function inMinutes(float $time) : float{
        return $time * Hours::IN_MINUTES;
    }

    public static function inSeconds(float $time) : float{
        return round($time * Hours::IN_SECONDS);
    }
}
