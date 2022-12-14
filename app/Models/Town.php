<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','schools', 'hospitals', 'colleges','bars','city_id'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
