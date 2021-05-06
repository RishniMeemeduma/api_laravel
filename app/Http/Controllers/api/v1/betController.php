<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\bet;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\Response;
use Session;
use App\Models\player;


class betController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $all_bets = bet::all();
        return view('bet/bet',compact('all_bets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('bet/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
       $custom_message = [
            'distinct' => 'Duplicate selection found',
            'unknown' => 'Unknown error',
            'stake_amount.min' => 'Minimum stake amount is :min ',
            'stake_amount.max' => 'Maximum stake amount is :max',
            'selections.min' => 'Minimum number of selections is :min selection',
            'selections.max' => 'Maximum number of selections is :max_selections',
            'max_win_amount.max' => 'Maximum win amount is :max_win_amount',
            'odds.max' => 'Maximum odds are :max odds',
            'odds.min' => 'Minimum odds are :min odds'
        ];
//        $validator = Validator::make($request->all(), [
//                    'stake_amount' => 'min:0.3|max:10000|numeric',
//                        ], $custom_message);
        request()->validate([
            'structure' => 'array',
                    'stake_amount' => 'min:0.3|max:10000|numeric',
                    'selections' => 'min:1|max:20',
                    'selections.*.id' => 'distinct',
                    'max_win_amount' => 'max:20000|numeric',
                    'odds' => 'max:10000|min:1|numeric',
            
        ],$custom_message);
//        $response = array();
//        if ($validator->fails()) {
//            return redirect()->route('');
//        }else{
        if(!player::find($request->player_id)){
            bet::create(['stake_amount'=>$request->stake_amount]);
            player::create(['id'=>$request->id,'name'=>$request->name]);
            Session::flash('success','created');
            return redirect()->route('betController.index');
        }else{
            $error = 'already exsists player id';
            Session::flash('error',$error);
             return redirect()->route('betController.index');
        }
           
//        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {

        $custom_message = [
            'distinct' => 'Duplicate selection found',
            'unknown' => 'Unknown error',
            'stake_amount.min' => 'Minimum stake amount is :min ',
            'stake_amount.max' => 'Maximum stake amount is :max',
            'selections.min' => 'Minimum number of selections is :min selection',
            'selections.max' => 'Maximum number of selections is :max_selections',
            'max_win_amount.max' => 'Maximum win amount is :max_win_amount',
            'odds.max' => 'Maximum odds are :max odds',
            'odds.min' => 'Minimum odds are :min odds',
        ];
        $validator = Validator::make($request->all(), [
                    'structure' => 'array',
                    'stake_amount' => 'min:0.3|max:10000|numeric',
                    'selections' => 'min:1|max:20',
                    'selections.*.id' => 'distinct',
                    'max_win_amount' => 'max:20000|numeric',
                    'odds' => 'max:10000|min:1|numeric',
                        ], $custom_message);
        
        $response = array();
        if ($validator->fails()) {
            $response['data']['errors']['validations'] = $validator->messages();
            return response()->json($response);
        }
//        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function edit(bet $bet) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bet $bet) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function destroy(bet $bet) {
        //
    }

}
