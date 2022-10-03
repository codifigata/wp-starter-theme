<a class="sr-only focus:not-sr-only" href="#main">
	{{ __('Skip to content') }}
</a>

@include('sections.header')

<div class="grid grid-cols-4 px-5 py-3 lg:px-10 lg:py-5 ">
	<main id="main" class="col-span-3">
		@yield('content')
	</main>

	@hasSection('sidebar')
	<aside class="sidebar">
		@yield('sidebar')
	</aside>
	@endif
</div>

@include('sections.footer')