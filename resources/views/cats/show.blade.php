@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>{{ $cat->name }}</h2>
    <a class="mr-3" href="{{ url("cats/{$cat->id}/edit") }}">
        <i class="fa fa-edit"></i> Edit
    </a>
    <a href="{{ url('cats/'.$cat->id.'/delete') }}">
        <i class="fa fa-trash"></i> Delete
    </a>
    <p>Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
    <hr/>
@endsection

@section('content')
    <p>Date of birth: {{ $cat->date_of_birth }}</p>
    <p>
        @if ($cat->breed)
            Breed: 
            <a href="{{ url('cats/breeds/'.$cat->breed->name) }}">
                {{ $cat->breed->name }}
            </a>
        @endif
    </p>
@endsection