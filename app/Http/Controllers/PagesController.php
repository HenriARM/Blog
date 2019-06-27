<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return redirect('localization/'.app()->getLocale());
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function changeLang(Request $request, $locale) {
        app()->setLocale($locale);
        return view('pages.index');
    }

    public function showAdmin(Request $request) {
        return view('pages.admin');
    }
}
