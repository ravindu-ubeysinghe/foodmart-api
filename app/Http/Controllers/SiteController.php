<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Component;
use App\Models\Page;

class SiteController extends Controller
{
    public function index(){
      return json_encode([
        'success' => false,
        'message' => 'Enter a valid method'
      ]);
    }

    public function getFullSite(Request $request){
      $domain = $request->input('domain');
      $site = Site::where('domain', $domain)->first();
      $components = Component::where('domain', $domain)->get();
      $pages = Page::where('domain', $domain)->get();
      
      if ($site){
        return response()->json([
          'success' => true,
          'site' => $site,
          'pages' => $pages,
          'components' => $components
        ], 200);  
      } else {
        return response()->json([
          'success' => false,
          'error_message' => 'Site requested does not exist',
        ], 404);  
      }

      // ERROR ? success => false, error => error_message(string)
    }
}
