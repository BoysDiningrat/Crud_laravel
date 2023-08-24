@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Form Edit</h3>
                    <a href="{{route('contoh.index')}}" class="btn btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('contoh.update', $contoh->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$contoh->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="dkr" class="form-control" value="{{$contoh->dkr}}" required>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    