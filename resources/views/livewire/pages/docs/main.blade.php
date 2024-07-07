<div>
    <!-- resources/views/livewire/docs-navbar.blade.php -->
    <nav class="bg-neutral-800 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <h1 class="text-2xl font-bold text-white">WireComments Docs</h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/docs"
                       class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Docs</a>
                    <a href="https://github.com/Matildevoldsen/wire-comments"
                       class="bg-white hover:bg-gray-100 text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                        Sponsor
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto flex">
            <livewire:components.sidebar />
            <div class="flex-1 py-8 px-6 prose prose-lg max-w-7xl">
                {!! $this->content() !!}
            </div>
        </div>
    </div>
</div>
