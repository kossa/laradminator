<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\actingAs;

uses(RefreshDatabase::class);

test('Admin can access to dashboard page', function () {
    $user = User::factory()->create(['role' => 10]);
    actingAs($user);

    $this->get(ADMIN . '/')->assertOk();
});

test('Guest cannot access to dashboard page', function () {
    $this->get(ADMIN . '/')->assertRedirect('/login');
});

test('Non admin cannot access to dashboard page', function () {
    $user = User::factory()->create();
    actingAs($user);

    $this->get(ADMIN . '/')->assertNotFound();
});
