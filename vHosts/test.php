<?php

interface nerd{
	public function getVariable();
}

class freak implements nerd
{
	protected $variable;

	/**
	* Fehler fall:
	* public function __construct( &$e){
    *	$this->variable = $e;
    * }
    */

    public function __construct(&$e){
    	$this->variable = $e;
    }

    public function getVariable(){
    	return $this->variable;
    }
}

function getNew()
{
    $a = func_get_args();
    $c = array_shift($a);

    $r = new ReflectionClass($c);
    return $r->newInstanceArgs($a);
}

$e = 'new stdClass()';
$freakClass = getNew('freak', $e);

if($freakClass instanceof nerd){
	var_dump($freakClass);
	var_dump($freakClass->getVariable());

}else{
	print("something wrong \n");
}



	