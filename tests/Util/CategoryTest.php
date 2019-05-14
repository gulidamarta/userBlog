<?php
declare(strict_types=1);
namespace App\Tests\Util;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase{
    protected $category;
    protected function setUp()
    {
        $this->category = new Category();
    }

    /**
     * @dataProvider providerName
     * @param $name
     */
    public function testUserName($name){
        $this->category->setName($name);
        $this->assertEquals($name, $this->category->getName());
    }

    public function providerName(){
        return array(
            array('HEALTHY EATING'),
            array('DIET'),
            array('SPORT')
        );
    }

    protected function tearDown()
    {
        $this->category = NULL;
    }
}