<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_details extends Model
{
    use HasFactory;

    protected $table = 'purchase_details';

    protected $fillable = ['name', 'mmu_id', 'extension_number', 'faculty', 'format', 'campus',
                          'category', 'library', 'title', 'isbn','author', 'publisher', 'subject_code',
                          'quantity', 'total_students','price','remark'];

    public function purchase(){
      return $this->belongsTo(Purchase::class);
    }
}
