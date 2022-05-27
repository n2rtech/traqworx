<?php

namespace App\Http\Controllers\Superadmin\Package;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter_box          = 'hide';
        $filter_name         = $request->name;
        $filter_billing_type = $request->billing_type;
        $filter_status       = $request->status;

        if(isset($filter_name) || isset($filter_billing_type) || isset($filter_status)){
            $filter_box      = 'show';
        }

        $packages            = Package::latest();

        if(isset($filter_name)){
            $packages        =  $packages->where('name', 'LIKE', "%".$filter_name."%");
        }
        if(isset($filter_billing_type)){
            $packages        =  $packages->where('billing_type', $filter_billing_type);
        }
        if(isset($filter_status)){
            $packages        =  $packages->where('status', $filter_status);
        }

        $packages            = $packages->get();

        return view('superadmin.packages.list', compact('packages', 'filter_box', 'filter_name', 'filter_billing_type', 'filter_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.packages.create');
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
        $package           = Package::find($id);
        return view('superadmin.packages.edit', compact('package'));
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
