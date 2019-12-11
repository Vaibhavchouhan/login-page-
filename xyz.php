<?php

       session_start();
	   if(isset($_SESSION['uid'])){
	   echo "welcome ".$_SESSION['uid'];
	   }
	  ?>