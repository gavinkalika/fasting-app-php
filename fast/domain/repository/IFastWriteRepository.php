<?php
namespace App\Fast\Domain\Repository;

use App\Fast\Domain\Entity\UserFast;

/**
 * A defined API to retrieve different Fast states.
 *
 * @package App\Fast\Repository
 */
interface IFastWriteRepository
{
    /**
     * @param UserFast $userFast
     *
     * @return void
     */
    public function saveFast(UserFast $userFast) : void;
}