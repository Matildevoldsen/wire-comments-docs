<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\ShikiPhp\Shiki;

class Home extends Component
{
    public function highlightCode(string $code, string $lang): string
    {
        return Shiki::highlight(
            code: $code,
            language: $lang,
        );
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.home');
    }
}
