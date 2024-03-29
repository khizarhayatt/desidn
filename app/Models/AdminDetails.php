<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetails extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function user()
    {
        return $this->morphOne(User::class, 'detailable');
    }
}
