<?php
	/**
	 * Created by PhpStorm.
	 * User: MMHaq
	 * Date: 22/01/2020
	 * Time: 10:27 AM
	 */
	
	namespace App\CommonUtils;
	
	
	
	class CommonUtils {
		
		public static function returnString($result){
			if($result){
				return 'True';
			}else{
				return 'False';
			}
		}
		
	}