<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminders extends Model
{
    use HasFactory;
    
    protected $table = 'reminders';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'delivery_date',
        'comments',
        'responsable_id'
    ];


    public function users(){
    	return $this->hasOne('App\Models\User','id','responsable_id')->select('name','id');
    }
}
