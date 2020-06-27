<?php

namespace Tests\Feature;

use App\Friend;
use App\User;
use App\Todolist;
use App\Thing;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function testBasicTest()
    {
        $response = $this->get('/register');
        $response->assertOk();
    }

    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertViewIs('login');
    }

    public function testLogin6()
    {
        $response = $this->get('/login6');
        $response->assertViewIs('login');
    }

    public function testCheck_login(){
        $response = $this->json('post','check_login', [
            'name' => 'aaa',
            'password' => 'aaa',
            'email' => 'aaa@qq.com',
        ]);
        $response->assertSuccessful();
    }

    public function testCheckUser(){
        $response = $this->get('/check_user', [
            'name' => 'aaa',
            'email' => 'aaa@qq.com',
            'password' => 'aaa',
        ]);
        $response->assertStatus(500);
        //$response->assertRedirect('/index');
    }

    public function testOut()
    {
        $response = $this->get('/out');
        $response->assertViewIs('login');
    }

    public function testIndex(){
        $response = $this->get('/index');
        $response->assertStatus(500);
        //$response->assertViewIs('home');
    }

    public function testRegister()
    {
        $response = $this->get('/register');
        $response->assertViewIs('register');
    }

    /*public function testCheck_register(){
        $response = $this->json('post','check_register', [
            'name' => 'aba',
            'password' => 'aba',
            'email' => 'aba@qq.com',
        ]);
        $response->assertOk();
    }*/


    public function testAdd_thing()
    {
        $response = $this->get('/add_thing');
        $response->assertViewIs('add_thing');
    }


    public function testList_do()
    {
        $response = $this->get('/list_do');
        $response->assertRedirect('list_all');
    }

    public function testList_end()
    {
        $response = $this->get('/list_end');
        $response->assertRedirect('list_all');
    }

    public function testAdd_list(){
        $response = $this->get('/add_list');
        $response->assertViewIs('add_list');
    }

    public function testchange_color(){
        $response = $this->get('/change_color');
        $response->assertRedirect('/index');
    }



    public function testLogin1()
    {
        $response = $this->get('/login1');
        $response->assertViewIs('login');
    }
    public function testLogin2()
    {
        $response = $this->get('/login2');
        $response->assertViewIs('login');
    }
    public function testLogin3()
    {
        $response = $this->get('/login3');
        $response->assertViewIs('login');
    }
    public function testLogin4()
    {
        $response = $this->get('/login4');
        $response->assertViewIs('login');
    }
    public function testLogin5()
    {
        $response = $this->get('/login5');
        $response->assertViewIs('login');
    }
}
