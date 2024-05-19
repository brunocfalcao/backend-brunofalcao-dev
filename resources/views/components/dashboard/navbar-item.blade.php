@props(['title' => 'Menu Item', 'url' => '#', 'is_active' => '', 'icon' => ''])
<li  {{$attributes}}>
	<!-- Current: "text-primary-500", Default: "text-white hover:text-primary-300" -->
	<a href="{{ $url }}" @class([
		'group flex gap-x-4 rounded-md p-2 text-base leading-6 font-normal',
		'text-white hover:text-primary-300' => $is_active != 'true',
		'text-primary-400' => $is_active == 'true'
	])>
		@if($icon != '')
			@svg($icon, 'w-6 h-6 shrink-0')
		@endif
		
	  	{{ $title }}
	</a>
</li>