<?php

namespace App\Http\Controllers;

use App\Accounts;

use Illuminate\Http\Request;

class AccountsController extends Controller
{

    public function index() 
    {
        $accounts = Accounts::join('types', 'types.id', '=', 'accounts.account_type_id')->get();

        return view ('accounts.index', compact('accounts'));

    }
    




}
