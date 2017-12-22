<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
use App\Organisation;
use App\Address;

class UserController extends Controller
{    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $users = User::all()->sortBy('name');
        return view('users.index', compact('users'));

    }

    public function show(User $user){
        
        //$projects = Project::all()->sortBy('project_id');

        return view('users.show', compact(['user']));

    }

    public function create(){

        $countries = Address::countries();
        $organisations = Organisation::all()->sortBy('name');        
        return view('users.create', compact(['organisations', 'user', 'countries']));

    }

    public function store(Request $request){

        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'organisation_id' => 'numeric|max:4',
        ])->validate();
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'organisation_id' => $request['organisation_id'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('/users')->with([
            'status' => 'success',
            'message' => 'You successfully created a new user.',
        ]);
    }

    public function edit(Request $request){

        return view('users.edit');

    }

}