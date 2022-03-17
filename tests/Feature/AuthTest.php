<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('has auth page')->get('/login')->assertStatus(200);


test('Auth working fine', function () {
    $user = User::factory()->create();
    post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);
    assertAuthenticated();
});


test('Post login incorrect password', function () {
    post('/login', [
        'email' => "email@gmail.com",
        'password' => '::password::',
    ])->assertSessionHasErrors('email');
});

it('has register page')->get('/register')->assertOk();

it('Post register', function () {
    post('/register', [
        'name' => '::name::',
        'email' => 'email@example.com',
        'password' => '::password::',
        'password_confirmation' => '::password::',
    ]);

    $this->assertDatabaseHas('users', [
        'name' => '::name::',
        'email' => 'email@example.com',
    ]);
});
