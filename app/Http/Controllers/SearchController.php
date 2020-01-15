<?php
namespace App\Http\Controllers;

class SearchController extends Controller{
    
    public function getResults(){
        return view('search.results');
    }
}