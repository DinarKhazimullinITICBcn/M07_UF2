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
        return view('admin.centres');
    }
    public function alumnat() {
        return view('admin.alumant');
    }
    public function professorat() {
        return view('admin.professorat');
    }
    public function adminVista(){
        return view('admin.admin_view');
    }
}