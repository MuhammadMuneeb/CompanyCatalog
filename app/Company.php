<?php

namespace App;

use App\CommonUtils\CommonUtils;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
	    'website',
	    'username',
	    'password'
    ];
    
    public static function allCompanies(){
    	$companies = self::all();
    	return $companies;
    }
    
    public static function getCompany($id){
    	$company = self::where('id', $id)->first();
    	return $company;
    }
    
    public static function addUpdateCompany($data, $id=0){
    	if($id){
    		$company = self::getCompany($id);
	    }else{
    		$company = new self;
	    }
	    $company->name = $data['name'];
	    $company->website = $data['website'];
	    $company->username = $data['email'];
	    $company->password = $data['password'];
	    $result = $company->save();
			
	    $answers = Category::addCategory($data['category'], $company->id);
	    return $answers;
	    return CommonUtils::returnString($answers);
    }
    
    public static function deleteCompany($id){
    	$company = self::where('id', $id)->delete();
    	return CommonUtils::returnString($company);
    }
    
}
