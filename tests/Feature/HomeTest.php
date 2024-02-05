<?php
// tests/Feature/HomeTest.php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function it_displays_home_page()
    {
        
        $response = $this->get('/');

        $response->assertStatus(200); 

       
        $response->assertSee('Seat Reservation'); 
        $response->assertSee('Buy E-Tickets'); 
        $response->assertSee('Lost Items'); 
        $response->assertSee('Found Items'); 
    }

    
}
