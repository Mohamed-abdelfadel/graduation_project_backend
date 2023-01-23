<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Http\Requests\UpdateGamerRequest;
use Illuminate\Support\Facades\validator;


class GamerController extends Controller
{
    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Your email or password is not correct'
            ], 400);
        }

        $token = $user->createToken('token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 200);
    }

    public function register(Request $request){

        $data = $request->all() ;
        $rules = [
            'name' => 'required|unique:users,name|max:50' ,
            'email' => 'required|unique:users,email|max:255|email:rfc,dns' ,
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


            $token = $user->createToken('token')->plainTextToken ;

            $response =[
                "message" => "Success",
                "token" => $token,
                "user" => $user] ;
            return response($response,200) ;
        }
        else{
            return response($validator->errors(),400);
        }
    }
    public function logout(Request $request){
        auth()->user()->tokens()->delete() ;
        return ["message" => "logged out"] ;
    }
    public function show(User $gamer){

    }

    public function update(UpdateGamerRequest $request, User $gamer){

    }

    public function destroy(User $gamer){

    }
}
