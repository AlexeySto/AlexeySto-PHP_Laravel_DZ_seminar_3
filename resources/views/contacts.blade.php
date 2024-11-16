@extends('layouts.default')

@section('content')
    @if (empty ($email))
        <p>Адрес электронной почты не указан</p>
    @else
        <p>{{ $email }}</p>
    @endif
@endsection