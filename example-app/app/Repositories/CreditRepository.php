<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Credit;

class CreditRepository extends ModuleRepository
{
    

    public function __construct(Credit $model)
    {
        $this->model = $model;
    }
}
