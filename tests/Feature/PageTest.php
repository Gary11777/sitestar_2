<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('SiteStar');
        $response->assertSee('Web Development Studio');
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('About Us');
    }

    public function test_portfolio_page_returns_successful_response(): void
    {
        $response = $this->get(route('portfolio'));

        $response->assertStatus(200);
        $response->assertSee('dimgent.com');
        $response->assertSee('dimgent.by');
    }

    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('Contact');
    }
}
