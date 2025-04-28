<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;

class AccessShortLink extends Component
{
    public function mount(string $token)
    {
        $url = Url::where('short_url', $token)->first();

        return redirect()->to($url->long_url);
    }

    public function render()
    {
        return view('livewire.access-short-link')->layout('components.layouts.blank');
    }
}
