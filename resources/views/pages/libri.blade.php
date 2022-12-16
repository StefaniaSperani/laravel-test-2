@extends('layouts.main')

@section('titolo', 'Lista libri')

@section('content')
<h1>Libri</h1>
{{$libri['titolo']}}
<br>
{{$libri['autore']}}
@endsection
