<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * 
     * @return void
     */
    // --dont-report-useless-tests
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertDontSeeIn('p', 'Silahkan Login Terlebih Dahulu')
                    ->assertDontSeeIn('p', 'LOGIN')
                    ->visit('/home')
                    ->visit('/stocks')
                    ->visit('/stocks/1/edit')
                    ->visit('/stocks/2/edit')
                    ->visit('/stocks/3/edit')
                    ->visit('/orders/create')
                    ->visit('/pangkalan')
                    ->visit('/orders')                       
                    ;
                    
                    
        });
    }
}
