<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Bookable;
use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookableController extends Controller
{
    public function index()
    {
        return BookableIndexResource::collection(

            Bookable::all()

        );
    }

    public function show($id)
    {
    	try {
    	    return new BookableShowResource(Bookable::findOrFail($id));
    	    
    	} catch(ModelNotFoundException $e) {
    	    return json_encode([

    	        'status' => false,

    	    ]);
    	}
    }
}
