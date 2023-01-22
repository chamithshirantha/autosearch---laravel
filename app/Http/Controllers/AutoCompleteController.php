<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class AutoCompleteController extends Controller
{
    public function index(){
        return view('autocomplete');
    }

    public function autocompleteSearch(Request $request){
       $query = $request->get('query');
       $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
       return response()->json($filterResult); 
    }
}
