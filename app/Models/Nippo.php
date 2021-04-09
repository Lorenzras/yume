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
        $end = Carbon::parse($month)->endOfMonth();
        
        return auth()->user()->nippo
            ->whereBetween('generated_at',[$start, $end]);
    }

    function user() {
        return $this->belongsTo('user', 'id');
    }

    protected $guarded = [''];
}
