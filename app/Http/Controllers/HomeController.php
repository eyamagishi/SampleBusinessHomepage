<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\InformationService\InformationServiceInterface as InformationService;
use App\Services\UserService\UserServiceInterface as UserService;

/**
 * HomeController class
 * 
 * Controller class for the home screen.
 * Handles authentication and displays the main screen of the application.
 * 
 * @extends \App\Http\Controllers\Controller
 */
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
     * Displays the main screen of the application.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $view = 'home.index';

        // Retrieve information data
        $information = $this->informationService->getAll();

        // Example news items
        $newsItems = [
            [
                'date'        => '2024/05/19',
                'category'    => 'その他',
                'description' => 'サンプルテキスト。サンプルテキスト。サンプルテキスト。',
            ],
        ];

        $data = [
            'information' => $information,
            'newsItems'   => $newsItems,
        ];
        return view($view, $data);
    }
}
