<x-base-layout title="Laravel Todo with Alpine and HTMX">
    <main class="max-w-7xl mx-auto py-4 flex flex-col gap-4 md:flex-row">
        <header class="outline outline-gray-100 dark:outline-gray-900 p-4 md:basis-1/3">
            <h1 class="mb-2 text-4xl font-bold">Todo Laravel + Alpine + HTMX</h1>
            <p>Trying out a new tech stack.</p>

            <form hx-post="/todo" hx-trigger="submit" hx-target="#todo-list" hx-swap="beforeend">
                @csrf
                <input type="text" placeholder="Your task here"
                    class="block w-full bg-neutral-100 dark:bg-gray-900 p-2" name="label" required>
                <button type="submit"
                    class="block border hover:bg-gray-200 dark:border-gray-700 dark:hover:bg-gray-700 px-4 py-2 my-2">Add
                    a new
                    task</button>
            </form>
        </header>

        <form hx-swap="outerHTML" class="p-4 md:py-0 md:flex-1">
            @csrf
            <ol class="flex flex-col gap-4" id="todo-list">
                @empty($todos)
                    <li>you have got nothing to do today.</li>
                @endempty

                @foreach ($todos as $todo)
                    <x-todo :todo="$todo" />
                @endforeach
            </ol>
        </form>
    </main>
</x-base-layout>
