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

    public function getFullSite(){
      // with validators 
      $data = request()->validate([
        'domain' => 'required',
      ]);
      
      if($data) {
        $site = Site::getSiteByDomain($data['domain']);

        if($site) {
          $components = $site->components()->get() ?: [];
          $pages = $site->pages()->get() ?: [];
  
          return response()->json([
            'success' => true,
            'site' => $site,
            'pages' => $pages,
            'components' => $components,
          ], 200);  
        }
      }
      
      return response()->json([
        'success' => false,
        'error_message' => 'Site requested does not exist',
      ], 404);
      // ERROR ? success => false, error => error_message(string)
    }
}
