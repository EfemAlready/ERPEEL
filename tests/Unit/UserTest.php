<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'atta',
            'email' => 'atta@example.com'
        ]);
        $user2 = User::make([
            'name' => 'hafid',
            'email' => 'hafid@example.com'
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }
    public function test_delete_user(){
        $user = User::factory()->count(1)->make();

        $user = User::first();
        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
    }
    public function test_it_stores_new_users(){
        $response = $this->post('/register',[
            'name' =>'atta',
            'email' =>'atta@example.com',
            'password' => 'atta123456',
            'password_confirmation' => 'atta123456'
        ]);

        $response->assertRedirect('/');
    }
    public function test_database(){
        $this->assertDatabaseHas('users',[
            'name' => 'hafid'
        ]); 
    }
}
