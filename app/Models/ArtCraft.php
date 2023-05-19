<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtCraft extends Model
{
    protected $table = 'art_craft';
    protected $primaryKey = 'id';
    protected $fillable = ['full_name', 
                            'last_name',
                            'company_name',
                            'email',
                            'street_address',
                            'street_address_2',
                            'city',
                            'state_province',
                            'postal_code',
                            'country',
                            'accessories',
                            'art',
                            'crochet',
                            'dolls',
                            'description'];
}
