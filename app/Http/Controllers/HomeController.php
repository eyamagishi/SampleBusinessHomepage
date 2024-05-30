<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\CategoryService\CategoryServiceInterface as CategoryService;
use App\Services\InformationService\InformationServiceInterface as InformationService;
use App\Services\NewsService\NewsServiceInterface as NewsService;
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
     * @var CategoryService
     * @var InformationService
     * @var NewsService
     * @var UserService
     */
    protected $categoryService;
    protected $informationService;
    protected $newsService;
    protected $userService;

    /**
     * @param CategoryService $categoryService
     * @param InformationService $informationService
     * @param NewsService $newsService
     * @param UserService $userService
     */
    public function __construct(
        CategoryService $categoryService,
        InformationService $informationService,
        NewsService $newsService,
        UserService $userService
    ) {
        $this->categoryService    = $categoryService;
        $this->informationService = $informationService;
        $this->newsService        = $newsService;
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

        // Retrieve news items
        $newsItems = $this->newsService->getAll();

        // Retrieve categories
        $categories = $this->categoryService->getAllWithIdKeys();

        $data = [
            'information' => $information,
            'newsItems'   => $newsItems,
            'categories'  => $categories,
        ];
        return view($view, $data);
    }
}
