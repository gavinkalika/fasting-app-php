<?php

namespace App\Fast\Web;

use App\Fast\DataSource\MysqlConnection;
use App\Fast\Domain\Entity\UserFast;
use App\Fast\Domain\Repository\IFastReadRepository;
use App\Fast\Domain\Repository\IFastWriteRepository;

/**
 * @todo    : write description
 * @package App\Fast\Web
 */
class MysqlFastReadRepository implements IFastReadRepository, IFastWriteRepository
{
    /**
     * @var MysqlConnection
     */
    private $dbConn;

    /**
     * MysqlFastReadRepository constructor.
     *
     * @param MysqlConnection $dbConn
     */
    public function __construct(MysqlConnection $dbConn)
    {
        $this->dbConn = $dbConn;
    }

    /**
     * @return UserFast
     */
    public function getFastById(): UserFast
    {
    }

    /**
     * @param UserFast $userFast
     */
    public function saveFast(UserFast $userFast): void
    {
        // TODO: Implement saveFast() method.
//        $this->dbConn->
    }


}