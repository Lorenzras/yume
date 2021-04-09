<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nippo;
use Carbon\Carbon;

class NippoReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function weekends($month){
        $month_days = Carbon::parse($month)->daysInMonth;
        $month_now = Carbon::now()->month;
        $month_first_day = Carbon::parse($month)->firstOfMonth();
        $month_last_day = Carbon::parse($month)->endOfMonth();
        $collection = collect([]);
        
        do {
            $weekend = $month_first_day->endOfWeek(Carbon::SATURDAY);
            error_log("Weekend is".$weekend);
            if($month_now == $weekend->month){
                $collection[] =  $weekend->todatestring();
            }else{
                $collection[] = $month_last_day->todatestring();
            }
            $month_first_day = $weekend->add(1, 'day');
            //error_log($month_now."==".$weekend->month);
        } while ($month_now == $weekend->month);
        
        return $collection;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($month)
    {
        //
        $nippo = new Nippo;
        $nippo = $nippo->get_month($month);


        $weeks = $this->weekends(Carbon::now()->todatestring());
        $month = Carbon::now()->format('Y-m');
        
        return view('nippo.report', compact('nippo','weeks','month'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
