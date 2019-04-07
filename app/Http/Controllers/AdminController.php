<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin");
    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        echo $request->input("email");
        echo "<br>";
        echo $request->input("password");
    }

    public function show(Admin $admin)
    {

    }

    public function edit(Admin $admin)
    {

    }

    public function update(Request $request, Admin $admin)
    {

    }
    public function destroy(Admin $admin)
    {
 
    }
}
