<?php

namespace Tests\Unit;

use App\Friend;
use App\Http\Controllers\ProjectController;
use App\Thing;
use App\Todolist;
use App\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testFriend()
    {
        $friend = new Friend();
        $this->assertEquals('friend',$friend->table());
    }

    public function testThing()
    {
        $thing = new Thing();
        $this->assertEquals('thing',$thing->table());
    }
    public function testTodolist()
    {
        $friend = new Todolist();
        $this->assertEquals('todolist',$friend->table());
    }
    public function testUser()
    {
        $friend = new User();
        $this->assertEquals('user',$friend->table());
    }



}
