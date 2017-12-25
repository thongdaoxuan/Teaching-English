<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public static function validateExtImage($str){
		$str=strtolower($str);
 		switch ($str){
			case "png": return true;
			case "jpg": return true;
			case "jpeg": return true;
			case "tiff": return true;
			case "bmp": return true;
			case "gif": return true;
			default : return false;
		}
		return false;
	}
	public static function validateExtAudio($str){
		$str=strtolower($str);
 		switch ($str){
			case "mp3": return true;
			case "wav": return true;
			default : return false;
		}
		return false;
	}
}
