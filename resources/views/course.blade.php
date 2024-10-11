<x-dashboard.skeleton :activeCourse="$course">
	<x-slot:sticky_content>
		<livewire:global-search />
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="gray-section">
			<div class="flex gap-2">
				@svg('heroicon-s-document-text', 'h-9 w-9 text-primary-600 mt-0.5 -ml-[0.15rem]')

				<div>
					<h2 class="text-2xl lg:text-3xl font-bold text-black">{{ $course->name }}</h2>
					<p class="text-gray-700 text-base mt-2">Browse course chapters below</p>
				</div>

				<!--
				<div class="ml-auto hidden sm:block">
					<select name="video-type" id="video-type" class="styled-select">
						<option value="recent-videos" selected>Recent Videos</option>
						<option value="freeze-videos">Freeze Videos</option>
					</select>
 					<script>
						NiceSelect.bind(document.getElementById("video-type"), {searchable: false, placeholder: 'select', selectedtext: 'geselecteerd'});
					</script>
				</div>
				-->
			</div>

			<div class="space-y-8 mt-8">
				
				@foreach ($course->chapters()->with('episodes')->get() as $chapter)
					<livewire:chapter-episodes :key="$chapter->id" :chapter="$chapter" />
				@endforeach
				
				{{-- 
				<x-dashboard.episode-list title="Instruments" badge_text="Intermediate" badge_color="gray" subtitle="Cool Instruments!" n="4" />
				<x-dashboard.episode-list title="Pilot Training" badge_text="Easy" badge_color="green" n="16" />
				--}}
			</div>
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
