<?php
/**
 * !Database Default
 * !Table openOffers
 */
class OpenOffers extends Model {
	/** !Column PrimaryKey, Integer, AutoIncrement */
	public $id;

	/** !Column String */
	public $title;

	/** !Column String */
	public $company;

	/** !Column Integer */
	public $reward;

	/** !Column String */
	public $url;

	/** !Column String */
	public $thumb_url;

	/** !Column Boolean */
	public $isApp;

	/** !Column Boolean */
	public $isSurvey;

	/** !Column Boolean */
	public $isVideo;

}
?>