<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
    	try{
    		$companies = Company::allCompanies();
    		return view('layouts.company.all_companies')->with(compact('companies'));
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
    }
    
    public function addCompanyPage(){
    	try{
    		$categories = Category::allCategory();
    	  return view('layouts.company.add_company')->with(compact('categories'));
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
		public function saveCompany(Request $request){
    	try{
    		$data = $request->all();
    		$result = Company::addUpdateCompany($data);
    		return $result;
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
  
		public function addKeywordsDesc(Request $request, $company_id){
    	try{
    		$data = $request->all();
    		$result = Company::addKeywordDescription($data, $company_id);
    		return $result;
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
		public function deleteCompany($company_id){
    	try{
        $result = Company::deleteCompany($company_id);
        return $result;
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
}
