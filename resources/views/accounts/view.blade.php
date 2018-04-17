@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1> {{$account->first_name}}  {{$account->last_name}}'s' Account</h1>
        <table class="table">
<thead>
<th> Account Holder Name </th>
<th> E-mail </th>
<th> Status </th>
</thead>
<tbody>
      <tr>
      <td>
      {{$account->first_name}}  {{$account->last_name}} 
      </td>
      <td>
      {{$account->email}}
      </td>
      <td>
      {{$account->account_type}}
      </td>
    </tbody>
</table>
        </div>
    </div>
</div>

@endsection