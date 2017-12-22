<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street', 'postcode', 'city', 'country', 'organisation_id',
    ];

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public static function countries()
    {
         return $countries = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"].'/../resources/json/countries.json'), true);
    }

}