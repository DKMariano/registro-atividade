<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Orgao;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function select_orgao()
    {
        $orgao = Orgao::all();
        return $orgao;
    }

    public function register()
    {
        $orgaos = $this->select_orgao();
        
        return view('auth.register', compact('orgaos'));
    }


    public function register_action(RegisterRequest $request)
    { 
         dd($request);
    }


}
