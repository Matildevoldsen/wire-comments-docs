<div>
    <livewire:components.navbar/>

    <div class="bg-gradient-to-tr to-indigo-100 from-gray-100 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="max-w-2xl mx-auto xl:mx-0 xl:col-span-1">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">WireComments</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        WireComments is a powerful Laravel package that simplifies the process of managing comments in
                        your application. With seamless integration, real-time updates, and easy-to-use components, you
                        can quickly deploy a robust comment system for any model.
                    </p>
                    <div class="mt-8">
                        <a href="https://github.com/Matildevoldsen/wire-comments"
                           class="text-indigo-600 hover:text-indigo-500 text-base font-medium">
                            View on GitHub
                        </a>
                    </div>
                </div>
                <div class="mt-16 xl:mt-0 xl:col-span-2 space-y-5">
                    <div class="bg-white shadow sm:rounded-lg p-6 rotate-1 mb-10 scale-[102%]">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Get Started!</h3>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            {!! $this->highlightCode('composer require matildevoldsen/wire-comments', 'bash') !!}
                        </p>
                    </div>
                    <div class="bg-white shadow sm:rounded-lg p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Try it out</h3>

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
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-xl font-semibold">About WireComments</h3>
                    <p class="mt-4 text-gray-400">WireComments is a powerful Laravel package that simplifies the process of managing comments in your application. Seamlessly integrate comments with easy-to-use components and customizable options.</p>
                </div>
                <!-- Links Section -->
                <div>
                    <h3 class="text-xl font-semibold">Links</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="/docs" class="text-gray-400 hover:text-white">Documentation</a></li>
                        <li><a href="https://github.com/Matildevoldsen/wire-comments" class="text-gray-400 hover:text-white">GitHub</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div>
                    <h3 class="text-xl font-semibold">Contact</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="mailto:matilde.enevoldsen19@gmail.com" class="text-gray-400 hover:text-white">Email: matilde.enevoldsen19@gmail.com</a></li>
                        <li><a href="https://twitter.com/tillythecoder" class="text-gray-400 hover:text-white">Twitter: @tillythecoder</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 WireComments. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
