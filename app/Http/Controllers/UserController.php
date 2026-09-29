<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{  
    public function index()
    {
        $title = "Daftar Pengguna";
        $users = User::all();

        // Mengirim data menggunakan compact()
        return view('users.index', compact('title', 'users'));

        // Alternatif menggunakan array asosiatif:
        // return view('users.index', ['title' => $title, 'users' => $users]);
    }
}

