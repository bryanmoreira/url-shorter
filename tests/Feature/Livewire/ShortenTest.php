<?php

use App\Livewire\Shorten;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Shorten::class)
        ->assertStatus(200);
});
