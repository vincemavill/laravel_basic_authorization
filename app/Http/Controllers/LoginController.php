<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {

        $authorization = base64_encode('vince:admin');

        return view('login', compact('authorization'));
    }

    public function create()
    {

    }
    public function store(Request $request)
    {

    }

    public function show(Login $login)
    {
 
    }

    public function edit(Login $login)
    {
  
    }

    public function update(Request $request, Login $login)
    {

    }
    public function destroy(Login $login)
    {

    }
}
