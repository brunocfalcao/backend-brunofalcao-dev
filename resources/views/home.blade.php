<x-dashboard.skeleton>
	<x-slot:sticky_content>
		<x-dashboard.search-bar></x-dashboard.search-bar>

		{{-- 
		<h1 class="mt-6 text-2xl lg:text-3xl font-bold text-black">Dashboard 👋</h1>
		<p class="italic text-gray-700 text-base mt-2">Welcome to the ultimate learning!</p>
		--}}

		{{--
		<div class="mt-4">
			<dl class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
			  <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-5 pt-5 border border-gray-200 sm:px-6 sm:pt-6">
				<dt>
				  <div class="absolute rounded-md bg-indigo-500 p-3">
					<svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
					</svg>
				  </div>
				  <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Subscribers</p>
				</dt>
				<dd class="ml-16 flex items-baseline">
				  <p class="text-2xl font-semibold text-gray-900">71,897</p>
				  <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
					<svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
					</svg>
					<span class="sr-only"> Increased by </span>
					122
				  </p>
				</dd>
			  </div>
			</dl>
		  </div>
		  --}}

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
		
		<h2 class="text-2xl lg:text-3xl font-bold text-black mt-8">My Courses</h2>
		<p class="italic text-gray-700 text-base mt-2">Below are your classes which are active</p>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="space-y-6">
			<x-dashboard.episode-list title="Instruments" badge_text="Intermediate" badge_color="gray" subtitle="Cool Instruments!" n="4" />
			<x-dashboard.episode-list title="Pilot Training" badge_text="Easy" badge_color="green" n="16" />
			<x-dashboard.episode-list title="Website Design" badge_color="primary" n="8" />
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
