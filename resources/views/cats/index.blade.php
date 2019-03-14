@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">
            Back to overview
        </a>
    @endif
    <h2>
        All @if (isset($breed)) {{ $breed->name }} @endif Cats
    </h2>
    <a href="{{ route('cats.create') }}">
        <i class="fa fa-plus"></i> New Cat
    </a>
    <hr/>
@endsection

@section('content')
    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ route('cats._cat', ['cat' => $cat->id]) }}">
                <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
            </a>
        </div>
    @endforeach
@endsection