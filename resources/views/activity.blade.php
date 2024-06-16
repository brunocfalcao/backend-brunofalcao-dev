<x-dashboard.skeleton>
	<x-slot:sticky_content>
		<h2 class="mt-2 text-2xl lg:text-3xl font-bold text-black">Activity 🔔</h2>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="gray-section mt-2">
			<x-dashboard.video-grid title="Watched Videos" subtitle="Below are the videos you watched" badge_text="Level 2" badge_color="primary" n="6" />
		</div>
		<div class="gray-section mt-8">
			<x-dashboard.video-grid title="Bookmarked" subtitle="All your bookmarked videos" badge_text="Bookmarked" badge_color="yellow" n="7" />
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
