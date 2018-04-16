<?php

namespace App\Http\Controllers;

use App\Accounts;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //declaring index function for accountsController
    public function index() 
    {
        //I want to display the account types, so I need to join the types table to my accounts table
        $accounts = Accounts::join('types', 'types.id', '=', 'accounts.account_type_id')->get();

        return view ('accounts.index', compact('accounts'));

    }

    public function create() 
    {
        return view('accounts.create');

    }
    
    public function store()
    {
        //providing server side validation for forms
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'account_type_id' => 'required',
        ]);

        //sending form data to db
        Accounts::create(request(['first_name', 'last_name', 'email', 'account_type_id']));
        
        //redirecting back to db
        return redirect('/accounts/create');
        
    }
    




}
