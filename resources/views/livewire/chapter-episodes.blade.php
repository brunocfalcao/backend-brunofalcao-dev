{{-- Example badge colors (include them here so Tailwind compiles them)
	bg-yellow-100 text-yellow-700 ring-yellow-600 
	bg-gray-100 text-gray-700 ring-gray-600 
	bg-orange-100 text-orange-700 ring-orange-600 
	bg-green-100 text-green-700 ring-green-600 
	bg-blue-100 text-blue-700 ring-blue-600 
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

@php
$difficulty_badge_classes = [
	'easy' => 'text-blue-700 bg-blue-100',
	'medium' => 'text-green-700 bg-green-100',
	'hard' => 'text-yellow-700 bg-yellow-100'
]
@endphp

@props(['chapter' => null])
<div>
	<div class="w-full flex items-center">
		<div>
			<h2 class="text-lg lg:text-xl font-bold text-gray-900">{{ $chapter->name }}</h2>
			@if ($chapter->description !== null)
			<p class="text-gray-700 text-base mt-2 max-w-2xl sm:text-justify">{{ $chapter->description }}</p>
			@endif
		</div>
		<div class="mt-3 ml-auto flex flex-col flex-shrink-0 md:items-start gap-4">
			<x-dashboard.toggle title="Hide Completed" class="text-red-500" name="hide-completed" :checked="$hideCompleted" wire:model.live="hideCompleted" />
			<x-dashboard.toggle title="Only New" name="only-new" :checked="$onlyNew" wire:model.live="onlyNew" />
		</div>
	</div>

	<div class="hidden episode-list-grid-preload">
		@forelse ($episodes as $episode)
		<div class="w-full md:w-[30rem] mr-4">
			<a href="{{ route('episode.play', $episode->uuid) }}" class="cursor-pointer w-full bg-white group rounded-2xl overflow-hidden flex relative">
				<img src="{{ Vite::asset('resources/images/guitar.jpg') }}" class="rounded-l-2xl w-1/3 flex-shrink-0 object-cover group-hover:brightness-105" style="aspect-ratio: 1/1;">

				<div class="px-6 py-10 flex flex-col justify-center">
					<h2 class="text-lg font-bold text-gray-900 leading-snug">{{$episode->name}}</h2>
					<div class="flex items-center w-full gap-2 mt-2">
						<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-gray-100 text-gray-700">{{$episode->duration_for_humans}}</span>
							
						@if ($episode->is_seen)
							<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-blue-100 text-blue-700">Seen</span>
						@endif
						
						@if ($episode->is_new)
							<span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-green-100 text-green-700">New</span>
						@endif
					</div>
				</div>

				<span class="absolute top-0 right-0 rounded-tr-2xl rounded-bl-2xl inline-flex items-center px-3 py-2 text-xs capitalize font-medium {{$difficulty_badge_classes[$episode->difficulty_canonical]}}">
					{{$episode->difficulty_canonical}}
				</span>
			</a>
		</div>
		@empty
		No results found. You can manage your filters in the top right.
		@endforelse
	</div>

	<div class="mt-6 episode-list-grid w-full overflow-visible" wire:ignore>
		Loading...
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

@script
<script>
	let flickityOptions = {
		// options
		cellAlign: "left",
		wrapAround: false,
		contain: true,
		pageDots: false, // TODO: eventually enable & add extra bottom spacing to the grid
		prevNextButtons: true,
		groupCells: true,
		adaptiveHeight: true,
		resize: true,
		imagesLoaded: true,
	};

	let $carousel = null;
	
	$wire.on('render', () => {
		ignore_clicks = false;
		setTimeout(() => {
			if($carousel != null)
				$carousel.flickity('destroy');
			$($wire.el).find(".episode-list-grid").html($($wire.el).find('.episode-list-grid-preload').html());
			$carousel = $($wire.el).find(".episode-list-grid").flickity(flickityOptions);
		}, 100);
    });

 	$($wire.el).find('input[type=checkbox]').change(function(){
		$($wire.el).find('button.fancy-toggle').addClass('ignore-clicks');
		$wire.set($(this).attr('wire:model.live'), $(this).prop('checked'));
	});
</script>
@endscript