<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('pages.admin.posts.index');
    }
}
