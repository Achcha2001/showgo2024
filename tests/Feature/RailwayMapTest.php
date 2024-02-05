<?php
// tests/Feature/RailwayMapTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RailwayMapTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_railway_map_page()
    {
        $response = $this->get(route('/show'));

        $response->assertStatus(200);
        $response->assertSee('You are witnessing the Sri Lankan Railway Map');
        $response->assertSee('Main Route: Green Line');
        $response->assertSee('Coastal Route: Blue Line');
        $response->assertSee('Jaffna Route: Brown Line');
        $response->assertSee('Batticaloa Route: Orange Line');
        $response->assertSee('Map container');
        $response->assertSee('Embedded Google Maps iframe');
        $response->assertSee('<iframe');

        
    }
}
