<?php
namespace BambooHR;

class Service {

	protected $strMessage = "";
	
	public function __construct($strMessage = null)
	{
		$this->strMessage = $strMessage;
	}
}