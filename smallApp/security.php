<?php 
	function escape($string){
        $string = stripslashes($string);
        $string = strip_tags($string);
        $vstringar = htmlentities($string);
        return $string;
    }
	
	


?>