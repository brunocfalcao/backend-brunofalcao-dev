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
			'glow': => [
				'color' => '',
				'thickness' => ''
			],
			'disabled': true/false,
			'difficulty' => [
				'name' => 'Chapter 1',
				'color' => 'red'
			],
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
			'featured': true/false,
			'disabled': true/false,
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

	<div class="mt-4 episode-list-grid w-full overflow-visible">
		@for ($i = 0; $i < $n; $i++)
		<div class="w-full md:w-[30rem] mx-2">
			<a href="#" class="cursor-pointer w-full bg-white group rounded-2xl overflow-hidden flex relative">
				<img src="{{ Vite::file('images/guitar.jpg') }}" class="rounded-l-2xl w-1/3 flex-shrink-1 object-cover group-hover:brightness-105" style="aspect-ratio: 1/1;">

				<div class="px-6 py-10 flex flex-col justify-center">
					<h2 class="text-lg font-bold text-gray-900 leading-snug">Acoustic Guitar and Electric Guitar Lessons in 30 Minutes</h2>
					<div class="flex items-center w-full gap-2 mt-2">
						@if ($badge_text !== null)
							<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-gray-100 text-gray-700">Chapter 1</span>
							<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-{{$badge_color}}-100 text-{{$badge_color}}-700">{{$badge_text}}</span>
						@endif
					</div>
				</div>

				<span class="absolute top-0 right-0 rounded-tr-2xl rounded-bl-2xl inline-flex items-center px-3 py-2 text-xs font-medium bg-green-100 text-green-700">Intermediate</span>
			</a>
		</div>
		@endfor
		{{--
			<!-- Show horizontal overflow of slider -->
			<style>
				.episode-list-grid .flickity-viewport {
					overflow: visible;
				}
			</style>
		--}}
	</div>
</div>

{{-- 
	<div class="w-full sm:w-[calc(50%-1rem)] overflow-hidden 2xl:w-[calc(33%-1rem)] px-4 group">
			<a class="w-full p-4 bg-red-500 cursor-pointer bg-white flex">
				
				<div>
						
				</div>
			</a>
		</div>
--}}