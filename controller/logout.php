<?php
	//remove all sesion variables
	session_unset();
	//destroy the session
	session_destroy();
	header('Refresh: 0; URL = /~tdiw-h1/brands/view');
 ?>
