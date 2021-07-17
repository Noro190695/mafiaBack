<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Roole as RooleModel;

class Roole extends Controller
{
    public function index() {
        try {
            $data = RooleModel::all();
            if ($data->count()){
                return response()->json(['status' => true, 'data' => $data]);
            }else{
                return response()->json(['status' => false])->setStatusCode(404);
            }
        }catch ( \Exception $e){
            return response()->json(['status' => false])->setStatusCode(404);
        }
    }
    public function create(Request $request) {
        try {
            $data = RooleModel::all()->where('name', $request->name);
            if ($data->count()){
                return response()->json(['status' => false, 'message' => 'Roole exist', 'data' => $data]);
            }else{
                RooleModel::create(['name' => $request->name]);
                return response()->json(['message' => 'created', 'status'=> true])->setStatusCode(201);
            }


        }catch ( \Exception $e){
            return response()->json(['status' => false])->setStatusCode(404);
        }
    }
}
