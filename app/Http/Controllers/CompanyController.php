<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
    	try{
    	
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
  
		public function updateCompany(Request $request){
    	try{
    	
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
		public function addCompanyCatPage(){
    	try{
    		return view('layouts.company.select_categories');
	    }catch (\Exception $exception){
    		return $exception->getMessage();
	    }
		}
		
		public function deleteCompany(){
    	try{
    	
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
}
