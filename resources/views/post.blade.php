<x-layout>
    <section class="px-6 py-4">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 text-center">
                    <img src="/images/illustration-1.png" alt="Ilustraion One" class="rounded-xl" />
                    <p class="block mt-4 text-gray-400 text-xs">
                        Published
                        <time> {{ $post->created_at->diffForHumans() }} </time>
                    </p>

                    <div class="flex items-center justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-span-8">
                    <div class="flex justify-between mb-6">
                        <a href="/">Back to Posts</a>
                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>
                    <h1 class="font-bold text-4xl mb-3">
                        {{ $post->title }}
                    </h1>

                    <div class="space-y-6">
                        {{
                            $post->body
                        }}
                    </div>
                </div>
            </article>
        </main>
    </section>
</x-layout>
