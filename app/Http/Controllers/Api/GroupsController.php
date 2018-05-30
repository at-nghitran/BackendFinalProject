<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Groups;

class GroupsController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth:api');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Groups::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Groups::create($request->all());
        return response($request->all(), 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Groups::findOrFail($id);
        if ( $group ) {
            return $group;
        } else {
            return response()->json(['Notfound', 404]);
        }
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
        $group = Groups::findOrFail($id);
        $group -> update($request->all());
        return ($group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Groups::findOrFail($id);
        $group -> delete();
        return ('success');
    }
}
