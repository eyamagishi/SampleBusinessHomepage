<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * タスクを一覧で表示
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $view = 'home.index';
        $data = [];
        return view($view, $data);
    }
}
