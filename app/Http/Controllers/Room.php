<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Room as RoomModel;
use Illuminate\Support\Facades\DB;


class Room extends Controller {

   public function index(Request $request) {
        $data = RoomModel::all();
        if ($data->count()){
            return response()->json(['status' => true, 'data' => $data]);
        }else{
            return response()->json(['status' => false, 'message' => 'Room empty'])->setStatusCode(404);
        }


   }
    public function create(Request $request) {
        try {
            $data = [
                'name' => $request->name,
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
                'mafia_count' => $request->mafia_count,
                'cityzen_count' => $request->cityzen_count,
                'don' => $request->don,
                'sherif' => $request->sherif,
                'manyak' => $request->manyak,
                'doctor' => $request->doctor
            ];
            $is_exist = RoomModel::all()->where('name', '=', $request->name)->count();
            if (!$is_exist){
               $res =  RoomModel::create($data);
                DB::table('gamers')->insert([
                    'name' => 'admin',
                    'roole_id' => 1,
                    'room_id' => $res->id
                ]);
                return response()->json(['message' => 'created', 'status'=> true])->setStatusCode(201);
            }else{
                return response()->json(['status' => false, 'message' => 'Room alety exist'])->setStatusCode(404);
            }

        }catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e])->setStatusCode(404);
        }
    }
}
