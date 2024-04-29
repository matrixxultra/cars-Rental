<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Marque;
use App\Models\Picture;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        return view("admins.index");
    }
    public function all_voitures(){
        $voitures = Voiture::paginate(3);
        return view("admins.voitures" , compact("voitures"));
    }
    public function all_marques(){
        $marques = Marque::paginate(5);
        return view("admins.marques",compact("marques"));
    }
    public function ajouter_voiture(){
        $marques = Marque::all();
        $categories = Categorie::all();

        return view("admins.ajouter_voiture",compact("marques","categories"));
    }
    public function store_voiture(Request $req){
        $req->validate([
        "marque_id"=>"required",
        "categorie_id"=>"required",
        "color"=>"required",
        "année"=>"required",
        "modele"=>"required",
        "prix_location_jour"=>"required",
        ]);
        Voiture::create($req->all());

        return redirect("/admin/voitures")->with("success","La Voiture Est Ajouté Avec Succé");
    }
    public function edit_voiture(){
         
        /// dialk 
    }

    public function update_voiture(){
             // dialk
    }
    public function delete_voiture(Request $req){
             // dialk
    }

     public function ajouter_images(Request $req){
     $voiture = Voiture::findOrFail($req->route("id"));
     return view("admins.ajouter_images",compact("voiture"));

    }
    public function store_images(Request $req){
     $voiture = Voiture::findOrFail($req->route("id"));
     $req->validate([
        "pics.*"=>"required|image|mimes:png,jpg"
     ]);
     $data = [
        "voiture_id"=>$voiture->id
     ];

    foreach ($req->pics as $img) {

        $fileName = time().$img->getClientOriginalName();
        $path = $img->storeAs("voitures",$fileName,"public");
         $data["pics"] = "storage/".$path;
         Picture::create($data);

     }
     
    return redirect()->back()->with("success","Added With Success");

    }
    public function delete_images(String $id){
      $image = Picture::find($id);
      if (File::exists($image->pics)) {
          File::delete($image->pics);
      }
      $image->delete();
      return redirect()->back()->with("success","l'image est Supprimer avec Succés");
    }

    public function ajouter_marque(){
        return view("admins.ajouter_marque");
    }
    public function store_marque(Request $req){
        $req->validate([
            "name"=>"required",
            "image"=>"required|image|mimes:png,jpg",
        ]);
       $data = $req->all();
       if ($req->hasFile($req->file($req->image))) {
          $fileName = time().$req->file("image")->getClientOriginalName();
          $path = $req->file("image")->storeAs("marques",$fileName,"public");
          $data["image"] = 'storage/'.$path ;
       }
       Marque::create($data);
       return redirect("/admin/marques")->with("success","La Marque est Ajouté avec Success");
    }
    public function edit_marque(String $id){
        $marque = Marque::findOrFail($id);
        return view("admins.edit_marque",compact("marque"));
    }
    public function update_marque(Request $req){
        $marque = Marque::findOrFail($req->route("id"));
           $req->validate([
            "name"=>"required",
            "image"=>"image|mimes:png,jpg,jpeg"
           ]);
        $marque->name = $req->input("name");

        if ($req->hasFile($req->file($req->image))) {
            File::delete($marque->image);
            $fileName = time().$req->file("image")->getClientOriginalName();
            $path = $req->file("image")->storeAs("marques",$fileName,"public");
            $marque->image = 'storage/'.$path ;
            
         }
        $marque->save();
        return redirect()->back()->with("success","La marque est Modifié avec Succés");
    }
    
    
    public function annoncer(){

    }
    public function envoyer(Request $req){

    }
}
