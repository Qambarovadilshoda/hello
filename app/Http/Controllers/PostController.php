<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $name = 'Dilshoda';
        $age = 17;
        return view('post', compact('name','age'));
    }
    public function show(){
        $title = 'Job Listings';
        return view('post_show', compact('title'));
    }
    public function showDetails(){
        $title = 'Job Details';
        return view('post_show_details', compact('title'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
