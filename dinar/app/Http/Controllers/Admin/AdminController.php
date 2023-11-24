<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function centres() {
        return view('Admin.admin')->with(['result'=>'Aqui es mostraran els centres que el rol admin pot veure']);
    }
    public function usuaris(Request $request) {
        $emailCorrecte = 'admin@admin.com';
        $passwdCorrecte = '1234';
        $email = $request['email'];
        $passwd = $request['passwd'];
        if ($email == $emailCorrecte && $passwd == $passwdCorrecte) {
            return view('admin.admin_view');
        }
        return view('signin');
    }
}
