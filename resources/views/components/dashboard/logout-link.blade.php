@props(['title' => 'Menu Item', 'url' => '#', 'is_active' => '', 'icon' => ''])
<li  {{$attributes}}>
	<!-- Current: "text-primary-500", Default: "text-white hover:text-primary-300" -->
	<a href="#" @class([
		'group flex gap-x-4 rounded-md p-2 text-base leading-6 font-normal',
		'text-white hover:text-primary-300' => $is_active != 'true',
		'text-primary-400' => $is_active == 'true'
	])
	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

	@if($icon != '')
		@svg($icon, 'w-6 h-6 shrink-0')
	@endif

	{{ $title }}
	</a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
@csrf
</form>

