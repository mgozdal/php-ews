<?php
/**
 * Definition of the ArrayOfStringsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfStringsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfStringsType {
	/**
	 * String property
	 * 
	 * @var EWSType_string
	 */
	public $String;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'String',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfStringsType