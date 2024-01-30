<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'legal_structure', // Normally this would be foreign key to different table holding all options
        'street_name',
        'house_number',
        'postcode',
        'iban',
        'email_of_client',
        'email_of_financial_correspondence'
    ];
}
