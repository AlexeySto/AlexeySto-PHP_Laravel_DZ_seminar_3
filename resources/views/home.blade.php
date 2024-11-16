@extends('layouts.default')

@section('content')
    @if ($age > 18)
        <p>{{ $age }}</p>
    @else
        <p>{{ $name }} еще слишком молод.</p>
    @endif
@endsection