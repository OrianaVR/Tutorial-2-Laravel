@extends('layouts.app')
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')

    @isset($message)
        <p text-center style="color:darkgreen">{{ $message }}</p>
    @endisset

@endsection