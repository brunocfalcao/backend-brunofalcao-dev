<x-dashboard.skeleton sticky_content_class="hidden sm:block">
	<x-slot:sticky_content>
		<nav class="hidden sm:flex lg:mb-3 min-w-0 max-w-full" aria-label="Breadcrumb">
			<ol role="list" class="flex items-center space-x-2 max-w-full">
				<li class="flex-shrink-0">
					<div class="flex items-center">
						<a href="#" class="text-sm text-primary-600 hover:text-primary-700 hover:bg-primary-200 bg-primary-100 px-4 py-1 rounded-lg font-semibold">
							My Courses
						</a>
					</div>
				</li>
				<li class="overflow-hidden flex-shrink min-w-0">
					<div class="flex items-center min-w-0">
						<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
						</svg>
						<a href="#" class="ml-2 text-sm font-normal text-gray-600 hover:text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis min-w-0" aria-current="page">{{$course->name}}</a>
					</div>
				</li>
				<li class="overflow-hidden flex-shrink min-w-0">
					<div class="flex items-center min-w-0">
						<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
						</svg>
						<a href="#" class="ml-2 text-sm font-normal text-gray-600 hover:text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis min-w-0" aria-current="page">{{$chapter->name}}</a>
					</div>
				</li>
				<li class="overflow-hidden flex-shrink min-w-0">
					<div class="flex items-center min-w-0">
						<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
						</svg>
						<a href="#" class="ml-2 text-sm font-normal text-gray-600 hover:text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis min-w-0" aria-current="page">{{$episode->name}}</a>
					</div>
				</li>
			</ol>
		</nav>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<livewire:watch-episode :key="$episode->id" :episode="$episode" />
	</x-slot:main_content>
</x-dashboard.skeleton>