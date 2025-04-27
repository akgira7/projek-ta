@extends('layouts.konten')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Data Alternatif</h1>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
        </div> --}}
        <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>

<div class="container">
    <a href="/tambahalternatif" class="btn btn-success">Tambah Data +</a>
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Alternatif</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->namaalternatif }}</td>
                    <td>
                        <a href="/editalternatif/{{ $row->id }}" class="btn btn-warning">Edit</a>
                        <a href="/deletealternatif/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <a href="{{ route('alternatif', 1) }}" class="btn btn-success">Tambah Data</a> --}}
</div>
</div>
@endsection