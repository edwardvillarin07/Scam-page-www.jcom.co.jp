<?php

if( strpos(strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]),'ja-JP') !== false ){
	
}else{
	header('Location:404.html');
}


?>