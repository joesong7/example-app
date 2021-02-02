<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'counties_id'];
    
    public function trail()
    {
        return $this->hasOne('App\Models\trail');
    }
    public function countie()
    {
        return $this->belongsTo('App\Models\countie');
    }
}
