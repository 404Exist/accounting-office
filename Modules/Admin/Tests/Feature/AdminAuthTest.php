<?php

namespace Modules\Admin\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Admin\Entities\Admin;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    protected Admin $admin;

    public function setUp(): void
    {
        parent::setUp();
        $this->admin = Admin::create(["email" => "admin@admin.admin", "password" => "password"]);
    }

    public function test_a_guest_should_be_able_to_see_the_login_page()
    {
        $response = $this->get(route('admin.login'));

        $response->assertStatus(200);
    }

    public function test_a_guest_should_be_able_to_login_with_valid_credentials()
    {
        $response = $this->post(route('admin.login'), [
            'email' => $this->admin->email,
            'password' => 'password',
        ]);

        $response->assertStatus(302);

        $this->assertAuthenticatedAs($this->admin);
    }

    public function test_a_guest_cannot_login_with_invalid_credentials()
    {
        $response = $this->post(route('admin.login'), [
            'email' => $this->admin->email,
            'password' => 'password',
        ]);

        $response->assertStatus(302);

        $this->assertAuthenticatedAs($this->admin);
    }
}
