<x-base-layout title="Laravel Todo with Alpine and HTMX">
    <main class="max-w-5xl mx-auto py-4 flex flex-wrap">
        <header class="outline outline-gray-100 dark:outline-gray-900 p-4 flex-1">
            <h1 class="mb-2 text-4xl font-bold">Todo Laravel + Alpine + HTMX</h1>
            <p>Trying out a new tech stack.</p>

            <form>
                <input type="text" placeholder="Your task here" class="bg-neutral-100 dark:bg-gray-700 p-2" required>
                <button type="submit" class="block">Add a new task</button>
            </form>
        </header>

        <ul class="p-4 flex flex-col flex-1">
            @empty($todos)
                <li>you have got nothing to do today.</li>
            @endempty

            @foreach ($todos as $todo)
                <li class="p-2 bg-gray-900">
                    <span>{{ $todo->label }}</span>
                    <button title="mark as done">👍</button>
                </li>
            @endforeach
        </ul>
    </main>
</x-base-layout>
