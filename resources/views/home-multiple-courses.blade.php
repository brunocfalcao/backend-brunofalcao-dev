Multiple courses<x-dashboard.skeleton>
	<x-slot:sticky_content>
		<livewire:global-search />

		<h1 class="mt-8 text-2xl lg:text-3xl font-bold text-black">Welcome to Ultimate Learning! 👋</h1>

		<!--
		<div class="mt-4 w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
			@for ($i = 0; $i < 4; $i++)
			<div class="p-6 rounded-lg bg-primary-100 flex items-center gap-2">
				<div>
					<p class="italic text-gray-700 text-base">Total Courses</p>
					<p class="text-gray-900 text-2xl lg:text-3xl font-bold mt-1">123</p>
				</div>
				<div class="ml-auto flex-shrink-0 flex items-center justify-center w-14 h-14 bg-white text-primary-500 rounded-full">
					@svg('heroicon-s-chart-pie', 'w-6 h-6')
				</div>
			</div>
			@endfor
		</div>
		-->

	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="mt-2 hidden md:block">
			<div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
				<div class="relative flex items-center rounded-xl bg-stats-background-1 p-4 gap-4">
					<div class="rounded-xl bg-white p-3">
						@svg('heroicon-s-book-open', 'h-9 w-9 text-stats-icon-1')
					</div>
					<div>
						<p class="truncate text-base font-medium text-gray-500">Total Courses</p>
						<p class="text-3xl font-semibold text-gray-900">155</p>
					</div>
				</div>
				<div class="relative flex items-center rounded-xl bg-stats-background-2 p-4 gap-4">
					<div class="rounded-xl bg-white p-3">
						@svg('heroicon-s-clock', 'h-9 w-9 text-stats-icon-2')
					</div>
					<div>
						<p class="truncate text-base font-medium text-gray-500">Total Courses</p>
						<p class="text-3xl font-semibold text-gray-900">155</p>
					</div>
				</div>
				<div class="relative flex items-center rounded-xl bg-stats-background-3 p-4 gap-4">
					<div class="rounded-xl bg-white p-3">
						@svg('heroicon-s-check-circle', 'h-9 w-9 text-stats-icon-3')
					</div>
					<div>
						<p class="truncate text-base font-medium text-gray-500">Total Courses</p>
						<p class="text-3xl font-semibold text-gray-900">155</p>
					</div>
				</div>
				<div class="relative flex items-center rounded-xl bg-stats-background-4 p-4 gap-4">
					<div class="rounded-xl bg-white p-3">
						@svg('fas-stopwatch', 'h-9 w-9 text-stats-icon-4')
					</div>
					<div>
						<p class="truncate text-base font-medium text-gray-500">Total Courses</p>
						<p class="text-3xl font-semibold text-gray-900">155</p>
					</div>
				</div>
			</div>
		</div>

		<div class="gray-section mt-2 md:mt-8">
			<div class="flex gap-2 mt-4">
				@svg('heroicon-s-document-text', 'h-9 w-9 text-primary-600 mt-0.5 -ml-[0.15rem]')

				<div>
					<h2 class="text-2xl lg:text-3xl font-bold text-black">{{ $course->name }}</h2>
					<p class="text-gray-700 text-base mt-2">Browse course chapters below</p>
				</div>

				<div class="ml-auto hidden sm:block">
					<select name="video-type" id="video-type" class="styled-select">
						<option value="recent-videos" selected>Recent Videos</option>
						<option value="freeze-videos">Freeze Videos</option>
					</select>
 					<script>
						NiceSelect.bind(document.getElementById("video-type"), {searchable: false, placeholder: 'select', selectedtext: 'geselecteerd'});
					</script>
				</div>
			</div>

			<div class="space-y-6 mt-8">
				@foreach ($course->chapters()->with('episodes')->get() as $chapter)
					<x-dashboard.episode-list :chapter="$chapter" />
				@endforeach
				
				{{-- 
				<x-dashboard.episode-list title="Instruments" badge_text="Intermediate" badge_color="gray" subtitle="Cool Instruments!" n="4" />
				<x-dashboard.episode-list title="Pilot Training" badge_text="Easy" badge_color="green" n="16" />
				--}}
			</div>
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
