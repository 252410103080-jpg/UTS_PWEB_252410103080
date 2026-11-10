@extends('layouts.app')

@section('title', 'Pengelolaan Sepatu')

@section('content')

<h1>Pengelolaan Sepatu</h1>
<p style="margin: 10px 0 25px; color: #806f62;">
    Halo {{ $username }}, berikut daftar koleksi sepatu tokomu.
</p>

<div style="background: white; padding: 20px; border-radius: 10px; overflow-x: auto;">

    <table style="width: 100%; border-collapse: collapse; text-align: left;">

        <thead>
            <tr style="background: #eee8df;">
                <th style="padding: 14px;">Nama Sepatu</th>
                <th style="padding: 14px;">Brand</th>
                <th style="padding: 14px;">Ukuran</th>
                <th style="padding: 14px;">Harga</th>
                <th style="padding: 14px;">Kondisi</th>
                <th style="padding: 14px;">Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sepatu as $item)
            <tr>
                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    {{ $item['nama'] }}
                </td>

                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    {{ $item['brand'] }}
                </td>

                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    {{ $item['ukuran'] }}
                </td>

                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    Rp {{ number_format($item['harga'], 0, ',', '.') }}
                </td>

                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    {{ $item['kondisi'] }}
                </td>

                <td style="padding: 14px; border-bottom: 1px solid #eee;">
                    {{ $item['status'] }}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

<div style="margin-top: 30px; text-align: center; background: #fff; padding: 25px; border-radius: 12px;">
    <h3>Find Your Next Favorite Pair!</h3>

    <p style="margin: 10px 0; color: #806f62;">
        Interested in our collection? Contact us through Instagram.
    </p>

    <p style="font-weight: bold; color: #4b382e;">
        Instagram: @SOloved.store
    </p>
</div>

</div>

@endsection
