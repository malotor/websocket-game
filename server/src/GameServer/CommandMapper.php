<?php

namespace GameServer;

class CommandMapper {

	private $commandMap;

	public function __construct() {

		$this->commandMap = array (
			'say' 		=> 'GameServer\SayCommand',
			'move' 		=> 'GameServer\MoveCommand'
		);

	}

	public function getMap() {
		return $this->commandMap;
	}
}