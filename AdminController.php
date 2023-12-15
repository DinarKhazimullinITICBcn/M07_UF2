<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $emailAdmin = "joel@gmail.com";
    private $contraAdmin = "edu";
    public function view(Request $request)
    {
        $emailUsuari = $request->input('email');
        $contraUsuari = $request->input('password');

        if ($emailUsuari === $this->emailAdmin && $contraUsuari === $this->contraAdmin) {
            return view('Admin.admin')->with(['result' => 'Aqui es mostraran els centres que el rol admin por veure']);
        }
        return redirect('Joel/signin')->with('error', 'Email o contra incorrectes');
    }
    public function centres()
    {
        /*
        $centres = array(
            array("ID" => 1, "NAME" => "TIC de BCN", "ADRESS" => "sancho de avila", "CP" => "08018", "CITY" => "BCN"),
            array("ID" => 2, "NAME" => "Joel", "ADRESS" => "algo vasco", "CP" => "007", "CITY" => "BCN")
        );
        */
        return view('Admin.centres')->with(['result' => 'Aqui es mostraran els centres que el rol admin por veure']);
    }
    public function alumnat()
    {
        $alumnat = array(
            array("ID" => 1, "NAME" => "Alex", "SURNAME" => "Andreev", "ROL" => "Alumne", "EMAIL" => "alex@gmail.com"),
            array("ID" => 2, "NAME" => "Joel", "SURNAME" => "Ghanem", "ROL" => "Alumne", "EMAIL" => "joel@gmail.com")
        );
        return view('Admin.alumnat',['alumnat' => $alumnat])->with(['result' => 'Aqui es mostraran els centres que el rol admin por veure']);
    }
    public function professorat()
    {
        $professorat = array(
            array("ID" => 1, "NAME" => "Moises", "ROL" => "Professor", "EMAIL" => "moises@gmail.com"),
            array("ID" => 2, "NAME" => "Jordi", "ROL" => "Professor", "EMAIL" => "jordi@gmail.com")
        );
        return view('Admin.professorat',['professorat' => $professorat])->with(['result' => 'Aqui es mostraran els centres que el rol admin por veure']);
    }
    public function viewGet(){
        return view('Admin.admin');
    }
}
