@props(['job'])
<x-panel class="flex-col text-center">
    <div class="self-start text-sm font-bold">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 transition duration-300 ease-in-out font-bold text-xl">{{$job->title}}</h3>
        <p class="text-sm mt-6">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex items-center flex-wrap gap-2">
            @foreach($job->tags->take(2) as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo :width="45"/>
    </div>

</x-panel>
