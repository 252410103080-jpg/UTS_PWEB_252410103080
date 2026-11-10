@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div style="max-width: 420px; margin: 60px auto; background: white; padding: 35px; border-radius: 12px;">

    <h1 style="margin-bottom: 10px;">Welcome to SOloved!</h1>
    <p style="color: #806f62; margin-bottom: 25px;">Silakan masukkan username untuk melanjutkan.</p>

    <form action="{{ route('dashboard') }}" method="GET">

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username" required
        style="width: 100%; padding: 12px; margin: 10px 0 20px; border: 1px solid #ddd; border-radius: 6px;">

        <button type="submit" style="width: 100%; padding: 12px; background: #4b382e; color: white; border: none; border-radius: 6px; cursor: pointer;">
            Login
        </button>

    </form>

</div>

@endsection
