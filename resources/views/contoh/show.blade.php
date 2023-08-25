@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="grup">
                        <h4>{{$contoh->nama}}</h4>
                        <h4>{{$contoh->dkr}}</h4>
                    </div>
                    <div class="group">
                        <a href="{{route('contoh.edit', $contoh->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('contoh.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection