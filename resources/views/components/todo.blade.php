<li id="wrapper-{{ $todo->id }}">
    {{-- apparently you can put attributes on the form and they will inherit --}}
    <form hx-swap="outerHTML" hx-target="#wrapper-{{ $todo->id }}">
        @csrf
        <span class="p-2 block w-full text-left bg-gray-900 dark:hover:text-neutral-200">
            {{ $todo->label }}
        </span>

        <button hx-put="/todo/{{ $todo->id }}" title="click to mark as done">
            @if (!$todo->is_done)
                mark as done
            @else
                mark as not done
            @endif
        </button>

        <button hx-delete="/todo/{{ $todo->id }}">
            Delete
        </button>
    </form>
</li>
