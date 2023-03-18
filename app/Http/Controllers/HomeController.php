<?php

namespace App\Http\Controllers;

use App\Models\{Dashboard};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index',[
            "masthead_content" => Dashboard::masthead(),
            "section_img_scroll" => Dashboard::section_img_scroll(),
            "section_img_two" => Dashboard::section_img_two(),
            "section_content_one" => Dashboard::section_content_one(),
            "section_content_two" => Dashboard::section_content_two(),
            "section_content_three" => Dashboard::section_content_three(),
            "section_content_four" => Dashboard::section_content_four(),
        ]);
    }
}
