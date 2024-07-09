<div>
    <!-- resources/views/livewire/docs-navbar.blade.php -->
    <nav class="bg-neutral-800 dark:bg-gray-900 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <h1 class="text-2xl font-bold text-white">Wire Comments Docs</h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a wire:navigate href="/" class="text-white hover:text-gray-300 dark:hover:text-gray-400 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="https://github.com/Matildevoldsen/wire-comments"
                       class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-indigo-600 dark:text-indigo-400 px-3 py-2 rounded-md text-sm font-medium">
                        Sponsor
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row">
            <livewire:components.sidebar />
            <div class="flex-1 py-8 px-6 prose prose-lg max-w-7xl dark:text-gray-100">
                {!! $this->content() !!}
            </div>
        </div>
    </div>
    <livewire:components.footer />
</div>
