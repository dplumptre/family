<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 5/3/2017
 * Time: 12:25 AM
 */

namespace App\Lib\Pairing;


use App\Models\Pair;
use App\Models\Payer;

class UpdateElapsedPair
{
    /**
     * @var Payer
     */
    private $payer;
    /**
     * @var Pair
     */
    private $pair;


    /**
     * UpdateElapsedPair constructor.
     * @param Payer $payer
     * @param Pair $pair
     */
    public function __construct(Payer $payer, Pair $pair)
    {

        $this->payer = $payer;
        $this->pair = $pair;
    }
}