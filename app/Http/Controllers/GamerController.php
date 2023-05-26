<?php
/////////////////////////////////Resources/////////////////////////////////
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Http\Requests\UpdateGamerRequest;
use Illuminate\Support\Facades\validator;


class GamerController extends Controller
{

/////////////////////////////////Register method/////////////////////////////////
    public function register(Request $request){
        $rules =
            [
                'name' => 'required|unique:users,name|max:50' ,
                'email' => 'required|unique:users,email|max:255|email:rfc,dns' ,
                'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->uncompromised()],
                'cpassword' => 'required|same:password'
            ];
        $messages =
            [
                "name.unique" => "This Name has been used before." ,
                "email.unique" => "This Email has been used before." ,
                "cpassword.same" => "Password and confirm password must be identically same",
            ];

        $data = $request->validate($rules , $messages);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $token = $user->createToken('token')->plainTextToken;

        $response = [
            "message" => "Happy to have you $user->name",
            'user' => $user,
            'token' => $token
        ];

        return response($response, 200);
    }

/////////////////////////////////Login method/////////////////////////////////
    public function login(Request $request){
        $rules =
            [
                'email' => 'required|string',
                'password' => 'required|string'
            ];
        $data = $request->validate($rules);

        // Check if user existed
        $user = User::where('email', $data['email'])->first();

        // Check email
        if(!$user) {
            return response([
                "message" => "Your account doesn't exist. Create new account or try again"
            ], 400);
        }

        // Check password
        if (!Hash::check($data['password'], $user->password)){
            return response([
                'message' => 'Your Email or Password is incorrect. Please try again'
            ], 400);
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

            $success['token'] =  $user->createToken('token')->plainTextToken;
            $response = [
                "message" => "Welcome back $user->name",
                "user" => $user,
                "token" => $success['token']
            ];
            $user->device_key = $request['fcm'] ;
            $user->save();
            return response($response, 200);
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete() ;
        return ["message" => "logged out"] ;
    }

    public function profile(){
        $user_id = Auth::user()->id;
        $profile = User::query()->select("name")->findOrFail($user_id);
        return response($profile);
    }

    public function update(UpdateGamerRequest $request, User $gamer){
    }

    public function destroy(User $gamer){
    }
}
