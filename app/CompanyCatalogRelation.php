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
    
    public static function addCatCompany($data, $company_id){
    	for($i=0;$i<count($data);$i++){
    		self::create([
    			'company_id'=>$company_id,
			    'category_id'=>$data[$i]
		    ]);
	    }
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
