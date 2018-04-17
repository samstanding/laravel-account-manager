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
        $accounts = Accounts::join('types', 'types.id', '=', 'accounts.types_id')->get();

        return view ('accounts.index', compact('accounts'));

    }

    public function create() 
    {
        //routes to the new account form
        return view('accounts.create');
    }
    
    public function store()
    {
        //providing server side validation for forms
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'types_id' => 'required',
        ]);

        //sending form data to db
        Accounts::create(request(['first_name', 'last_name', 'email', 'types_id']));
        
        //redirecting back to db
        return redirect('/accounts/create');
        
    }
    
    public function view($_id)
     {
        //joins the account types to the accoun
        $account = Accounts::join('types', 'types.id', '=', 'accounts.types_id')->find($_id);
        //directs to the view file to display
        return view('accounts.view', compact('account'));
     }

  public function update(Request $request, Account $account) 
  {
    
    $account->update($request->all());
    
    return view ('accounts.index');

  }

}
