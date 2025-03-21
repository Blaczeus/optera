@props(['job'])
<x-panel class="gap-x-6">
    <div class='flex items-center'>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition duration-300 ease-in-out">{{ $job->title }}</h3>
        <p class="text-base text-gray-400 mt-4">{{ $job->salary }}</p>
    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small" />
        @endforeach
    </div>
</x-panel>
