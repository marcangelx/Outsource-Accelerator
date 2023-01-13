<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /** 
     * Get /api/user/{id}
     * 
     */
    public function test_get_user_by_id()
    {
        $userId = User::all()->first()->id;
        $this->get('/api/user/' . $userId)
            ->assertStatus(200)
            ->assertJsonStructure(
                [
                "data" => [
                        "id",
                        "attributes" => [
                            "email",
                            "name",
                            "ip_address",
                            "referrer",
                            "user_agent",
                            "path"=>[
                                '*'=> [
                                    "path"
                                
                                ]
                            ]
                        ]
                    ]
                ]
            );
    }

    /**
     *  Post /api/user
     */
    public function test_create_user_email_already_taken()
    {
        $this->post('/api/user', [
            'email' => 'marcangel@gmail.com',
            'name' => 'Marc Angel',
            'ip_address' => '137.147.105.207'
        ])->assertStatus(302);
    }
}
