<?php

namespace Tests\Unit;

use Tests\TestCase;

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


    public function test_store_new_user()
    {
        $response = $this->post('/api/register', [
            'first_name' => 'John Raven',
            'last_name' => 'Glomar',
            'email' => '4jrglomar016@gmail.com',
            'password' => 'User01',
            'password_confirmation' => 'User01'
        ]);

        $response->assertStatus(201);

        $response2 = $this->post('/api/register', [
            'first_name' => 'John Raven',
            'last_name' => 'Glomar',
            'email' => '4jrglomar016@gmail.com',
            'password' => 'User01',
            'password_confirmation' => 'User01'
        ]);

        $response2->assertStatus(302);
    }
}
