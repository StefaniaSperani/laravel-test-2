@extends('layouts.main')

@section('titolo', 'Lista libri')

@section('content')
<h1>Libri</h1>
<ul>
    @forelse ($books as $key=>$book)

    <li>{{ $book->title }}-{{ $key }}</li>
@empty
    <p>No books</p>
@endforelse
</ul>

@endsection
