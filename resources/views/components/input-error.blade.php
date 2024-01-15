@props(['messages'])

@if ($messages)
        @foreach ((array) $messages as $message)
            <div class="text_error">{{ $message }}</div>
        @endforeach
@endif
