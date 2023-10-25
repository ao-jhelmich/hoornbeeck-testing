<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('New Project') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto space-y-4 max-w-7xl sm:px-6 lg:px-8">
            <form action="{{ route('projects.store') }}" method="post">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('name')" />
                    <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-3">
                    <x-input-label for="description" :value="__('description')" />
                    <x-textarea-input id="description" class="block w-full mt-1" type="text" name="description" :value="old('description')" required />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-3">
                    <x-primary-button>Save Project</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
