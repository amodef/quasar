<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Address;
use App\Organisation;
use App\User;

class OrganisationController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisations = Organisation::all()->sortBy('name');
        return view('organisations.index', compact('organisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $countries = Address::countries();
        return view('organisations.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        Validator::make($r->all(), [
            'name' => 'required|string|max:255|unique:organisations',
            'street' => 'required|string|max:255',
            'postcode' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',         
        ])->validate();
        
        $organisation = Organisation::create([
            'name' => $r['name'],
        ]);


        Address::create([
            'street' => $r['street'],
            'postcode' => $r['postcode'],
            'city' => $r['city'],
            'country' => $r['country'],
            'organisation_id' => $organisation->id,
        ]);

        return back()->with([
            'status' => 'success',
            'hint' => 'Good job!',
            'message' => 'You successfully created a new organisation.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation){
        
        $users = Organisation::find(1)->users();

        return view('organisations.show', compact(['organisation', 'users']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
