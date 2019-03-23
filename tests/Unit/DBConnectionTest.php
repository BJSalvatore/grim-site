<?php
namespace App\Http\Middleware;

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
use Closure;
use DB;

class DatabaseConnection extends TestCase
{
  use TestCaseTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function getConnection()
    {
      /**
   * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
   */
  public function getConnection()
  {
    // only instantiate pdo once for test clean-up/fixture load
   static private $pdo = null;

   // only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
   private $conn = null;

   final public function getConnection()
   {
       if ($this->conn === null) {
           if (self::$pdo == null) {
               self::$pdo = new PDO('sqlite::memory:');
           }
           $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
       }

       return $this->conn;
   }

  }

  /**
   * @return PHPUnit_Extensions_Database_DataSet_IDataSet
   */
  public function getDataSet()
  {
      return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
  }


}
