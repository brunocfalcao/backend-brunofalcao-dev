{{-- Example badge colors (include them here so Tailwind compiles them)
	bg-yellow-100 text-yellow-700 ring-yellow-600 
	bg-gray-100 text-gray-700 ring-gray-600 
	bg-orange-100 text-orange-700 ring-orange-600 
	bg-green-100 text-green-700 ring-green-600 
	bg-red-100 text-red-700 ring-red-600 
	bg-primary-100 text-primary-700 ring-primary-600 
--}}

{{--


	Episode List

	'episodes' => [
		[
			'image' => 'xxx.jpg',
			'name' => 'Episode 1',
			'badge_left' => [
				'url' => 'google.com',
				'name' => 'Chapter 1',
				'color' => 'red'
			]
			'badge_right' => [
				'url' => 'google.com',
				'name' => 'Chapter 1',
				'color' => 'gray'
			]
		],
		[
			'image' => 'xxx.jpg',
			'name' => 'Episode 1',
			'badge_left' => [
				'url' => 'google.com',
				'name' => 'Chapter 1',
				'color' => 'red'
			]
			'badge_right' => [
				'url' => 'google.com',
				'name' => 'Chapter 1',
				'color' => 'gray'
			]
		]
	]
--}}

@props(['title' => 'Course List', 'n' => 8, 'subtitle' => null, 'badge_color' => 'gray', 'badge_text' => null])
<div>
	<div class="w-full flex items-center">
		<div>
			<h2 class="text-lg lg:text-xl font-bold text-gray-900">{{ $title }}</h2>
			@if ($subtitle !== null)
			<p class="text-gray-700 text-base mt-1">{{ $subtitle }}</p>
			@endif
		</div>
		<div class="mt-3 ml-auto flex flex-col md:flex-row flex-shrink-0 md:items-start gap-4">
			<div class="flex items-center">
				<!-- Enabled: "bg-primary-600", Not Enabled: "bg-gray-200" -->
				<button type="button" data-controls="hide-completed" class="fancy-toggle bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2" role="switch" aria-checked="false" aria-labelledby="annual-billing-label">
				  <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
				  <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
				</button>
				<input type="checkbox" name="hide-completed" class="hidden">
				<span class="ml-3 text-sm hidden sm:inline" id="annual-billing-label">
				  <span class="font-medium text-gray-900">Hide Completed</span>
				</span>
			</div>
			<div class="flex items-center">
				<!-- Enabled: "bg-primary-600", Not Enabled: "bg-gray-200" -->
				<button type="button" data-controls="only-new" class="fancy-toggle bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2" role="switch" aria-checked="false" aria-labelledby="annual-billing-label">
				  <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
				  <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
				</button>
				<input type="checkbox" name="only-new" class="hidden">
				<span class="ml-3 text-sm hidden sm:inline" id="annual-billing-label">
				  <span class="font-medium text-gray-900">Only New</span>
				</span>
			</div>
		</div>
	</div>

	<div class="mt-4 episode-list-grid w-[calc(100%+1rem)] -mx-2">
		@for ($i = 0; $i < $n; $i++)
		<a href="#" class="cursor-pointer w-full sm:w-[calc(50%-1rem)] 2xl:w-[calc(25%-1rem)] px-2 group">
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
			<div class="flex items-center w-full mt-2 gap-2">
				@if ($badge_text !== null)
					<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-gray-100 text-gray-700">Chapter 1</span>
					<span class="inline-flex ml-auto items-center rounded-full px-2 py-1 text-xs font-medium bg-{{$badge_color}}-100 text-{{$badge_color}}-700">{{$badge_text}}</span>
				@endif
			</div>
		</a>
		@endfor
	</div>
</div>
