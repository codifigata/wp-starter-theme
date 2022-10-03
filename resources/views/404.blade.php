@extends('layouts.app')

@section('content')
@include('partials.page-header')

@if (! have_posts())
<x-alert type="warning">
	{!! __('Il contenuto che desideri visulizzare con è più disponibile.', 'codifigata') !!}
</x-alert>

{!! get_search_form(false) !!}
@endif
@endsection