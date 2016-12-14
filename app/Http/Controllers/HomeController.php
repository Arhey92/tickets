<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 14.12.2016
 * Time: 4:06
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function sectors()
    {
        return view('stadium.firstStep');
    }

    public function places()
    {
        return view('stadium.secondStep');
    }
}