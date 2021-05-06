<?php

namespace App\Http\Controllers\api\v1;

use App\Models\balacetransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class balancetransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_bets = balancetransaction::all();
        return view('balace_transaction/view',compact('all_bets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('balace_transaction/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\balacetransaction  $balacetransaction
     * @return \Illuminate\Http\Response
     */
    public function show(balacetransaction $balacetransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\balacetransaction  $balacetransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(balacetransaction $balacetransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\balacetransaction  $balacetransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, balacetransaction $balacetransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\balacetransaction  $balacetransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(balacetransaction $balacetransaction)
    {
        //
    }
}
