<?php
class MultipleDependenciesTest extends PHPUnit_Framework_TestCase {
   public function testProducerSecond() {
        $this->assertTrue(false);
        return 'second';
    }
}

?>
