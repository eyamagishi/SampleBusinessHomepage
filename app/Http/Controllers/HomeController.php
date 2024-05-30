<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\CategoryService\CategoryServiceInterface as CategoryService;
use App\Services\InformationService\InformationServiceInterface as InformationService;
use App\Services\NewsService\NewsServiceInterface as NewsService;

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
     */
    protected $categoryService;
    protected $informationService;
    protected $newsService;

    /**
     * @param CategoryService $categoryService
     * @param InformationService $informationService
     * @param NewsService $newsService
     */
    public function __construct(
        CategoryService $categoryService,
        InformationService $informationService,
        NewsService $newsService
    ) {
        $this->categoryService    = $categoryService;
        $this->informationService = $informationService;
        $this->newsService        = $newsService;
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
        dd($newsItems[0]->published_at, gettype($newsItems[0]->published_at));

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
