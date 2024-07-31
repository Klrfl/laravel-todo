<li class="flex gap-4 items-center" id="wrapper-{{ $todo->id }}" hx-target="#wrapper-{{ $todo->id }}"
    x-data="{ isEditing: false }">
    {{-- apparently you can put attributes on the form and they will inherit --}}
    <input class="p-2 block flex-1 bg-gray-200 dark:bg-gray-900 dark:hover:text-neutral-200" name="label"
        value="{{ $todo->label }}" :disabled="!isEditing" />

    <button type="button" class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-800" @click="isEditing = true"
        x-show="!isEditing">Edit</button>
    <button class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-800" hx-put="/todo/{{ $todo->id }}"
        x-show="isEditing">Save</button>

    <label for="todo-done-{{ $todo->id }}">
        @if ($todo->is_done)
            mark as not done
        @else
            mark as done
        @endif
    </label>

    <input type="checkbox" name="is_done" id="todo-done-{{ $todo->id }}" hx-put="/todo/{{ $todo->id }}"
        class="hidden" hx-trigger="input" value="{{ $todo->is_done }}">

    <button hx-delete="/todo/{{ $todo->id }}"
        class="bg-red-300 hover:bg-red-500 dark:bg-red-800 hover:dark:bg-red-900 px-4 py-2">
        Delete
    </button>
</li>
