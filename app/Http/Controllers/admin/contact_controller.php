<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\contact\contact_create_request;
use App\Models\admin\contacts;
use Illuminate\Http\Request;

class contact_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.contact.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->address_view.'create_contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(contact_create_request $request)
    {
        contacts::create($request->all());
        return back()->with('success','اطلاعات با موفقیت تغییر کرد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
