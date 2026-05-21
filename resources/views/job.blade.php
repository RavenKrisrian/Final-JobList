<x-layout>
    <h1>{{ $job['title'] }}</h1>

    <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
    <p><strong>Description:</strong> {{ $job['job_description'] }}</p>

    <p>
        <a href="/jobs">Back to job list</a>
    </p>
</x-layout>