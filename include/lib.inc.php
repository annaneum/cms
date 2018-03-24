<?php
function array_delete_row(&$array, $id) {
	unset($array[$id]);
	$array = array_values($array);
}
?>