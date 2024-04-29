<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Voiture;
use App\Mail\PaimentCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $voitures = Voiture::whereNull("promotion")->get();
        $promotion = Voiture::whereNotNull("promotion")->first();
        return view("clients.cars",compact("voitures","promotion"));
    }
    public function showCar(String $id){
        $voiture = Voiture::findOrFail($id);
        return view("clients.car",compact("voiture"));
    }
    public function louer(String $id){
        $voiture = Voiture::findOrFail($id);
        return view("clients.louer",compact("voiture"));
    }
    public function store_location(Request $req){
        $voiture = Voiture::find($req->route("id"));
        $req->validate([
            "date_debut"=>"required|date",
            "date_fin"=>"required|date|after:date_debut"
        ]);
        $user = User::find(auth()->guard("web")->user()->id) ;
        $date1 = Carbon::parse($req->date_debut);
        $date2 = Carbon::parse($req->date_fin);
        $user->voitures()->attach($req->voiture_id,
        [
            "date_debut"=>$req->date_debut,
            "date_fin"=>$req->date_fin,
            "prix_total"=>$date2->diffInDays($date1) * $voiture->prix_location_jour
        ]);
        //Mail::to($user->email)->send(new PaimentCar($user->voitures->latest()));
        return redirect()->back();


    }
    public function deconnect(){
        auth()->logout();
        session()->flush();
        return redirect("/");
    }
}
