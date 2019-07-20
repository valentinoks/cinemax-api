<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bioskop;

class BioskopController extends Controller
{
    public function getAllBioskops(){
        $bioskops = Bioskop::all('name', 'location');
        return response()->json([
            'code' => 200,
            'message' => "OK",
            'data' => $bioskops
        ]); 
    }

    public function createBioskop(Request $request){
        Bioskop::create([
            'name'=>$request->name,
            'location'=>$request->location,
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'Success Bioskop Created'
        ]);
    }
}
