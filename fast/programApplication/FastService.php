<?php

namespace App\Fast\ProgramApplication;

use App\Fast\Domain\Repository\IFastReadRepository;
use App\Fast\Domain\Repository\IFastWriteRepository;
use App\Fast\ProgramApplication\DTO\StartFastUserDTO;

/**
 * @todo    : write description
 * @package App\Fast\ProgramApplication
 */
class FastService implements IStartFastUseCase
{
    /**
     * @var IFastReadRepository
     */
    private $writeRepository;

    /**
     * FastService constructor.
     *
     * @param IFastWriteRepository $writeRepository
     */
    public function __construct(IFastWriteRepository $writeRepository)
    {
        $this->writeRepository = $writeRepository;
    }

    /**
     * @param StartFastUserDTO $dto
     */
    public function startUserFast(StartFastUserDTO $dto): void
    {
        // business rules validation
        // save logic
        $this->writeRepository->saveFast();
    }
}