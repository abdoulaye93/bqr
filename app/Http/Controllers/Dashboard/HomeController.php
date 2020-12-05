<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $infos = Info::all();
        return view('welcome',compact('infos'));
    }

}
