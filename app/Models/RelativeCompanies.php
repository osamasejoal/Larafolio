<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelativeCompanies extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_link',
        'company_logo',
    ];
}
