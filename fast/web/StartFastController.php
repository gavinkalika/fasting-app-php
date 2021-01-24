<?php

namespace App\Fast\Web;

use App\Fast\ProgramApplication\IStartFastUseCase;

/**
 * @todo    : write description
 * @package App\Fast\Web
 */
class StartFastController
{
    /**
     * @var IStartFastUseCase
     */
    private $startFastUseCase;

    /**
     * StartFastController constructor.
     *
     * @param IStartFastUseCase $startFastUseCase
     */
    public function __construct(IStartFastUseCase $startFastUseCase)
    {
        $this->startFastUseCase = $startFastUseCase;
    }

    public function __invoke()
    {
        // input validation


        $this->startFastUseCase->startUserFast();
    }
}