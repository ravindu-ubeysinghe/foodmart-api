@include('inc.header')

			<div class="posts-layout">
				{{-- including any system feedback, success or error messages --}}
				@if (!empty($page))
					<h1>{{ $page->title }}</h1>
				@else
					<h1>Untitled Page</h1>
				@endif

				@include('inc.system_feedback')
				@yield('content')
			</div>

@include('inc.footer')
