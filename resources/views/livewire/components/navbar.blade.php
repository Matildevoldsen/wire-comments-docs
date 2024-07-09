<!-- resources/views/livewire/navbar.blade.php -->
<nav class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">WireComments</h1>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <a wire:navigate href="/docs" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">Docs</a>
                <a href="https://github.com/Matildevoldsen/wire-comments" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                    Sponsor Me
                </a>
            </div>
        </div>
    </div>
</nav>
