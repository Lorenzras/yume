<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nippo extends Model
{
    use HasFactory;

    public function get_thisday(){
        return $this->all();
        //return $this->where('generated_at',Carbon::now()->toDateString())->get();
    }

    public function interview($input){
        $this->interview = $input;
        $this->save();
    }

    public function get_today(){
        $date_today = Carbon::now()->toDateString();

        return auth()->user()->nippo
                        ->where('generated_at', '=', $date_today)->first();
    }
   /*  public function user($date_today)
    {
        return $this->belongsTo(User::class)->where('generated_at','=', $date_today);
    } */

}
