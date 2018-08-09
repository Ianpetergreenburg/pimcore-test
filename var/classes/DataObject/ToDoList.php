<?php 

/** 
* Generated at: 2018-08-09T21:40:25+02:00
* Inheritance: no
* Variants: no
* Changed by: user (4)
* IP: 216.207.205.130


Fields Summary: 
- Title [input]
- Description [textarea]
- Items [objects]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\ToDoList\Listing getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\ToDoList\Listing getByDescription ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\ToDoList\Listing getByItems ($value, $limit = 0) 
*/

class ToDoList extends Concrete {

public $o_classId = "8";
public $o_className = "ToDoList";
public $Title;
public $Description;
public $Items;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ToDoList
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Title - Title
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("Title"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Title;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set Title - Title
* @param string $Title
* @return \Pimcore\Model\DataObject\ToDoList
*/
public function setTitle ($Title) {
	$this->Title = $Title;
	return $this;
}

/**
* Get Description - Description
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("Description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Description;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set Description - Description
* @param string $Description
* @return \Pimcore\Model\DataObject\ToDoList
*/
public function setDescription ($Description) {
	$this->Description = $Description;
	return $this;
}

/**
* Get Items - Items
* @return \Pimcore\Model\DataObject\ToDoItem[]
*/
public function getItems () {
	$preValue = $this->preGetValue("Items"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("Items")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set Items - Items
* @param \Pimcore\Model\DataObject\ToDoItem[] $Items
* @return \Pimcore\Model\DataObject\ToDoList
*/
public function setItems ($Items) {
	$this->Items = $this->getClass()->getFieldDefinition("Items")->preSetData($this, $Items);
	return $this;
}

protected static $_relationFields = array (
  'Items' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = array (
  0 => 'Items',
);

}

