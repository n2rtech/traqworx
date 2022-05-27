<?php

namespace App\Http\Controllers\Superadmin\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter_box          = 'hide';
        $filter_name         = $request->name;
        $filter_email        = $request->email;
        $filter_status       = $request->status;

        if(isset($filter_name) || isset($filter_email) || isset($filter_status)){
            $filter_box      = 'show';
        }

        $admins            = Admin::latest();

        if(isset($filter_name)){
            $admins        =  $admins->where('name', 'LIKE', "%".$filter_name."%");
        }
        if(isset($filter_email)){
            $admins        =  $admins->where('email', $filter_email);
        }
        if(isset($filter_status)){
            $admins        =  $admins->where('status', $filter_status);
        }

        $admins            = $admins->get();

        return view('superadmin.admins.list', compact('admins', 'filter_box', 'filter_name', 'filter_email', 'filter_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin           = Admin::find($id);
        return view('superadmin.admins.edit', compact('admin'));
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
