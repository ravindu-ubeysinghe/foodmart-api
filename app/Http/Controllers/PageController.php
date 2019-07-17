<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XPage;

class PageController extends Controller
{
    public function index(){
      $reactver = filemtime($_SERVER["DOCUMENT_ROOT"]."/js/app.js");
      return view('welcome')->with('reactver', $reactver);
    }

    public function getAllPages(Request $request){
      $pages = XPage::all();
      return response()->json([
        'message' => 'Great success! New task created',
        'task' => $pages
      ]);
    }

    // public function about(){
    //   $page = Page::where('slug', 'about')->first();
    //   return view('pages.index')->with('page', $page);
    // }

    // public function contact(){
    //   $page = Page::where('slug', 'contact')->first();
    //   return view('pages.contact')->with('page', $page);
    // }
}
