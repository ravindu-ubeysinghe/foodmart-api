<?php

namespace App\Http\Controllers;

use App\Models\Site;

class SearchController extends Controller
{
    public function index(){
        return 'search';
    }

    /**
     * String: 'domain': String e.g. food within which the search is to be performed
     * String: 'q': which is the actual search query
     */
    public function searchByProductName(){
      // with validators 
      $data = request()->validate([
        'domain' => 'required',
        'q' => 'required'
      ]);

      if ($data) {
        $site = Site::getSiteByDomain($data['domain']);

        $site_products = $site ? $site->products()->get() : [];
        
        if ($site_products){
          return response()->json([
            'success' => true,
            'products' => $site_products,
          ], 200);
        }
      }

      return response()->json([
        'success' => false,
        'error_message' => 'Your search query did not match any records in our database',
      ], 404);

    }

    /**
     * 'domain' e.g. domain within which the search is to be performed
     * if domain in main domains config (to be created) search in the whole 'category'
     * 'site_custom' which is a json object containing in this case, 'cuisine'
     */
    // public function searchBySiteCustom(Request $request){
    //   $referer = parse_url($request->header('referer'))['host']; // get proper domain as param
    //   $site_custom = $request->input('site_custom');
    //   // object to obtain key, value from a json object
    //   $sites_selected = Site::where('name', $product_name)
    //               ->orWhere('name', 'like', '%' . $product_name . '%')->get();
      
    //   if ($product_name && sizeof($products) > 0){
    //     return response()->json([
    //       'success' => true,
    //       'products' => $products,
    //     ], 200);  
    //   } else {
    //     return response()->json([
    //       'success' => false,
    //       'error_message' => 'Your search query did not match any records in our database',
    //     ], 404);  
    //   }
    // }

    // /**
    //  * 'domain' e.g. the domain (the site) to be searched
    //  */
    // public function searchBySiteName(Request $request){
    //   $referer = parse_url($request->header('referer'))['host']; // get proper domain as param
    //   $site_custom = $request->input('site_custom');
    //   // object to obtain key, value from a json object
    //   $sites_selected = Site::where('name', $product_name)
    //               ->orWhere('name', 'like', '%' . $product_name . '%')->get();
      
    //   if ($product_name && sizeof($products) > 0){
    //     return response()->json([
    //       'success' => true,
    //       'products' => $products,
    //     ], 200);  
    //   } else {
    //     return response()->json([
    //       'success' => false,
    //       'error_message' => 'Your search query did not match any records in our database',
    //     ], 404);  
    //   }
    // }
}
