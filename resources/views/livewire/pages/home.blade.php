<div>
    <livewire:components.navbar/>

    <div class="bg-indigo-100 dark:bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="max-w-2xl mx-auto xl:mx-0 xl:col-span-1">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-100">WireComments</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-200">
                        WireComments is a powerful Laravel package that simplifies the process of managing comments in
                        your application. With seamless integration, real-time updates, and easy-to-use components, you
                        can quickly deploy a robust comment system for any model.
                    </p>
                    <div class="mt-8">
                        <a href="https://github.com/Matildevoldsen/wire-comments"
                           class="text-indigo-600 dark:text-indigo-500 dark:hover-text-indigo-400 hover:text-indigo-500 text-base font-medium">
                            View on GitHub
                        </a>
                    </div>
                </div>
                <div class="mt-16 xl:mt-0 xl:col-span-2 space-y-5">
                    <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 rotate-1 mb-10 scale-[102%]">
                        <h3 class="text-lg dark:text-gray-200 leading-6 font-medium text-gray-900">Get Started!</h3>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            {!! $this->highlightCode('composer require matildevoldsen/wire-comments', 'bash') !!}
                        </p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                        <h3 class="text-lg leading-6 dark:text-gray-200 font-medium text-gray-900">Try it out</h3>

                        <div class="mt-5">
                            <!-- Include the WireComments component -->
                            <livewire:comments allow-guests :emojis="['👍', '👎', '❤️', '😂', '😯', '😢', '😡']"
                                               :model="App\Models\DocPage::find(1)"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:components.partials.features/>

    <!-- resources/views/livewire/footer.blade.php -->
    <livewire:components.footer />
</div>
