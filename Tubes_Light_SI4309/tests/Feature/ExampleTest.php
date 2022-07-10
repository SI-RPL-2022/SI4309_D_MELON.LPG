<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * 
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertDontSeeIn('p', 'LOGIN')
                    ->type('phone','1202194226')
                    ->type('password','satria')
                    ->press('Login')
            //         ->assertDontSeeIn('p', 'LOGIN')
                
                    // ->visit('/home')
                    ;
                    
                    
        });
    }
}
