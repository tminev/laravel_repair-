@extends('layouts.master')

@section('title', 'Book Profile')


@section('content')
<h1>{{ $book->title }}</h1>
<p>
	{{ $book->year_public }}
</p>
<p>
	{{ $book->price }}
</p>
