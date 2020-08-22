<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function home() {
        return view('index');
    }
    
    public function about() {
        return view('about');
    }
    
    public function certificates() {
        return view('certificates');
    }
    
    public function portfolios() {
        return view('portfolios');
    }
    
    public function blogs() {
        return view('blogs');
    }
    
}
