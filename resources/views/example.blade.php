@extends('layouts.app')

@section('content')
    <h1>Welcome, {{ $username }}</h1>
    <p>Here is a list of items:</p>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @if($showMessage)
        <p>{{ $message }}</p>
    @else
        <p>No message to display.</p>
    @endif

    @include('partials.footer')
@endsection