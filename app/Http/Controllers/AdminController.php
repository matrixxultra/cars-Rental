<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admins.index");
    }
    public function all_voitures(){
        return view("admins.voitures");
    }
    public function all_marques(){
        return view("admins.marques");
    }
    public function ajouter_voiture(){
        return view("admins.ajouter_voiture");
    }
    public function store_voiture(Request $req){

    }
    
    public function ajouter_marque(){
        return view("admins.ajouter_marque");
    }
    public function store_marque(){

    }
}
