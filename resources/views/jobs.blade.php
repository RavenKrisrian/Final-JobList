<x-layout>
    <h1>JobList</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>