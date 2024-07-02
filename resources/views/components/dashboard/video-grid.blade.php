{{-- Example badge colors (include them here so Tailwind compiles them)
	bg-yellow-100 text-yellow-700 ring-yellow-600 
	bg-gray-100 text-gray-700 ring-gray-600 
	bg-orange-100 text-orange-700 ring-orange-600 
	bg-green-100 text-green-700 ring-green-600 
	bg-red-100 text-red-700 ring-red-600 
	bg-primary-100 text-primary-700 ring-primary-600 
--}}
@props(['title' => 'Course List', 'n' => 8, 'subtitle' => null, 'badge_color' => 'gray', 'badge_text' => null])
<div>
	<h2 class="text-lg lg:text-xl font-bold text-gray-900">{{ $title }}</h2>
	@if ($subtitle !== null)
	<p class="text-gray-700 text-base mt-1">{{ $subtitle }}</p>
	@endif

	<div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-x-4 gap-y-6">
		@for ($i = 0; $i < $n; $i++)
		<a href="#" class="cursor-pointer w-full bg-white group rounded-2xl overflow-hidden flex">
			<img src="{{ Vite::file('images/guitar.jpg') }}" class="rounded-l-2xl w-1/3 flex-shrink-1 object-cover group-hover:brightness-105" style="aspect-ratio: 1/1;">
			
			<div class="px-6 py-4 flex flex-col justify-center">
				<h2 class="text-lg font-bold text-gray-900 leading-snug">Acoustic Guitar and Electric Guitar Lessons in 30 Minutes</h2>
				<div class="flex items-center w-full gap-2 mt-2">
					@if ($badge_text !== null)
						<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-{{$badge_color}}-100 text-{{$badge_color}}-700">{{$badge_text}}</span>
					@endif
				</div>
			</div>
		</a>
		@endfor
	</div>
</div>
