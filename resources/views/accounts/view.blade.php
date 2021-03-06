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
      <td>
      <form method="POST" action="/accounts/{{$account->id}}/edit">
      {{method_field('PATCH')}}
      {{csrf_field() }}
      <div class="input-group">
                <select class="custom-select" id="types_id" name="types_id">
                    <option selected>Choose Account Type</option>
                    <option value="1">Set-up</option>
                    <option value="2">Confirmation</option>
                    <option value="3">Activated</option>
                    <option value="4">Deactivated</option>
                </select>
                </div>
                </td>
                <td>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Account</button>
            </div>
            </form>
            </td>
    </tbody>
</table>
        </div>
    </div>
</div>

@endsection