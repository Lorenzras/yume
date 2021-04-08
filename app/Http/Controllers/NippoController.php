<?php

namespace App\Http\Controllers;

use App\Models\Nippo;
use Illuminate\Http\Request;

class NippoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('nippo.index');
    }

    public function ranking()
    {
        //
        return view('nippo.ranking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nippo = new Nippo;
        $nippo = $nippo->get_today();
        

        if($nippo == null){
            return view('nippo.main', compact('nippo')); 
        }else{
            return redirect()->route('nippo.edit', $nippo);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->updateOrCreate($request);
        return redirect()->back()->with('success!','Message');
        
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nippo  $nippo
     * @return \Illuminate\Http\Response
     */
    public function show(Nippo $nippo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nippo  $nippo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nippo $nippo)
    {   
        
        return view('nippo.main', compact('nippo'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nippo  $nippo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nippo $nippo)
    {
        
        /* $nippo->interview = $request->interview;
        $nippo->assistance = $request->assistance;
        $nippo->purchase = $request->purchase;
        $nippo->contract = $request->contract;
        $nippo->settlement = $request->settlement;
        $nippo->intermediary = $request->intermediary;
        $nippo->distribution = $request->distribution;
        $nippo->roller = $request->roller;
        $nippo->buy = $request->buy;
        $nippo->sell = $request->sell;
        $nippo->brokerage = $request->brokerage;
        $nippo->loan = $request->loan;
        $nippo->fine = $request->fine;
        $nippo->fire_insurance = $request->fire_insurance;
        $nippo->reform = $request->reform;
        $nippo->solar_panel = $request->solar_panel;
        $nippo->achievements = $request->achievements;
        $nippo->failures = $request->failures;
        $nippo->learnings = $request->learnings; */

        $this->updateOrCreate($request);
        return redirect()->back()->with('success!','Message');
    }

    private function updateOrCreate(Request $request){

     
        $nippo = Nippo::updateOrCreate(
            ['generated_at' =>  request('generated_at'), 'user_id' => auth()->user()->id],
            [
                'generated_at' =>  request('generated_at'),
                'user_id' => auth()->user()->id,
                'interview' =>  request('interview'),
                'assistance' =>  request('assistance'),
                'purchase' =>  request('purchase'),
                'contract' =>  request('contract'),
                'settlement' =>  request('settlement'),
                'intermediary' =>  request('intermediary'),
                'distribution' =>  request('distribution'),
                'roller' =>  request('roller'),
                'buy' =>  request('buy'),
                'sell' =>  request('sell'),
                'brokerage' =>  request('brokerage'),
                'loan' =>  request('loan'),
                'fine' =>  request('fine'),
                'reform' =>  request('reform'),
                'solar_panel' =>  request('solar_panel'),
                'achievements' =>  request('achievements'),
                'failures' =>  request('failures'),
                'learnings' =>  request('learnings')
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nippo  $nippo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nippo $nippo)
    {
        //
    }
}
