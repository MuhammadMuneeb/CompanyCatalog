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
    
    
    public static function allRecords(){
    	$all = self::all();
    	return $all;
    }
    
    public static function addCatCompany($data){
    	$cat_com = new self;
    	$i=0;
    	$result = [];
    	foreach($data as $datum){
    		$cat_com->company_id = $datum['company_id'];
    		$cat_com->category_id = $datum['category_id'][$i];
    		$i++;
    		$result[$i] = $cat_com->save();
    		if(!$result[$i]){
    			$result[$i] = 'Not saved Id: '. $datum['category_id'][$i];
		    }
	    }
	    return $result;
    }
    
    public static function companyToCategory(){
      $all_records = self::allRecords();
      foreach($all_records as $record){
      	$record->name = Company::where('id', $record->company_id)->value('name');
      	$record->website = Company::where('id', $record->company_id)->value('website');
      	$record->username = Company::where('id', $record->company_id)->value('username');
      	$record->password = Company::where('id', $record->company_id)->value('password');
      	$record->category = Category::where('id', $record->category_id)->value('category');
      }
      return $all_records;
    }
    
}
