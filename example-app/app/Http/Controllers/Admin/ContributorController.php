<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ContributorController extends BaseModuleController
{
    protected $moduleName = 'contributors';
    
    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'name' => true,
        'image' => true,
        'tagsAsString' => true,
    ];
    
    protected $indexColumns = [
        'image' => [
            'thumb' => true,
            'variant' => [
                'role' => 'avatar',
                'crop' => 'default'
            ]
        ],
        
        'name' => [
            'title' => 'Name',
            'field' => 'name',
            'sort' => true,
        ],
        
        'tagsAsString' => [
            'title' => 'Tags',
            'field' => 'tagsAsString',
            'present' => true
        ]
    ];
}
