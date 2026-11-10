@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h1>Dashboard</h1>
<p style="margin: 10px 0 25px; color: #806f62;">
    Welkamm, <b>{{ $username }}</b>! Good 2 See U Again.
</p>

<div style="display: flex; gap: 20px; flex-wrap: wrap;">

    <div style="background: white; padding: 25px; border-radius: 10px; flex: 1; min-width: 180px;">
        <p>Total Sepatu</p>
        <h2>3</h2>
    </div>

    <div style="background: white; padding: 25px; border-radius: 10px; flex: 1; min-width: 180px;">
        <p>Sepatu Tersedia</p>
        <h2>2</h2>
    </div>

    <div style="background: white; padding: 25px; border-radius: 10px; flex: 1; min-width: 180px;">
        <p>Sepatu Terjual</p>
        <h2>1</h2>
    </div>

</div>

<div style="background: white; padding: 25px; border-radius: 10px; margin-top: 25px;">
    <h3>Selamat Datang di SOloved</h3>
    <p style="margin-top: 10px; color: #806f62;">
        Kelola koleksi sepatu preloved tokomu dengan mudah melalui SOloved.
    </p>
</div>

@endsection
