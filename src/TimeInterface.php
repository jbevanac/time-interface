<?php
namespace Jbevanac\TimeInterface;

use DateTimeInterface;

interface TimeInterface {

    /**
     * TimeInterface constructor.
     * @param float $time
     */
    public function __construct(float $time);

    /* STATIC CONSTRUCTORS */
    /**
     * Creates a TimeInterface
     * @param float $time
     * @return TimeInterface
     */
    public static function create(float $time) : TimeInterface;

    /**
     * Creates a TimeInterface from hours
     * @param float $hours
     * @return TimeInterface
     */
    public static function createFromHours(float $hours) : TimeInterface;

    /**
     * Creates a TimeInterface From minutes
     * @param float $minutes
     * @return TimeInterface
     */
    public static function createFromMinutes(float $minutes) : TimeInterface;

    /**
     * Creates a TimeInterface from seconds
     * @param float $seconds
     * @return TimeInterface
     */
    public static function createFromSeconds(float $seconds) : TimeInterface;

    /* GETTERS */
    /**
     * Gets the time in hours
     * @return float
     */
    public function getHours() : float;

    /**
     * Gets the time in minutes
     * @return float
     */
    public function getMinutes() : float;

    /**
     * Gets the time in seconds
     * @return float
     */
    public function getSeconds() : float;

    /* STATIC */
    /**
     * Returns the current time in decimal format
     * @param DateTimeInterface $dateTime
     * @return float
     */
    public static function fromDateTime(DateTimeInterface $dateTime) : float;

    /**
     * Returns the time in hours
     * @param float $time
     * @return float
     */
    public static function inHours(float $time) : float;

    /**
     * Returns the tim in minutes
     * @param float $time
     * @return float
     */
    public static function inMinutes(float $time) : float;

    /**
     * Returns the time in seconds
     * @param float $time
     * @return float
     */
    public static function inSeconds(float $time) : float;
}
