@extends('layouts.app')

@section('content')

  @if (!empty($page))
    <div class="content">
      {!! $page->body !!}
    </div>
  @endif

  @include('inc.contact_form')

@endsection
