@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Account Types</h1>
        <ul class="list-group"> 
        @foreach ($types as $type)
        <li><a href="/types/{{$type->id}}">{{$type->account_type}}</a></li>
        @endforeach
        </ul>

        </div>
        </div>
        </div>

@endsection