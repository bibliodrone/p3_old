<?php

namespace p3\Http\Controllers;
use Illuminate\Http\Request;
use p3\Http\Controllers\Controller;
use p3;

class p3Controller extends Controller
{
    /**
    * POST loremIpsum form
    */
    public function loremIpsum() {
	/**	
		 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numParas = $_POST["numParas"];   
		}	
			# Input validation; number of paragraphs
		if (empty($_POST["numParas"])) {
			$error = "Valid entries are 0 through 9(lmIp)";
			return;
		}
		else if(ctype_alpha($numParas)) {
			$error = "Please enter a number(lmIp)";
			return;
		}
		else {
			$numParas = $_POST["numParas"];
		}
	}
	*/
		return 'Lorem Ipsum from controller here';
    }	
	public function username()
    {
        return 'Username from controller here';
    }
} # end of class