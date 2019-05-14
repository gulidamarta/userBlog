<?php
declare(strict_types=1);
namespace App\Tests\Util;

use Doctrine\Common\Version;
use PHPUnit\Framework\TestCase;

class VersionTest extends TestCase
{
    public function testVersion(){
        $version = new Version();
        $result = $version::compare('2.10.0');
        $this->assertEquals(0, $result);
    }
}