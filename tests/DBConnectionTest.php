<?php
namespace Tests;

use PHPUnit\Framework\DBConnectionTest;
use PHPUnit\DbUnit\TestCaseTrait;
use Illuminate\Foundation\Testing\DBConnectionTest as BaseTestCase;

class DatabaseConnection extends BaseTestCase
{

    use TestCaseTrait;

    // only instantiate pdo once for test clean-up/fixture load
   static private $pdo = null;

   // only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
   private $conn = null;

  final public function getConnection()
   {
     if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }

       return $this->conn;
   }

  /**
   * @return PHPUnit_Extensions_Database_DataSet_IDataSet
   */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    }


}
?>
