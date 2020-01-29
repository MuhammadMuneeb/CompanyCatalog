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
    
    public static function addCategory($data, $company_id){
    	$all = self::allCategory();
    	$id = [];
    	$result= 0;
    	for($i=0;$i<count($data);$i++){
	    	$tag_count = $all->where('category', $data[$i])->count();
	    	if($tag_count == 0){
	    		$result = self::create(['category'=>$data[$i]]);
	    		$id[] = $result->id;
		    }else{
	    		$id[] = self::getCategoryID($data[$i]);
		    }
	    }
	    
	    CompanyCatalogRelation::addCatCompany($id, $company_id);
	    
	    return $id;
    }
    
    public static function getCategoryID($data){
      $id = self::where('category', $data)->value('id');
      return $id;
    }
    
    public static function deleteCategory($id){
    	$cat = self::find($id);
    	$result = $cat->delete();
    	return CommonUtils::returnString($result);
    }
    
    
}
