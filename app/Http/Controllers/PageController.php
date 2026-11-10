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
        'nama' => 'Nike Court Vision Low',
        'brand' => 'Nike',
        'ukuran' => 38,
        'harga' => 250000,
        'kondisi' => 'Sangat Baik',
        'status' => 'Tersedia'
    ],
    [
        'nama' => 'Adidas Gazelle Pink',
        'brand' => 'Adidas',
        'ukuran' => 37,
        'harga' => 300000,
        'kondisi' => 'Baik',
        'status' => 'Tersedia'
    ],
    [
        'nama' => 'Converse Run Star Hike',
        'brand' => 'Converse',
        'ukuran' => 39,
        'harga' => 275000,
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
