<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utente;

class userController extends Controller
{
    public function index(){
        $utenti = Utente::all();
        
        
        return view("users",compact("utenti"));
    }
}
