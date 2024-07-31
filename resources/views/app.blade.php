<x-base-layout title="Laravel Todo with Alpine and HTMX">
    <main class="max-w-4xl mx-auto py-4 flex flex-col gap-4 md:flex-row">
        <header class="outline outline-gray-100 dark:outline-gray-900 p-4 md:basis-1/3">
            <h1 class="mb-2 text-4xl font-bold">Todo Laravel + Alpine + HTMX</h1>
            <p>Trying out a new tech stack.</p>

            <form>
                <input type="text" placeholder="Your task here" class="bg-neutral-100 dark:bg-gray-700 p-2" required>
                <button type="submit" class="block">Add a new task</button>
            </form>
        </header>

        <ul class="flex flex-col gap-4 md:flex-1">
            @empty($todos)
                <li>you have got nothing to do today.</li>
            @endempty

            @foreach ($todos as $todo)
                <li>
                    <button title="click to mark as done"
                        class="p-2 block w-full text-left bg-gray-900 dark:hover:text-neutral-200">{{ $todo->label }}</button>
                </li>
            @endforeach
        </ul>
    </main>
</x-base-layout>
