<?php
/////////////////////////////////Resources/////////////////////////////////
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Http\Requests\UpdateGamerRequest;



class GamerController extends Controller
{
/////////////////////////////////Login method/////////////////////////////////
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
                'message' => 'Your Email or Password is not correct'
            ], 400);
        }

        $token = $user->createToken('token')->plainTextToken;

        $response = [
            "message" => "Welcome back $user->name",
            "user" => $user,
            "token" => $token
        ];

        return response($response, 200);
    }

    public function register(Request $request){

        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
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
