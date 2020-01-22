<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCatalogRelation extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
    	'company_id',
	    'category_id'
    ];
    
}
