<?php
declare(strict_types=1);
namespace App\Tests\Util;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    protected $user;
    protected function setUp(){
        $this->user = new User();
    }

    /**
     * @dataProvider providerUserName
     * @param $username
     */
    public function testUserName($username){
        $this->user->setUsername($username);
        $this->assertEquals($username, $this->user->getUsername());
    }

    public function providerUserName(){
        return array(
          array('marta'),
          array('anton'),
          array('katya')
        );
    }

    /**
     * @dataProvider providerEmail
     * @param $email
     */
    public function testEmail($email){
        $this->user->setEmail($email);
        $this->assertEquals($email, $this->user->getEmail());
    }

    public function providerEmail(){
        return array(
          array('marta@gmail.com'),
          array('anton@gmail.com'),
          array('katya@gmail.com')
        );
    }

    /**
     * @dataProvider providerPassword
     * @param $password
     */
    public function testPassword($password){
        $this->user->setPassword($password);
        $this->assertEquals($password, $this->user->getPassword());
    }

    public function providerPassword(){
        return array(
          array('12345abcd'),
          array('password123'),
          array('strong_password908')
        );
    }

    protected function tearDown()
    {
        $this->user = NULL;
    }
}