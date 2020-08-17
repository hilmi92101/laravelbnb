<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Bookable;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookableController extends Controller
{
    public function index()
    {
    	return Bookable::all();
    }

    public function show($id)
    {
    	try {
    	    return Bookable::findOrFail($id);
    	    
    	} catch(ModelNotFoundException $e) {
    	    return json_encode([

    	        'status' => false,

    	    ]);
    	}
    }
}
