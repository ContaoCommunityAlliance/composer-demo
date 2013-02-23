<?php

class DemoLogger extends System
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$this->log(
			'The composer-demo runonce was executed! Don\'t worry, be happy :-)',
			'DemoLogger run()',
			'INFO'
		);
	}
}

$logger = new DemoLogger();
$logger->run();
