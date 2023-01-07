<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
use Hash;
class UserController extends Controller
{

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials) || $request->phone != 'kartoteka') {
            return response()->json(['message' => 'Parol yoki login xato!'], 299);
        }

        $role = Auth::user()->isAdmin ? ['admin'] : ['user'];

        $token = Auth::user()->createToken('token-name', $role)->plainTextToken;
        return response()->json(['token' => $token,'type' => 'Bearer',], 200);
    }


    public function register(Request $res)
    {

        $validate = Validator::make($res->all(),[
            'phone' => 'required|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ],$messages = [
            'required' => ":attribute bo'sh bo'lmasligi kerak.",
            'unique' => ":attribute band.",
            'min' => ":attribute :min simboldan kam bo'lmasligi kerak.",
            'phone' => ":attribute to'gri emas",
            'confirmed' => ":attributelar mos kelmayabdi"
        ],[
            'phone' => "Login",
            'password' => 'Parol'
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),299);
        }
        
        $user = User::create([
            'name' => $res['name'],
            'phone' => $res['phone'],
            'commerse' => [],
            'tableNumber' => $res['tableNumber'],
            'password' => Hash::make($res['password']),
        ]);

        return response()->json( true , 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        
        return response()->json(['message' => 'logout'], 200);
    }

    public function getUser(Request $req){
        return $req->user();
    }


    public function logoutUser(Request $req){
        $user = $req->user();

        return $user->tokens()->where([
            ['tokenable_id', $user->id],
            ['id', $req->id],
        ])->delete();
    }
}
