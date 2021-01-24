<?php

namespace App\Fast\Domain\Entity;

use DateTimeImmutable;

/**
 * @todo    : write description
 * @package App\Fast\Domain\Entity
 */
class UserFast
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
     * @var int
     */
    protected $userId;

    /**
     * Fast constructor.
     *
     * @param DateTimeImmutable $startDateTime
     * @param DateTimeImmutable $endDateTime
     * @param int|null          $userId
     */
    public function __construct(DateTimeImmutable $startDateTime, DateTimeImmutable $endDateTime, int $userId)
    {
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->userId = $userId;
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

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
}