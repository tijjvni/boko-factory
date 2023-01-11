<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use App\Models\User;

use Illuminate\Foundation\Testing\WithFaker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, WithFaker;


    public function authenticate()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();
        
        return $user;        
    }
}
