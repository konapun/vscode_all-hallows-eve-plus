<?php
namespace Ns;

use Some\Package as Example;

/*
 * Block comment
 */
abstract class Test {
  
  const TEST = 'test';

  abstract protected function abstractFn();

  protected function testFn($var) {
    throw new Exception("Exception");
  }
 
  /*
   * Break a source string into tokens defined by the concrete lexer's `tokens`
   * method
   */
  final function doThing($var) {
    if (file_exists($var)) {
      return $this->testFn(file_get_contents($source), $var);
    }
  }
}
?>