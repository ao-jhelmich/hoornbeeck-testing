<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Projects') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto space-y-4 max-w-7xl sm:px-6 lg:px-8">
            <a href="{{ route('projects.create') }}" class="inline-block px-4 px-6 py-2 py-3 text-sm font-bold text-white uppercase bg-indigo-700 rounded-md">+ New project</a>

            @forelse($projects as $project)
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800">
                    <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-900">
                        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
                            {{ $project->name }}
                        </h2>
                        <p class="text-gray-500 dark:text-gray-300">
                            {{ $project->description }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800">
                    <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-900">
                        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
                            Geen projecten beschikbaar
                        </h2>
                    </div>
                </div>
            @endforelse
            {{ $projects->links() }}
        </div>

    </div>
</x-app-layout>
