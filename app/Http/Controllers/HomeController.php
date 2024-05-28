<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\InformationService\InformationServiceInterface as InformationService;
use App\Services\UserService\UserServiceInterface as UserService;

class HomeController extends Controller
{
    /**
     * @var InformationService
     * @var UserService
     */
    protected $informationService;
    protected $userService;

    /**
     * @param InformationService $informationService
     * @param UserService $userService
     */
    public function __construct(InformationService $informationService, UserService $userService)
    {
        $this->informationService = $informationService;
        $this->userService        = $userService;
    }

    /**
     * タスクを一覧で表示
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $view = 'home.index';

        // Informationを取得
        $informations = [
            [
                'title'       => 'ここにタイトルを入れます',
                'description' => 'ここに説明を入れます。サンプルテキスト。',
                'img'         => 'images/sample1.jpg',
                'url'         => '#',
            ],
            [
                'title'       => 'ここにタイトルを入れます',
                'description' => 'ここに説明を入れます。サンプルテキスト。',
                'img'         => 'images/sample1.jpg',
                'url'         => '#',
            ],
            [
                'title'       => 'ここにタイトルを入れます',
                'description' => 'ここに説明を入れます。サンプルテキスト。',
                'img'         => 'images/sample1.jpg',
                'url'         => '#',
            ],
        ];

        // whatIsNewを取得
        $newsItems = [
            [
                'date'        => '2024/05/19',
                'category'    => 'その他',
                'description' => 'サンプルテキスト。サンプルテキスト。サンプルテキスト。',
            ],
        ];

        $data = [
            'informations' => $informations,
            'newsItems'    => $newsItems,
        ];
        return view($view, $data);
    }
}
