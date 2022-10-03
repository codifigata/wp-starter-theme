<article @php(post_class())>
	<header>
		<h2 class="font-bold text-3xl">
			<a href="{{ get_permalink() }}">
				{!! $title !!}
			</a>
		</h2>

		@include('partials.entry-meta')
	</header>

	<div class="entry-summary">
		@php(the_excerpt())
	</div>
</article>