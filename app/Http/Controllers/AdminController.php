<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Marque;
use App\Models\Picture;
use App\Models\Voiture;
use App\Models\Categorie;
use App\Notifications\AnnonceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index(){
        $data = DB::table("user_voiture")->join("users","users.id","=","user_voiture.user_id")
        ->join("voitures","user_voiture.voiture_id","=","voitures.id")
        ->get();
        //dd($data);
        return view("admins.index",compact("data"));
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
    public function edit_voiture($id){
         /// dialk
        $voiture = Voiture::find($id);

        $marques = Marque::all();

    $categories = Categorie::all();

    return view('admins.edit_voiture', compact('voiture', 'marques', 'categories'));

       
    }

    public function update_voiture(Request $request){    
        $voiture = Voiture::find($request->id ); 
        // dialk
     $request->validate([
         'marque_id' => 'required',
         'categorie_id' => 'required',
         'modele' => 'required',
         'color' => 'required',
         'année' => 'required|numeric',
         'stock' => 'required|numeric',
         'prix_location_jour' => 'required|numeric',
     ]);
            
     $voiture->marque_id = $request->marque_id;
     $voiture->categorie_id = $request->categorie_id;
     $voiture->modele = $request->modele;
     $voiture->color = $request->color;
     $voiture->année = $request->année;
     $voiture->stock = $request->stock;
     $voiture->prix_location_jour = $request->prix_location_jour;
     $voiture->save();
         
     return redirect("/admin/voitures")->with("success","La Voiture Est Modifié Avec Succé");           
    
    }
    public function delete_voiture(Request $req){
             // dialk
             $voiture = Voiture::find($req->route("id"));
             $voiture->delete();
             return redirect("/admin/voitures")->with("success","La Voiture Est Supprimé Avec Succé");
    }

     public function ajouter_images(Request $req){
     $voiture = Voiture::findOrFail($req->route("id"));
     return view("admins.ajouter_images",compact("voiture"));

    }
    public function store_images(Request $req){
     $voiture = Voiture::findOrFail($req->route("id"));
    //  $req->validate([
    //     "pics"=>"required|image|mimes:png,jpg"
    //  ]);
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
        return redirect("/admin/marques")->with("success","La marque est Modifié avec Succés");
    }
    public function delete_marque(Request $req){
        // dialk
        $marque = Marque::find($req->route("id"));
        $marque->delete();
        return redirect("/admin/marques")->with("success","La Marque est Supprimé avec Success");;
}

    public function annoncer(){
         return view("admins.annonce");
    }
    public function envoyer(Request $req){
        $req->validate([
            "contenu"=>"required"
        ]);
        $users = User::all();
        Notification::send($users,new AnnonceNotification($req->contenu));
        return redirect()->back()->with("success","L'annonce est Envoyé avec Succés");
    }
}
