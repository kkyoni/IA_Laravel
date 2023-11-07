<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $authLayout = '';
    protected $pageLayout = '';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authLayout = 'front.auth.';
        $this->pageLayout = 'front.';
        //View::share('tenure_values', Setting::where('code','interest_rate_duration')->first('value'));
    }
    public function index()
    {
        return view('front.welcome');
    }
}
