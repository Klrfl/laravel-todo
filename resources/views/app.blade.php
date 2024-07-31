<x-base-layout title="Laravel Todo with Alpine and HTMX">
    <main class="max-w-7xl mx-auto">
        <h1 class="my-2 text-lg font-bold">Todo Laravel + Alpine + HTMX</h1>
        <p>Trying out a new tech stack.</p>

        <ul class="flex flex-col">
            @empty($todos)
                <li>you have got nothing to do today.</li>
            @endempty

            @foreach ($todos as $todo)
                <li>{{ $todo->label }}</li>
            @endforeach
        </ul>
    </main>
</x-base-layout>
