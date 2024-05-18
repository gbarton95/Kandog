@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        {{-- @foreach ((array) $messages as $message)
            <li>{{ $message }} aquí está</li>
        @endforeach --}}
        <li>{{__("Incorrect data. Please try again.")}}</li>
        <li style="color: black;">{{__("If you are not registered yet, you can do so")}} <a style="color:blue; text-decoration: underline;" href="{{ route('register') }}">{{__("here")}}</a></li>
    </ul>
@endif
