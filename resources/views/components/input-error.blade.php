@props(['messages'])

@if ($messages)
        @foreach ((array) $messages as $message)
            <li class="text_error">{{ $message }}</li>
        @endforeach
@endif
