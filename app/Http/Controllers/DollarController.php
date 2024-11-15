<?php

namespace App\Http\Controllers;

use App\Models\Dollar;
use Illuminate\Http\Request;
use App\Http\Resources\DollarCollection;

class DollarController extends Controller
{
    public function index(){
        // return response()->json(['dollars' => Dollar::all()]);
        return new DollarCollection(Dollar::all());
    }
}
