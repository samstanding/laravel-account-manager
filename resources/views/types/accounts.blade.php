@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
<h1>{{$type->account_type}} </h1>
<ul class="list-group">
@foreach($type->accounts as $account)
<li class="list-group-item">
{{$account->first_name}} {{$account->last_name}}
</li>
@endforeach
</ul>
</div>
</div>
</div>





@endsection