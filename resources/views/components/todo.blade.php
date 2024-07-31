<li id="wrapper-{{ $todo->id }}" hx-target="#wrapper-{{ $todo->id }}">
    {{-- apparently you can put attributes on the form and they will inherit --}}
    <div class="input-wrapper flex gap-4" x-data="{ isEditing: false }">
        <input class="p-2 block flex-1 bg-gray-900 dark:hover:text-neutral-200" name="label" value="{{ $todo->label }}"
            :disabled="!isEditing" />

        <button type="button" class="p-4 hover:bg-slate-800" @click="isEditing = true" x-show="!isEditing">Edit</button>
        <button class="p-4 hover:bg-slate-800" hx-put="/todo/{{ $todo->id }}" x-show="isEditing">Save</button>
    </div>

    <label for="todo-done-{{ $todo->id }}">
        @if ($todo->is_done)
            mark as not done
        @else
            mark as done
        @endif
    </label>

    <input type="checkbox" name="is_done" id="todo-done-{{ $todo->id }}" hx-put="/todo/{{ $todo->id }}"
        class="hidden" hx-trigger="input" value="{{ $todo->is_done }}">

    <button hx-delete="/todo/{{ $todo->id }}">
        Delete
    </button>
</li>
