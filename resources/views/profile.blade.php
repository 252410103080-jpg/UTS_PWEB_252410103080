@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<h1>Profile</h1>
<p style="margin: 10px 0 25px; color: #806f62;">
    Informasi akun dan toko SOloved.
</p>

<div style="max-width: 600px; background: white; padding: 30px; border-radius: 12px;">

    <div style="width: 75px; height: 75px; background: #eee8df; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px;">
        S
    </div>

    <h2 style="margin-top: 20px;">{{ $username }}</h2>

    <p style="margin-top: 15px;">
        <b>Nama Toko:</b> SOloved
    </p>

    <p style="margin-top: 10px; color: #806f62;">
        SOloved merupakan toko yang menyediakan berbagai pilihan sepatu preloved berkualitas dengan harga terjangkau.
    </p>

</div>

@endsection
