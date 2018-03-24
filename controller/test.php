<?php
class Test extends Controller {
	function __construct() {
		parent::__construct();
	}

	public function index($arg1 = null, $arg2 = null, $arg3 = null) {
		echo "arg1 = " . $arg1;
		echo "\narg2 = " . $arg2;
		echo "\narg3 = " . $arg3;
	}
}

?>