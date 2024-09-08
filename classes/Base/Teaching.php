<?php

/**
 * Autogenerated base class for the Teaching model.
 * 
 * Don't change this file, since it can be overwritten.
 * Instead, change the Teaching.php file.
 *
 * @module Teaching
 */
/**
 * Base class for the Teaching model
 * @class Base_Teaching
 */
abstract class Base_Teaching
{
	/**
	 * The list of model classes
	 * @property $table_classnames
	 * @type array
	 */
	static $table_classnames = array (
);

	/**
     * This method calls Db.connect() using information stored in the configuration.
     * If this has already been called, then the same db object is returned.
	 * @method db
	 * @return {Db_Interface} The database object
	 */
	static function db()
	{
		return Db::connect('Teaching');
	}

	/**
	 * The connection name for the class
	 * @method connectionName
	 * @return {string} The name of the connection
	 */
	static function connectionName()
	{
		return 'Teaching';
	}
};