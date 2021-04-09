<?php

namespace App\Http\Controllers;

use App\Models\Nippo;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        
       
    }

    

    

    public function ranking()
    {
    

        return view('nippo.ranking',compact('nippo'));
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
            //dd($nippo->generated_at);
            return redirect()->route('nippo.edit', $nippo->generated_at);
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
    public function edit($generated_at)
    {   
        $nippo = new Nippo;
        $nippo = $nippo->get_day($generated_at);
        if($nippo == null){
            return view('nippo.main', compact('generated_at'));
        }else{
            return view('nippo.main', compact('nippo', 'generated_at'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nippo  $nippo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $generated_at)
    {
        
        $this->updateOrCreate($request);
        return redirect()->route('nippo.edit', $generated_at);
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
