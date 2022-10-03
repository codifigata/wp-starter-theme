@if (! post_password_required())
<section id="comments" class="mt-10">
	@if (have_comments())
	<h2 class="font-bold text-2xl">
		{!! /* translators: %1$s rappresenta il numero di commenti e %2$s il titolo del post */
		sprintf(_nx('%1$s commento su &ldquo;%2$s&rdquo;', '%1$s commenti su &ldquo;%2$s&rdquo;',
		get_comments_number(), 'comments title', 'codifigata'), get_comments_number() === 1 ? _x('One', 'comments
		title', 'codifigata') : number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
	</h2>

	<ol class="comment-list space-y-4">
		{!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
	</ol>

	@if (get_comment_pages_count() > 1 && get_option('page_comments'))
	<nav>
		<ul class="pager">
			@if (get_previous_comments_link())
			<li class="previous">
				{!! get_previous_comments_link(__('&larr; Commenti precedenti', 'codifigata')) !!}
			</li>
			@endif

			@if (get_next_comments_link())
			<li class="next">
				{!! get_next_comments_link(__('Commenti successivi &rarr;', 'codifigata')) !!}
			</li>
			@endif
		</ul>
	</nav>
	@endif
	@endif

	@if (! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
	<x-alert type="warning">
		{!! __('Non è possibile commentare.', 'codifigata') !!}
	</x-alert>
	@endif

	@php(comment_form())
</section>
@endif