@extends('layouts.konten')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Variabel</h1>
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
            <a href="/tambahvariabel" class="btn btn-success">Tambah Data +</a>
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
                        <th scope="col">Nama Variabel</th>
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
                            <td>{{ $row->namavariabel }}</td>
                            <td>
                                <a href="/editvariabel/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                <a href="/deletevariabel/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <a href="{{ route('variabel.create', 1) }}" class="btn btn-success">Tambah Data</a> --}}
        </div>
    </div>
@endsection