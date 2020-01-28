<?php

namespace App\Http\Controllers;

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
    	  return view('layouts.company.add_company');
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
		public function addCompany(Request $request){
    	try{
    	
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
		
		public function deleteCompany(){
    	try{
    	
	    }catch(\Exception $exception){
    		return $exception->getMessage().' '.$exception->getLine();
	    }
		}
		
}
