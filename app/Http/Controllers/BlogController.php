<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
    	$blog = DB::table('blogs')->get();
    	return view ('child',['blog'=> $blog]);
    }
}
