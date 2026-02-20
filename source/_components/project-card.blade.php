<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="{{ $project->cover_image ?? '/assets/images/placeholder.jpg' }}" alt="{{ $project->title }}">
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
                {{ $project->category }}
            </p>
            <a href="{{ $project->getUrl() }}" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900">
                    {{ $project->title }}
                </p>
                <p class="mt-3 text-base text-gray-500">
                    {{ $project->excerpt ?? \Illuminate\Support\Str::limit($project->getContent(), 100) }}
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
                <span class="sr-only">{{ $project->date }}</span> <!-- Simplify if needed -->
            </div>
            <div class="ml-3">
               <div class="flex space-x-1 text-sm text-gray-500">
                  <time datetime="{{ $project->date }}">{{ date('M Y', $project->date) }}</time>
                  <span aria-hidden="true">&middot;</span>
                  <span>{{ implode(', ', $project->stack ?? []) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
