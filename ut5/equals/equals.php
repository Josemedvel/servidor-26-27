<?php
declare(strict_types=1);
final class Integer{
	public int $value = 0;
	public function __construct(int $value){
		$this->value = $value;
	}
	public function equals(Integer $other){
		return $this->value === $other->value;
	}
}

use PHPUnit\Framework\TestCase;
final class TestInteger extends TestCase{
    public function testEquals(){
        $int_1 = new Integer(3);
        $int_2 = new Integer(5);
        $this->assertNotSame($int_1, $int_2);
    }
}

