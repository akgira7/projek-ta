@extends('layouts.konten')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Variabell</h1>
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
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertvariabel" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Variabel</label>
                            <input type="text" name="namavariabel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contoh Pilihan Menu</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Menu Pilihannya</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ route('variabel.create', 1) }}" class="btn btn-success">Tambah Data</a> --}}
</div>
</div>
@endsection