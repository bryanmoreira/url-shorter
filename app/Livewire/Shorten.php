<?php

namespace App\Livewire;

use App\Models\Url;
use Illuminate\Support\Str;
use Livewire\Component;

class Shorten extends Component
{
    public string $shortUrl = '';
    public string $longUrl = '';

    public function save(): void
    {
        $this->normalizeUrl();

        $this->validate([
            'longUrl' => 'required|url',
        ]);

        $shortId = $this->generateUniqueShortId();

        Url::create([
            'long_url' => $this->longUrl,
            'short_url' => $shortId,
        ]);

        $this->shortUrl = url('/' . $shortId);
    }

    public function render()
    {
        return view('livewire.shorten')->layout('components.layouts.blank');
    }

    public function normalizeUrl(): string
    {
        if (!Str::startsWith($this->longUrl, ['http://', 'https://'])) {
            return $this->longUrl = 'https://' . $this->longUrl;
        }

        return $this->longUrl;
    }

    public function generateUniqueShortId(): string
    {
        do {
            $this->shortId = Str::random(6);
        } while (Url::where('short_url', $this->shortId)->exists());

        return $this->shortId;
    }
}
