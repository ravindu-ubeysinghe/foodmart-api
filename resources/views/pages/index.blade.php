@extends('layouts.app')

@section('content')

@if ($page)
  <div class="content">
    {!! $page->body !!}
  </div>
@endif

@endsection
