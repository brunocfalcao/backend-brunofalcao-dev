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
				<li class="flex-shrink-0">
					<div class="flex items-center">
						<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
						</svg>
						<a href="#" class="ml-2 text-sm text-primary-600 hover:text-primary-700 hover:bg-primary-200 bg-primary-100 px-4 py-1 rounded-lg font-semibold">
							Instruments
						</a>
					</div>
				</li>
				<li class="overflow-hidden flex-shrink min-w-0">
					<div class="flex items-center min-w-0">
						<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
						</svg>
						<a href="#" class="ml-2 text-sm font-normal text-gray-600 hover:text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis min-w-0" aria-current="page">Acoustic Guitar and Electric Guitar Lessons in 30 Minutes</a>
					</div>
				</li>
			</ol>
		</nav>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="w-full grid 2xl:grid-cols-3 gap-6">
			<div class="order-2 2xl:order-1 2xl:col-span-1">
				<h1 class="text-xl lg:text-2xl text-black font-semibold">Acoustic Guitar and Electric Guitar Lessons in 30 Minutes</h1>
				<p class="mt-3 text-sm text-gray-700 font-normal">Acoustic Guitar Theory, Fingerpicking, Fretting, Chords: Most Important 25 Videos For Getting Started w/ Playing Guitar</p>
			
				<div class="w-full rounded-xl bg-background-950 p-6 flex items-center gap-2 mt-6">
					<div class="w-full">
						<p class="text-white font-bold text-large">Progress</p>
						<p class="text-white opacity-50 text-sm font-semibold mt-1.5">73/90 Lectures Completed</p>
					</div>

					<div class="w-full">
						<p class="text-white font-normal text-large">70% Completed</p>
						<div class="w-full h-2 mt-2 relative bg-progress-bar-background rounded-xl overflow-hidden">
							<div class="h-2 absolute top-0 left-0 bottom-0 bg-progress-bar-foreground rounded-xl" style="width: 70%;"></div>
						</div>
					</div>
				</div>

				<div class="flex items-center gap-4 justify-between mt-6">
					<h2 class="text-xl text-black font-semibold flex-shrink-0">Class Content</h2>
					<p class="hidden xs:flex text-sm text-gray-800 font-normal text-right justify-end max-w-48 items-center">
						@svg('heroicon-s-folder', 'h-4 w-4 text-gray-500 mr-1') 7 @svg('heroicon-s-academic-cap', 'h-4 w-4 text-gray-500 ml-3 mr-1') 28 @svg('heroicon-s-clock', 'h-4 w-4 text-gray-500 ml-3 mr-1') 3h&nbsp;51m
					</p>
				</div>

				<div class="bg-light-background rounded-xl p-6 space-y-4 mt-6">
					@for ($i = 1; $i <= 4; $i++)
					<div class="flex gap-4">
						<div class="flex-shrink flex-grow-0 hidden xs:flex flex-col gap-4">
							<div class="flex flex-grow-0 p-4 bg-white rounded-xl">
								<div class="rounded-full p-1  bg-progress-bar-background">
									@svg('heroicon-c-check', 'h-5 w-5 text-progress-bar-foreground')
								</div>
							</div>
							<div class="flex-grow flex justify-center">
								<div class="w-1 rounded-full bg-progress-bar-foreground"></div>
							</div>
						</div>

						<div class="space-y-4 w-full @if ($i > 1) pt-[1.15rem] @endif">
							<p class="font-semibold text-black text-large">Module {{ $i }}</p>
							<div class="p-5 w-full rounded-xl bg-white flex items-center gap-2">
								@svg('heroicon-s-play-circle', 'h-5 w-5 text-gray-500 hidden xs:block') 
								<p class="font-semibold text-sm">Welcome to the class</p>
								<div class="rounded-full p-1 ml-auto bg-progress-bar-background">
									@svg('heroicon-c-check', 'h-4 w-4 text-progress-bar-foreground')
								</div>
								<p class="font-semibold text-sm text-gray-400">3:40</p>
								{{-- @svg('heroicon-s-check-circle', 'h-6 w-6 text-progress-bar-foreground') --}}
							</div>
							<div class="p-5 w-full rounded-xl bg-white flex items-center gap-2 opacity-50 select-none">
								@svg('heroicon-s-play-circle', 'h-5 w-5 text-gray-500 hidden xs:block') 
								<p class="font-semibold text-sm">Welcome to the class</p>
								<p class="font-semibold text-sm text-gray-400 ml-auto">3:40</p>
							</div>
						</div>
					</div>
					@endfor
				</div>
			</div>

			<div class="order-1 2xl:order-2 2xl:col-span-2">
				<video class="w-full rounded-xl" controls>
					<source src="{{ Vite::file('videos/example-course.mp4') }}"></source>
				</video>

				<div class="flex gap-3 mt-6">
					<button class="p-3 bg-light-background rounded-xl hover:brightness-95">
						@svg('heroicon-o-check-circle', 'h-6 w-6 text-gray-500')
					</button>
					<button class="p-3 bg-light-background rounded-xl hover:brightness-95">
						@svg('heroicon-o-forward', 'h-6 w-6 text-gray-500')
					</button>
					<button class="p-3 bg-light-background rounded-xl hover:brightness-95">
						@svg('heroicon-o-bookmark', 'h-6 w-6 text-gray-500')
					</button>
					
					<button class="ml-auto p-4 bg-primary-100 rounded-xl hover:brightness-95">
						@svg('heroicon-s-play', 'h-4 w-4 text-primary-500 rotate-180')
					</button>
					<button class="p-4 bg-primary-100 rounded-xl hover:brightness-95">
						@svg('heroicon-s-play', 'h-4 w-4 text-primary-500')
					</button>
				</div>

				<div class="py-6 border-b border-gray-200">
					<p class="text-gray-600 font-medium text-sm">Introduction • (1/4)</p>
					<h2 class="text-black text-xl lg:text-2xl font-semibold mt-1">An overview with 100 plus examples of guitar today!</h2>
					<p class="text-gray-600 font-normal text-sm mt-1.5">Acoustic Guitar Theory, Fingerpicking, Fretting, Chords: Most Important 25 Videos For Getting Started w/ Playing Guitar and other stuff!</p>
				</div>
				<div class="mt-6">
					<div class="tabs-container mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0 md:max-w-2xl lg:max-w-full 2xl:max-w-lg">
						<div role="tablist" class="flex gap-2">
							<button role="tab" id="tab-resources" aria-selected="true" aria-controls="panel-resources" class="text-black bg-light-background aria-selected:bg-primary-500 aria-selected:text-white font-medium text-large px-4 py-3 rounded-t-lg inline-block">Resources</button>
							<button role="tab" id="tab-chat" aria-selected="false" aria-controls="panel-chat" class="text-black bg-light-background aria-selected:bg-primary-500 aria-selected:text-white font-medium text-large px-4 py-3 rounded-t-lg inline-block">Chat Room</button>
						</div>
						<div class="rounded-b-lg rounded-r-lg overflow-hidden bg-light-background p-4">
							<div id="panel-resources" role="tabpanel" tabindex="0" aria-labelledby="tab-resources">
								<ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200 bg-white">
									@for($i = 0; $i < 3; $i++)
									<li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
										<div class="flex w-0 flex-1 items-center">
											@svg('heroicon-o-paper-clip', 'h-5 w-5 flex-shrink-0 text-gray-400')
											<div class="ml-4 flex min-w-0 flex-1 gap-2">
												<span class="truncate font-medium">file_{{$i}}.pdf</span>
												<span class="flex-shrink-0 text-gray-400">2.4mb</span>
											</div>
										</div>
										<div class="ml-4 flex-shrink-0">
											<a href="#" class="btn btn-outline">Download</a>
										</div>
									</li>
									@endfor
								</ul>
							</div>
							
							<div id="panel-chat" role="tabpanel" tabindex="0" aria-labelledby="tab-chat" class="hidden">
								Chat!
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot:main_content>
</x-dashboard.skeleton>
