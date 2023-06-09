<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = 'donations';
    protected $fillable = [
        'gcashName', 
        'gcashPhoneNum',
        'donorName'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
