<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_basic_routes(): void
    {
        $response = $this->get('/');

        $response->assertViewIs('welcome');
    }


    public function test_contact_route_exists() : void {
         $r = $this ->get('/contact');

         //$r->assertStatus(200);
         $r->assertOk();
    }

    public function test_contact_route_not_found() : void {
         $r = $this ->get('/contac');

         //$r->assertStatus(404);
         $r->assertNotFound();
    }
    function test_udvozles_lathato_a_nev() : void {
        $r = $this->get('/udvozles');

        $r->assertSee('Máté');
    }

    function test_felhasznaloi_adat_lathato_e() : void {
        $r = $this->get('/felhasznaloiadat?vezetekn=Sinkó&keresztn=Máté');

        $r->assertSee('Sinkó','Máté');

    }
}
