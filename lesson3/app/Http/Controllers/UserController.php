<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // ORM

        // $users = User::all();
        // $users = User::where('age', 18)->get();
        // $users = User::where('age', '>', 18)->get();
        // $users = User::where('age', '>', 18)->where('email', 'pepe@gmail.com')->get();
        // $users = User::where('age', '>', 18)->orWhere('email', 'pepe@gmail.com')->get();
        // $users = User::where('age', '>', 18)->orderBy('age', 'asc')->get();
        // $users = User::where('age', '>', 18)->limit(5)->get();
        // $users = User::where('age', '>', 18)->first();
        // $users = User::find(1);
        // $users = User::findOrFail(1);

        // DB::table('users')->insert('name' => 'Messi', ...);

        // SQL RAW
        
        // $age = 19;
        // $users = DB::select(DB::raw('select * from users where age = 19'));
        // $users = DB::select(DB::raw("select * from users where age = '$age'"));

        return view('user.index', compact('users'));
    }

    public function create(){
        $user = new User();

        $user->name = 'Pepe';
        $user->email = 'pepe@gmail.com';
        $user->password = '12345';
        $user->age = '19';
        $user->address = 'Calle Ficticia, 1';
        $user->zip_code = '10000';
        $user->save();

        User::create([
            "name"=>"Jose",
            "email" => 'jose@gmail.com',
            "password" => '12345',
            "age" => 19,
            "address" => 'Calle Ficticia, 3',
            "zip_code" => 10000,
        ]);

        User::create([
            "name"=>"Alejandro",
            "email" => 'alejandro@gmail.com',
            "password" => '12345',
            "age" => 20,
            "address" => 'Calle Ficticia, 3',
            "zip_code" => 10000,
        ]);

        return redirect()->route('user.index');
    }
}
