<?php

/**********************************************************************************
* Help Center Live! � http://www.helpcenterlive.com 				  			  *
* by Digital Frontiers, UTO 							  						  *
***********************************************************************************
* Software Version: Help Center Live! v 2.1.7 					  				  *
* Software by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 		      *
* Copyright 2008 by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 	  *
* Support, News, Updates at: http://www.helpcenterlive.com 			  			  *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Digital Frontiers, UTO. 	  *
* 										  										  *
* This program is distributed in the hope that it is and will be useful, but 	  *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE. 						  					  *
* 										  										  *
* See the "license.txt" file for details of the Help Center Live! license. 	 	  *
* The latest version can always be found at http://www.helpcenterlive.com. 	 	  *
***********************************************************************************
* File Comments:																  *
* This class contains functions that contact HCL's servers for info, such as	  *
* latest version info.															  *
**********************************************************************************/

    class MotherShip {

        var $current;

        function check_updates()
        {
            if (function_exists('file_get_contents')) {
                $this->current = @file_get_contents('http://www.helpcenterlive.com/updates/current.php');
                if ($this->current !== $GLOBALS['conf']['version']) {
                    return true;
                } else {
                    return false;
                }
            }
                
        }

    }

?>