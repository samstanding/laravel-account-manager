@extends ('layouts.app')

@section('content')

<div class="row justify-content-center">
<h1> Create an Account</h1>
</div>
<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/create">
            {{csrf_field() }}
            <div class ="form-group">
                <label for="First Name">First Name: </label>
                <input type="text" class="form-control" id="first_name" name="first_name"  required >
            </div>
            <div class ="form-group">
                <label for="Last Name">Last Name: </label>
                <input type="text" class="form-control" id="last_name" name="last_name" required >
            </div>
            <div class ="form-group">
                <label for="Email">Email: </label>
                <input type="text" class="form-control" id="email" name="email"  required >
            </div>
            <div class="input-group">
                <select class="custom-select" id="account_type_id" name="account_type_id">
                    <option selected>Choose Account Type</option>
                    <option value="1">Set-up</option>
                    <option value="2">Confirmation</option>
                    <option value="3">Activated</option>
                    <option value="4">Deactivated</option>
                </select>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Player</button>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection