<?php
/**
 * !Database Default
 * !Table users
 */
class Users extends Model {
	/** !Column PrimaryKey, Integer, AutoIncrement */
	public $id;

	/** !Column String */
	public $username;

	/** !Column String */
	public $password;

	/** !Column String */
	public $first_name;

	/** !Column String */
	public $last_name;

	/** !Column String */
	public $date_created;
	
	/** !Column Integer */
	public $blocked;

}
?>