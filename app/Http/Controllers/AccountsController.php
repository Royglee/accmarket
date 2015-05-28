<?php namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Http\Request;


class AccountsController extends Controller {
    function __construct()
    {
        $this->middleware('auth',['only' => 'create']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Account $accounts
     * @return Response
     * @internal param Account $var
     * @internal param Account $accounts
     */
	public function index(Account $accounts)
	{
        $accounts= $accounts->with('User')->get();
        return view('accounts.index', compact('accounts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('accounts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource.
     *
     * @param Account $account
     * @return Response
     * @internal param $id
     * @internal param $account
     * @internal param int $id
     */
	public function show(Account $account)
	{
        return view('accounts.show', compact('account'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
