<x-dashboard.skeleton>
	<x-slot:sticky_content>
		{{-- <input type="text" placeholder="Search" class="block lg:hidden outline-none border border-gray-300 ring-0 focus:ring-0 bg-white text-gray-600 rounded-full px-8 py-4 w-full text-left max-w-full">
		--}}

		<div class="pb-6 border-b border-gray-200 mt-2">
			<h2 class="text-2xl lg:text-3xl font-bold text-black">Activity</h2>
		    <p class="italic text-gray-700 text-base mt-2">Your latest notofications and happening are here.</p>
		</div>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div>
			<x-dashboard.video-grid title="In Progress" subtitle="Below are your classes which are active" badge_text="Level 2" badge_color="primary" n="6" />
			<div class="py-6">
				<div class="border-b border-gray-200"></div>
			</div>
			<x-dashboard.video-grid title="Completed" subtitle="All your bookmarked videos" badge_text="Bookmarked" badge_color="yellow" n="7" />
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
