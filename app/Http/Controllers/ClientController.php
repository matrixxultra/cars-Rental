<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function homepage(){
        return view("clients.home");
    }
    public function login(){
        return view("clients.login");
    }
    public function createAccount(){
        return view("clients.create");
    }
    public function store(Request $req){

        $req->validate([
            "name"=>"required",
            "prenom"=>"required",
            "email"=>"required|unique:users",
            "password"=>"required",
            "cin"=>"required",
            "phone_number"=>"required",
        ]);

        User::create([
            "name"=>$req->input("name"),
            "prenom"=>$req->input("prenom"),
            "email"=>$req->input("email"),
            "password"=>Hash::make($req->input("password")),
            "cin"=>$req->input("cin"),
            "phone_number"=>$req->input("phone_number"),
            "addresse"=>$req->input("addresse")
        ]);
        return redirect("/login")->with('success',"Votre Compte Est Crée Avec Success");

    }
    public function about(){
        return view("clients.about");
    }
    public function contact(){
        return view("clients.contact");
    }
    public function cars(){
        return view("clients.cars");
    }
    public function showCar(Request $req){
        return view("clients.car");
    }
    public function deconnect(){
        auth()->logout();
        session()->flush();
        return redirect("/");
    }
}
