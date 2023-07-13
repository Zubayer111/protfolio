<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Protfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class Wabcontroller extends Controller
{
    private $recentHomes;
    private $recentAbouts;

public function index()
{
    $homes = Home::all()->take("1");
    $abouts =About::all()->take("1");
    $services = Service::all()->take("5");
    $protfolios = Protfolio::all()->take("5");
    return view("website.home.home", compact("homes","abouts","services","protfolios"));
}

public function about()
{
    return view("website.about.about");
}

public function service()
{
    return view("website.service.service");
}

public function portfolio()
{
    return view("website.portfolio.portfolio");
}

public function contact()
{
    return view("website.contact.contact");
}
}

