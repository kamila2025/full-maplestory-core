<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:user', function () {
    $name = Laravel\Prompts\text(label: 'User Name', required: true);

    $email = Laravel\Prompts\text(label: 'Email address', required: true);

    $password = Illuminate\Support\Facades\Hash::make(Laravel\Prompts\password(label: 'Password', required: true));

    $user = App\Models\User::create(['name' => $name, 'email' => $email, 'password' => $password]);

    $user->markEmailAsVerified();

    $this->components->info('Success! ' . ($user->getAttribute('email') ?? $user->getAttribute('username') ?? 'You') . " may now log in with the password you provided.");
});
