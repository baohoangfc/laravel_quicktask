<?php

namespace App\Models;

use App\Http\Requests\FormRequest;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = [
        'name',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
