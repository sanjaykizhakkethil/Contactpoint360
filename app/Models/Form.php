<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'form_id';

    const CREATED_AT = 'form_created_at';
    const UPDATED_AT = 'form_updated_at';

    protected $fillable = [
        'form_name',
        'form_phone',
        'form_gender',

    ];
}
