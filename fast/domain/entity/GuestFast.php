<?php

namespace App\Fast\Domain\Entity;

use DateTimeImmutable;

/**
 * @todo    : write description
 * @package App\Fast\Domain\Entity
 */
class GuestFast
{
    /**
     * @var DateTimeImmutable
     */
    protected $startDateTime;

    /**
     * @var DateTimeImmutable
     */
    protected $endDateTime;

    /**
     * Fast constructor.
     *
     * @param DateTimeImmutable $startDateTime
     * @param DateTimeImmutable $endDateTime
     */
    public function __construct(DateTimeImmutable $startDateTime, DateTimeImmutable $endDateTime)
    {
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getStartDateTime(): DateTimeImmutable
    {
        return $this->startDateTime;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getEndDateTime(): DateTimeImmutable
    {
        return $this->endDateTime;
    }
}