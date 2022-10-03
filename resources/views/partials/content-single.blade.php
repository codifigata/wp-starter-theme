<article @php(post_class())>
	<header>
		<h1 class="font-bold text-4xl">
			{!! $title !!}
		</h1>

		@include('partials.entry-meta')
	</header>

	<div class="space-y-4">
		@php(the_content())
	</div>

	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
			<p>' . __('Pagine:', 'codifigata'), 'after' => '</p>
		</nav>']) !!}
	</footer>

	@php(comments_template())
</article>