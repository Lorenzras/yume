<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nippo extends Model
{
    use HasFactory;

    public function create_today(){
        $date_today = Carbon::now()->toDateString();
        $this->generated_at = $date_today;
        $this->user_id = auth()->user()->id;
        $this->save();
        return $this;
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
