<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nippo extends Model
{
    use HasFactory;    
    //protected $primaryKey = 'generated_at';

    public function get_today(){
        $date_today = Carbon::now()->toDateString();
        
        return auth()->user()->nippo
                        ->where('generated_at', '=', $date_today)->first();
    }

    public function get_day($generated_at){
        $date_today = $generated_at;
        
        return auth()->user()->nippo
                        ->where('generated_at', '=', $date_today)->first();
    }

    public function get_month($month){
        $start = Carbon::parse($month)->todatestring();
        $end = Carbon::parse($month)->endOfMonth()->todatestring();
        
        return auth()->user()->nippo
            ->whereBetween('generated_at',[$start, $end]);
    }
    public function get_rankings_by_month($month){
        return $this->rankings(
                $this->get_all_summed($month)
            );
    }

    public function get_all_rankings_by_month($month, $type){
        $start = Carbon::parse($month)->todatestring();
        $end = Carbon::parse($month)->endOfMonth()->todatestring();

        /* $summed = $this->query()
            ->select('nippos.user_id')
            ->selectRaw('SUM(`'. $type .'`) as totalResult')
            ->whereBetween('generated_at',[$start, $end])
            ->groupBy('user_id')
            ->orderByDesc('totalResult')
            ->get(); */

        $summed = $this->query()
        ->select('nippos.user_id', 'users.name')
        ->join("users", "users.id","=","nippos.user_id")
        ->selectRaw('SUM(`'. $type .'`) as totalResult')
        ->whereBetween('generated_at',[$start, $end])
        ->groupBy('user_id')
        ->orderByDesc('totalResult')
        ->get(); 


        return $summed;

    }

    public function get_all_summed($month) {
        $start = Carbon::parse($month)->todatestring();
        $end = Carbon::parse($month)->endOfMonth()->todatestring();
    
        $summed = $this->query()
            ->select('user_id')
            ->selectRaw('
                        SUM(`interview`) as totalInterview, 
                        SUM(`assistance`) as totalAssistance,
                        SUM(`purchase`) as totalPurchase, 
                        SUM(`contract`) as totalContract, 
                        SUM(`settlement`) as totalSettlement, 
                        SUM(`intermediary`) as totalIntermediary, 
                        SUM(`distribution`) as totalDistribution, 
                        SUM(`roller`) as totalRoller,
                        SUM(`buy`) as totalBuy,
                        SUM(`sell`) as totalSell,
                        SUM(`brokerage`) as totalBrokerage,
                        SUM(`loan`) as totalLoan,
                        SUM(`fine`) as totalFine,
                        SUM(`fire_insurance`) as totalFireInsurance,
                        SUM(`reform`) as totalReform,
                        SUM(`solar_panel`) as totalSolarPanel
                    ')
            ->whereBetween('generated_at',[$start, $end])
            ->groupBy('user_id')
            ->orderByDesc('totalInterview')
            ->get();
        
        return $summed;
    }

    function rankings($dt_sum) {
        $authid = auth()->user()->id;
        //$collection = collect([]);
        $collection = [];
       
       /*  $sum = $dt_sum->where('user_id',$authid)->first()->totalInterview;
        $ranking = ($dt_sum->where('totalInterview', '>', $sum)->count()) + 1;
        $collection['totalInterview'] = $ranking; */
    

        /* $dt_sum = $dt_sum->sortByDesc('totalAssistance');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalAssistance;
        $ranking = ($dt_sum->where('totalAssistance', '>', $sum)->count()) + 1;
        $collection['totalAssistance'] =  $ranking; */

        $dt_sum = $dt_sum->sortByDesc('totalPurchase');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalPurchase;
        $ranking = ($dt_sum->where('totalPurchase', '>', $sum)->count()) + 1;
        //dd($sum);
        $collection['totalPurchase'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalContract');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalContract;
        $ranking = ($dt_sum->where('totalContract', '>', $sum)->count()) + 1;
        $collection['totalContract'] =  $ranking;

        /* $dt_sum = $dt_sum->sortByDesc('totalSettlement');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalAssistance;
        $ranking = ($dt_sum->where('totalSettlement', '>', $sum)->count()) + 1;
        $collection['totalSettlement'] =  $ranking; */

        $dt_sum = $dt_sum->sortByDesc('totalIntermediary');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalIntermediary;
        $ranking = ($dt_sum->where('totalIntermediary', '>', $sum)->count()) + 1;
        $collection['totalIntermediary'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalDistribution');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalDistribution;
        $ranking = ($dt_sum->where('totalDistribution', '>', $sum)->count()) + 1;
        $collection['totalDistribution'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalRoller');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalRoller;
        $ranking = ($dt_sum->where('totalRoller', '>', $sum)->count()) + 1;
        $collection['totalRoller'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalBuy');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalBuy;
        $ranking = ($dt_sum->where('totalBuy', '>', $sum)->count()) + 1;
        $collection['totalBuy'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalSell');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalSell;
        $ranking = ($dt_sum->where('totalSell', '>', $sum)->count()) + 1;
        $collection['totalSell'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalBrokerage');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalBrokerage;
        $ranking = ($dt_sum->where('totalBrokerage', '>', $sum)->count()) + 1;
        $collection['totalBrokerage'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalLoan');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalLoan;
        $ranking = ($dt_sum->where('totalLoan', '>', $sum)->count()) + 1;
        $collection['totalLoan'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalFine');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalFine;
        $ranking = ($dt_sum->where('totalFine', '>', $sum)->count()) + 1;
        $collection['totalFine'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalFireInsurance');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalFireInsurance;
        $ranking = ($dt_sum->where('totalFireInsurance', '>', $sum)->count()) + 1;
        $collection['totalFireInsurance'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalReform');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalReform;
        $ranking = ($dt_sum->where('totalReform', '>', $sum)->count()) + 1;
        $collection['totalReform'] =  $ranking;

        $dt_sum = $dt_sum->sortByDesc('totalSolarPanel');
        $sum = $dt_sum->where('user_id',$authid)->first()->totalSolarPanel;
        $ranking = ($dt_sum->where('totalSolarPanel', '>', $sum)->count()) + 1;
        $collection['totalSolarPanel'] =  $ranking;
        
        //dd($collection);

        return $collection;
    }

    function user() {
        return $this->belongsTo('user', 'id');
    }

    protected $guarded = [''];
}
