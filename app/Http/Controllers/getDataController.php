<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class getDataController extends Controller
{
    
public function donne(Request $request){
   

//session::put(['mail'=>$request->input('email')]);
$request->validate([
'nom'=>'required|max:5',
'prenom'=>'required'

]);

    $data=[];
    $data['nom']=$request->input('nom');
    $data['prenom']=$request->input('prenom');
    $data['email']=$request->input('email');
    $data['password']=$request->input('password');



//session::flash('message','trebien');
    return view('affichage',['donne'=>$data]);
}

public function connect(Request $request ){

    $email=$request->input('email');
    $password=$request->input('password');

    if($email=='test@gmail.com'&&$password=='12345'){


        session::put('email',$email);

return view('accueil');

    }else{

        return view('connexion');
    }


}
public function deconnect(){

    session::flush();
    return view('connexion');
}



}
