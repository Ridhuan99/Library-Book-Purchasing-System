<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    public $fillable = ['user_id'];


    public function purchase_details(){
      return $this->hasOne(Purchase_details::class);
    }

    public function inquiry(){
      return $this->hasMany(Inquiry::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
