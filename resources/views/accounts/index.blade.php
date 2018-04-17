@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>All Of Your Accounts</h1>
        <table class="table">
<thead>
<th> Account Holder Name </th>
<th> E-mail </th>
<th> Status </th>

</thead>
<tbody>
@foreach($accounts as $account)
      <tr>
      <td>
      <a href="/accounts/{{$account->id}}">
      {{$account->first_name}}  {{$account->last_name}} 
      </a>
      </td>
      <td>
      {{$account->email}}
      </td>
      <td>
      {{$account->account_type}}
      </td>
      
    @endforeach
    </tbody>
</table>
        
            </div>
    </div>
</div>

@endsection