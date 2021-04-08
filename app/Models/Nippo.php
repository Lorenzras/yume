<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nippo extends Model
{
    use HasFactory;    

    public function get_today(){
        $date_today = Carbon::now()->toDateString();
        
        return auth()->user()->nippo
                        ->where('generated_at', '=', $date_today)->first();
    }

        protected $guarded = [''];
}
