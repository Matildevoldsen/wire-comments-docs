<?php

namespace App\Livewire\Pages\Docs;

use App\Models\DocPage;
use Illuminate\Mail\Markdown;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class Main extends Component
{

    public function content()
    {
        $markdownContent = DocPage::find(2)->content;

        return app(\Spatie\LaravelMarkdown\MarkdownRenderer::class)
            ->highlightTheme('github-dark')
            ->toHtml($markdownContent);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.docs.main');
    }
}
