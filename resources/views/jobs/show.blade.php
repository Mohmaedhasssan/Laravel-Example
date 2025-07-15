<x-layout>
    <x-slot:heading>
        Job: {{ $job->title }}
    </x-slot:heading>


    <p>this Job pays {{$job->salary}} per year</p>
    
    <div class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </div>

</x-layout>