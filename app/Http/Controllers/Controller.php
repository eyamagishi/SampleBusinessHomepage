<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Controller class
 * 
 * Base controller class for the application.
 * Provides standard controller functionality in Laravel. Utilizes traits
 * necessary for features such as authorization and validation.
 * 
 * @extends \Illuminate\Routing\Controller
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
