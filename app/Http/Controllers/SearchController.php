<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
  
class SearchController extends Controller{
    
    public function getResults(Request $request){
            
        $search_query = $request->input('search_query');
        if(!$search_query)
            return redirect()->route('dashboard');
        $search_results = User::where('email','LIKE', "%{$search_query}%")
          ->orWhere('id','LIKE',"%{$search_query}%")
          ->get();
          
        return view('search.results')->with('search_results', $search_results);
    }
}