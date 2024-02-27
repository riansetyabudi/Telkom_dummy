@extends('layouts.app')

@section('title')
    Categories | Catshop Admin
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('content')
<button type="button" class="btn btn-tambah" style="font-size: 20px;">
    <a href="/category/tambah" style="text-decoration: none;">
        <i class="fas fa-plus"></i> Tambah Data </a>
</button>
<button type="button" class="btn btn-cetak" style="font-size: 20px;">
    <a href="/category/cetak" style="text-decoration: none;">
        <i class="fas fa-print"></i> Cetak Data </a>
</button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Categories</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="300px"></td>
                    <td>{{ $category->nama }}</td>
                    <td>Rp. {{ number_format($category->harga) }}</td>
                    <td>
                        <a href="/category/edit/{{ $category->id_categories }}"><i class="fas fa-edit"></i> Edit</a>
                        <a href="/category/hapus/{{ $category->id_categories }}"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

<style>
    .table-data {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
    }

    .table-data th,
    .table-data td {
        border: 1px solid #bd2d2d;
        padding: 8px;
        text-align: center;
        font-size: 20;
    }

    .table-data th {
        background-color: #f2f2f2;
        font-size: 20;
        text-align: center;
    }
    
    .buttons-container {
    margin: auto;
        display: flex;
    justify-content: center; /* Untuk membuat tombol di tengah */
    }
    
    .buttons-container .btn {
    margin:0 20px; /* Memberikan jarak antara tombol */
    }

    .
</style>
