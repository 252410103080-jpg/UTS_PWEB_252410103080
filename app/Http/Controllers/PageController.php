<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
{
    $username = $request->query('username', 'Pengguna');

    $sepatu = [
        [
            'nama' => 'Nike Air Force 1',
            'brand' => 'Nike',
            'ukuran' => 39,
            'harga' => 450000,
            'kondisi' => 'Sangat Baik',
            'status' => 'Tersedia'
        ],
        [
            'nama' => 'Adidas Samba',
            'brand' => 'Adidas',
            'ukuran' => 40,
            'harga' => 550000,
            'kondisi' => 'Baik',
            'status' => 'Tersedia'
        ],
        [
            'nama' => 'Converse Chuck Taylor',
            'brand' => 'Converse',
            'ukuran' => 38,
            'harga' => 300000,
            'kondisi' => 'Baik',
            'status' => 'Terjual'
        ]
    ];

    return view('pengelolaan', compact('sepatu', 'username'));
}

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('profile', compact('username'));
    }
}
