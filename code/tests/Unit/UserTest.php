<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    /**
     * @dataProvider dataProvider
     *
     * @param[type] $a
     * @param[type] $b
     * @param[type] $result
     * @return void
     */
    public function testAdd($a, $b, $result){
        $this->assertEquals($result,$a + $b);
    }

    public function dataProvider(){
        return [
            [1,2,3],
            [2,5,7],
            [3,5,8]
        ];
    }
}
