<?php
/**
 * !Database Default
 * !Table user_tries
 */
class UserTries extends Model {
	/** !Column PrimaryKey, Integer, AutoIncrement */
	public $id;

	/** !Column Integer */
	public $userid;

	/** !Column Integer */
	public $timestamp;

	/** !Column Integer */
	public $tries;

}
?>