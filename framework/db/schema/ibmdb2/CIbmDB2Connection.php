<?php

/**
 * CIbmDB2Connection class file.
 *
 * @author Edgard L. Messias <edgardmessias@gmail.com>
 * @link   https://github.com/edgardmessias/yiidb2
 */

/**
 * CIbmDB2Connection represents a connection to a IBM DB2 database.
 *
 * @author  Edgard L. Messias <edgardmessias@gmail.com>
 * @package ext.yiidb2
 */
class CIbmDB2Connection extends CDbConnection
{

    protected function initConnection( $pdo )
    {
        parent::initConnection( $pdo );
        $this->setAttribute( PDO::ATTR_CASE, PDO::CASE_LOWER );
        $this->setAttribute( PDO::ATTR_STRINGIFY_FETCHES, true );
    }

    public $driverMap = array(
        'ibm'  => 'CIbmDB2Schema', // IBM DB2 driver
        'odbc' => 'CIbmDB2Schema', // IBM DB2 driver
    );

    public function getPdoType( $type )
    {
        if ( $type == 'NULL' )
        {
            return PDO::PARAM_STR;
        }
        else
        {
            return parent::getPdoType( $type );
        }
    }

    /**
     * @var string Custom PDO wrapper class.
     * @since 1.1.8
     */
    public $pdoClass = 'CIbmDB2PdoAdapter';

}

$dir = dirname( __FILE__ );
$alias = md5( $dir );
Yii::setPathOfAlias( $alias, $dir );
Yii::import( $alias . '.*' );
