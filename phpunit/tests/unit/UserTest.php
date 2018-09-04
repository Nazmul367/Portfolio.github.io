<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    /**@tests */
    public function testTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Nazmul');

        $this->assertEquals($user->getFirstName(), 'Nazmul');
    }


    /**@tests */
    public function testTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Hasan');

        $this->assertEquals($user->getLastName(), 'Hasan');
    }


    /**@tests */
    public function testFullName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Nazmul');
        $user->setLastName('Hasan');

        $this->assertEquals($user->testFullName(), 'Nazmul Hasan');
    }


    /**@tests */
    public function trimmedFirstAndLastName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Nazmul');
        $user->setLastName('        Hasan');

        $this->assertEquals($user->testFirstName(), 'Nazmul');
        $this->assertEquals($user->testLasttName(), 'Hasan');
    }

    
    /**@tests */
    public function testEmailAddress()
    {
        $user = new \App\Models\User;

        $user->setEmail('nazmul@gmail.com');

        $this->assertEquals($user->getEmail(), 'nazmul@gmail.com');
    }

       /**@tests */
       public function testSearchingResult()
       {
           $user = new \App\Models\User;
   
           $user->setLastName('Hasan');
   
           $this->assertEquals($user->getLastName(), 'Hasan');
       }
}