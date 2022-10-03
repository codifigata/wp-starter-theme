<header x-data="{ open: false }" class="rounded px-5 py-3 shadow-sm lg:px-10 lg:py-5">
	<div class="flex content-center items-center justify-between">
		<!-- Logo -->
		<a href="{{ home_url('/') }}" class="rounded focus:outline-none focus:ring focus:ring-teal-200">
			{!! $siteName !!}
		</a>

		@if (has_nav_menu('header'))
		<!-- Desktop navigation -->
		<nav class="hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
			{!! wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'flex justify-between space-x-1
			[&>*_a]:rounded [&>*_a]:px-5 [&>*_a]:py-3 [&>*_a]:transition-colors [&>*_a]:ease-out
			hover:[&>*_a]:bg-teal-50 hover:[&>*_a]:text-teal-900 focus:[&>*_a]:outline-none focus:[&>*_a]:ring
			focus:[&>*_a]:ring-teal-200 [&>.current-menu-item_a]:bg-teal-100 [&>.current-menu-item_a]:text-teal-900',
			'echo' => false]) !!}
		</nav>

		<!-- Mobile menu toggles -->
		<div class="flex content-center lg:hidden">
			<!-- Closed state -->
			<button @click="open = true" x-show="!open"
				class="rounded focus:outline-none focus:ring focus:ring-teal-200">
				<span class="sr-only">Open menu</span>
				<svg class="h-6 w-6 fill-current stroke-current stroke-2" xmlns="http://www.w3.org/2000/svg">
					<path d="M4 18h16M4 6h16H4Zm0 6h16H4Z" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>

			<!-- Opened state -->
			<button @click="open = false" x-show="open"
				class="rounded focus:outline-none focus:ring focus:ring-teal-200">
				<span class="sr-only">Close menu</span>
				<svg class="h-6 w-6 fill-current stroke-current stroke-2" xmlns="http://www.w3.org/2000/svg">
					<path d="m6 6 12 12M6 18 18 6 6 18Z" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
	<nav class="mt-5 space-y-2 lg:hidden" x-show="open && window.innerWidth <= 1023"
		x-transition:enter="transition ease-out" x-transition:enter-start="opacity-0 -translate-y-6"
		x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out"
		x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-6">
		{!! wp_nav_menu(['theme_location' => 'header', 'menu_class' => '[&>*_a]:block [&>*_a]:rounded [&>*_a]:px-5
		[&>*_a]:py-3 [&>*_a]:text-right [&>*_a]:transition-colors [&>*_a]:ease-out hover:[&>*_a]:bg-teal-50
		hover:[&>*_a]:text-teal-900 focus:[&>*_a]:outline-none focus:[&>*_a]:ring focus:[&>*_a]:ring-teal-200
		[&>.current-menu-item_a]:bg-teal-100 [&>.current-menu-item_a]:text-teal-900',
		'echo' => false]) !!}
	</nav>
	@endif
</header>