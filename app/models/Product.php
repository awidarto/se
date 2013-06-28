<?php

class Product extends EloquentMongo {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $collection = 'products';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

}