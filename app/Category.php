<?php

namespace App;

use App\CommonUtils\CommonUtils;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
    	'category'
    ];
    
    public static function allCategory(){
    	$all = self::all();
    	return $all;
    }
    
    public static function getCategory($id){
    	$cat = self::where('id', $id)->first();
    	return $cat;
    }
    
    public static function addCategory($data){
    	$cat = new self;
    	$all_cat = self::allCategory();
    	foreach($all_cat as $cats){
    	  if(strcasecmp($cats->category, $data) == 0){
    	  	return 'Already exists';
	      }
	    }
    	$cat->category = $data;
    	$result = $cat->save();
    	
    	return CommonUtils::returnString($result);
    }
    
    public static function deleteCategory($id){
    	$cat = self::find($id);
    	$result = $cat->delete();
    	return CommonUtils::returnString($result);
    }
    
    
}
