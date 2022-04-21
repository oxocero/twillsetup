<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class CreditController extends BaseModuleController
{
    protected $moduleName = 'credits';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
