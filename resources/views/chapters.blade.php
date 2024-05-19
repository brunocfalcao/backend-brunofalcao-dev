<x-dashboard.skeleton>
	<x-slot:sticky_content>
		<x-dashboard.search-bar></x-dashboard.search-bar>

		<nav class="flex mt-6 mb-4" aria-label="Breadcrumb">
			<ol role="list" class="flex items-center space-x-2">
			  <li>
				<div class="flex items-center">
				  <a href="#" class="text-base text-primary-600 hover:text-primary-700 font-bold">My Courses</a>
				</div>
			  </li>
			  <li>
				<div class="flex items-center">
				  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
				  </svg>
				  <a href="#" class="ml-2 text-base font-medium text-gray-500 hover:text-gray-700" aria-current="page">Chapters</a>
				</div>
			  </li>
			</ol>
		</nav>

		<div class="pb-6 border-b border-gray-200 mt-2">
			<h2 class="text-2xl lg:text-3xl font-bold text-black">Chapters</h2>
		</div>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div>
			<x-dashboard.episode-list title="In Progress" subtitle="Below are your classes which are active" badge_text="Level 2" badge_color="primary" n="4" />
			<div class="py-6">
				<div class="border-b border-gray-200"></div>
			</div>
			<x-dashboard.episode-list title="Completed" subtitle="Below are your classes which are completed" badge_text="Completed" badge_color="yellow" n="16" />
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
