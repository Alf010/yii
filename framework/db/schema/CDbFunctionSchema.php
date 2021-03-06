<?php
/**
 * CDbFunctionSchema class file.
 *
 * @author Lee Hicks <leehicks@dreamfactory.com>
 * @link http://www.dreamfactory.com/
 * @copyright Copyright &copy; 2008-2014 DreamFactory Software LLC
 * @license http://www.dreamfactory.com/license/
 */

/**
 * CDbFunctionSchema is the base class for representing the metadata of a database table.
 *
 * It may be extended by different DBMS driver to provide DBMS-specific table metadata.
 *
 * CDbFunctionSchema provides the following information about a table:
 * <ul>
 * <li>{@link name}</li>
 * <li>{@link rawName}</li>
 * </ul>
 *
 *
 * @author Lee Hicks <leehicks@dreamfactory.com>
 * @package system.db.schema
 * @since 1.0
 */
class CDbFunctionSchema extends CComponent
{
	/**
	 * @var string name of this function.
	 */
	public $name;
	/**
	 * @var string raw name of this function. This is the quoted version of function name with optional schema name. It can be directly used in SQLs.
	 */
	public $rawName;
}
