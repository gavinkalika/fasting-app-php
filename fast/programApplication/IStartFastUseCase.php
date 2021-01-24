<?php

namespace App\Fast\ProgramApplication;

use App\Fast\ProgramApplication\DTO\StartFastUserDTO;

/**
 * Interface IStartFastUseCase
 *
 * @package App\Fast\ProgramApplication
 */
interface IStartFastUseCase
{
    /**
     * Start Fast.
     *
     * @param StartFastUserDTO $dto
     *
     * @return void
     */
    public function startUserFast(StartFastUserDTO $dto): void;
}