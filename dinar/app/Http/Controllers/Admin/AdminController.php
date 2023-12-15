<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(Request $request) {
        $emailCorrecte = 'admin@admin.com';
        $passwdCorrecte = '1234';
        $email = $request['email'];
        $passwd = $request['passwd'];
        if ($email == $emailCorrecte && $passwd == $passwdCorrecte) {
            return view('admin.admin_view');
        }
        return redirect('/dinar/signin');
    }
    public function centres() {
        $centres = array(
            array("id" => 1, "name" => "Instritut TIC de Barcelona", "address" => "C/ de Sancho de Avila, 133", "cp" => "08018", "city" => "Barcelona"),
            array("id" => 2, "name" => "Jaume Balmes", "address" => "C/ Diputacio, 150", "cp" => "08013",  "city" => "Barcelona")
        );
        return view('admin.centres')->with(['centres'=>$centres]);
    }
    public function alumnat() {
        $alumnes = array(
            array("id" => 1, "name" => "Carles", "surname" => "Canals", "rol" => "Alumne", "email" => "roger@roger.com"),
            array("id" => 2, "name" => "Sofia", "surname" => "Taraco", "rol" => "Alumne", "email" => "sara@sara.com"),
            array("id" => 3, "name" => "Francesc", "surname" => "Riugal", "rol" => "Alumne", "email" => "pere@pere.com"),
            array("id" => 4, "name" => "Laia", "surname" => "Manresa", "rol" => "Alumne", "email" => "sara@sara.com")
        );
        return view('admin.alumnat')->with(['alumnes'=>$alumnes]);
    }
    public function professorat() {
        $professors = array(
            array("id" => 1, "name" => "Roger", "surname" => "Sobrino", "rol" => "Professor", "email" => "roger@roger.com"),
            array("id" => 2, "name" => "Sara", "surname" => "Gonzalez", "rol" => "Professora", "email" => "sara@sara.com"),
            array("id" => 3, "name" => "Pere", "surname" => "Guitart", "rol" => "Professor", "email" => "pere@pere.com"),
            array("id" => 4, "name" => "Oriol", "surname" => "Xisco", "rol" => "Professor", "email" => "sara@sara.com")
        );
        return view('admin.professorat')->with(['professors'=>$professors]);
    }
    public function adminVista(){
        return view('admin.admin_view');
    }
}