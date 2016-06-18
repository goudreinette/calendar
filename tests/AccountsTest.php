<?php
require_once "./source/Accounts.php";
use phpunit\framework\TestCase;

/**
 * AccountsTest
 */
class AccountsTest extends TestCase
{
  public function testExistence()
  {
    $this->assertTrue(class_exists('Accounts'));
  }
}

/**
 * It:
 * exists
 * makes a succesful connection
 * finds documents succesfully
 * inserts succefully
 * etc.
 */
