<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    // If you want to specify the table name, use the $table property (Laravel assumes 'customers' by default)
    protected $table = 'customers';

    // The attributes that are mass assignable (you can fill these attributes via mass assignment)
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
