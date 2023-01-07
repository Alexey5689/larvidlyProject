<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vidlyUsers;

class VidlyUserController extends Controller
{
    //
    public function store(Request $request){
        $vidlyUser = new vidlyUsers;
        $vidlyUser->name = $request->input('name');
        $vidlyUser->lastname = $request->input('lastname');
        $vidlyUser->email = $request->input('email');
        $vidlyUser->password = $request->input('password');
        $vidlyUser->save();
        return response()->json([
            'status'=>200,
            'message'=>'Регистрация прошла успешно!',
        ]);

    }
}
