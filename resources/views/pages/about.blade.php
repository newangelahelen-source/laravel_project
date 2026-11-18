
@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            About Us
        </div>

        <div class="card-body">
            <h5 class="card-title">Profil Mahasiswa</h5>

            <p>Nama: {{ $nama }}</p>
            <p>Kelas: {{ $kelas }}</p>
            <p>NIM: {{ $nim }}</p>
        </div>
    </div>
@endsection
