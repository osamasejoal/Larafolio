<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelativeCompanies extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'company_name',
        'company_link',
        'company_logo',
    ];
}
