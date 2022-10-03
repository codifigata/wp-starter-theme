<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
	<label>
		<span class="sr-only">
			{{ _x('Cerca:', 'label', 'codifigata') }}
		</span>

		<input type="search" placeholder="{!! esc_attr_x('Cerca &hellip;', 'placeholder', 'codifigata') !!}"
			value="{{ get_search_query() }}" name="s">
	</label>

	<button>{{ _x('Cerca', 'submit button', 'codifigata') }}</button>
</form>