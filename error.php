<?php

class cache {

	function __construct () {
		$this->error = [];
		$this->log = [];
	}

	function error ($error) {
		$this->error[] = $error;
	}

	function log ($log) {
		$this->log[] = $log;
	}

	function errors () {
		return $this->error;
	}

	function logs () {
		return $this->log;
	}

}

$error = new cache();

?>