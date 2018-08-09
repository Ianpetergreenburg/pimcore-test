<?php 

/** 
* Generated at: 2018-08-09T21:30:54+02:00
* Inheritance: no
* Variants: no
* IP: 216.207.205.130


Fields Summary: 
*/ 

namespace Pimcore\Model\DataObject;



/**
*/

class ToDoItem extends Concrete {

public $o_classId = "9";
public $o_className = "ToDoItem";


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ToDoItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

