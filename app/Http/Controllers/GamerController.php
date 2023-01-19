<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Http\Requests\UpdateGamerRequest;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Auth;


class GamerController extends Controller
{
    public function login(Request $request){
        $data = $request->only('email', 'password') ;
        $rules = [
            'email' => 'required|max:255|email:rfc,dns',
            'password' => 'required',
        ] ;
        $validator = Validator::make($data,$rules) ;
        $credentials = $request->only('email', 'password');
//        return $credentials ;
        if (Auth::attempt($credentials) and $validator->passes()) {
            return response()->json(["message" => "Success"]);
        }
        else {
            return response()->json(["message" => "Failed"]);
        }
    }

    public function store(Request $request){

        $data = $request->all() ;
        $rules = [
            'name' => 'required|unique:gamers,name|max:50' ,
            'email' => 'required|unique:gamers,email|max:255|email:rfc,dns' ,
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->uncompromised()],
            'cpassword' => 'required|same:password'
        ] ;
        $message= [
            "unique:gamers" => "This :attribute has been used before." ,
            "same" => "Password and confirm password must be identically same",

        ];
        $validator = Validator::make($data,$rules,$message) ;
        if ($validator->passes()){
            $user = new User() ;
            $user->name = request('name') ;
            $user->email = request('email') ;
            $user->password = Hash::make($request->password) ;
//            $gamer->password = request('password') ;
            $user->save() ;
            return ["message" => "Success"] ;
        }
        else{
            return $validator->errors();
        }
    }

    public function show(User $gamer){

    }

    public function update(UpdateGamerRequest $request, User $gamer){

    }

    public function destroy(User $gamer){

    }
}
