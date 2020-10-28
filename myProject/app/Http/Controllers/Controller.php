<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $categoriesList =
    [
        [
            'id' => '1',
            'title' => 'Название категории',
            'news' => [
                'id' => '1',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '2',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '3',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '4',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ]
        ],
        [
            'id' => '2',
            'title' => 'Название категории',
            'news' => [
                'id' => '1',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '2',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '3',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '4',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
        ],
        [
            'id' => '3',
            'title' => 'Название категории',
            'news' => [
                'id' => '1',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '2',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '3',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '4',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
        ],
        [
            'id' => '4',
            'title' => 'Название категории',
            'news' => [
                'id' => '1',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '2',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '3',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '4',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
        ],
        [
            'id' => '5',
            'title' => 'Название категории',
            'news' => [
                'id' => '1',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '2',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '3',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
            [
                'id' => '4',
                'title' => 'Заголовок новости',
                'description' => 'Описание новости',
            ],
        ]
    ];

    public function showCategories()
    {
        return view('categories.showCategories', ['categories' => $this->categoriesList]);
    }
    public function showNews()
    {
        return view('news.showNews', ['news' => $this->categoriesList]);
    }
    public function  showOneNews($id)
    {
        return view('news.showOneNews', ['id' => $id]);
    }
}
