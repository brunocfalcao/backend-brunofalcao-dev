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
	<p class="italic text-gray-700 text-base mt-1">{{ $subtitle }}</p>
	@endif

	<div class="mt-4 w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-x-4 gap-y-6">
		@for ($i = 0; $i < $n; $i++)
		<a href="#" class="cursor-pointer group">
			<div class="rounded-lg relative w-full group-hover:brightness-125">
				<img src="{{ Vite::asset('resources/images/guitar.jpg') }}" class="rounded-lg w-full" style="aspect-ratio: 2/1;">
				{{-- <div class="absolute left-0 right-0 bottom-0 top-0 rounded-lg bg-gradient-to-b from-transparent to-[rgba(0,0,0,0.8)]"></div> --}}
				
				<!-- Course Completion
				<div class="absolute left-6 right-6 bottom-4 h-1.5 rounded-full bg-white">
					<div class="h-1.5 rounded-full bg-orange-300" style="width: 70%;"></div>
				</div>
				-->
			</div>

			<h2 class="text-base font-bold text-gray-700 leading-snug mt-3">Acoustic Guitar and Electric Guitar Lessons in 30 Minutes</h2>
			{{--
            <div class="flex items-center w-full mt-1">
				<p class="text-sm text-gray-600">Created by Erich Andreas</p>
				@if ($badge_text !== null)
				<div class="flex ml-auto justify-end gap-2">
					<span class="inline-flex ml-auto items-center rounded-full px-2 py-1 text-xs font-medium bg-{{$badge_color}}-100 text-{{$badge_color}}-700">{{$badge_text}}</span>
				</div>
				@endif
			</div>
            --}}
		</a>
		@endfor
	</div>
</div>
