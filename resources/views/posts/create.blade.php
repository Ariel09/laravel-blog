<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-forms.posts>
            <form class="space-y-6" action="{{ route('posts.store') }}" method="POST">
                @csrf
                <!-- Title -->
                <div>
                    <x-input-label for="title" class="text-3xl" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" name="title" :value="old('title')" required autofocus/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="content" class="text-3xl" :value="__('Content')" />
                    <x-textarea id="content" class="block mt-1 h-40 w-full" name="content" :value="old('content')" required autofocus/>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </x-forms.posts>
    </div>
</x-app-layout>
