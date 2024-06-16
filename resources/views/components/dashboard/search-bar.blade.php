@props([])
{{-- <input type="text" placeholder="Search" class="block lg:hidden outline-none border border-gray-300 ring-0 focus:ring-0 bg-white text-gray-600 rounded-full px-8 py-4 w-full text-left max-w-full"> --}}
<div class="block lg:hidden relative w-full max-w-full mb-4">
	@svg('heroicon-o-magnifying-glass', 'h-6 w-6 text-gray-500 absolute left-2.5 top-2.5')
	<input type="text" placeholder="Type to search..." class="outline-none ring-0 focus:ring-0 ring-primary-500 focus:border-primary-500 bg-white text-gray-700 rounded-full border-gray-300 border pr-4 pl-10 py-2.5 w-full text0base text-left max-w-full">
</div>	

<div class="w-full rounded-full p-2 bg-gray-100 flex items-center gap-4">
	<!-- TODO: add icon -->
	<div class="hidden lg:block relative w-full max-w-full">
		@svg('heroicon-o-magnifying-glass', 'h-6 w-6 text-gray-500 absolute left-2.5 top-2.5')
		<input type="text" placeholder="Type to search..." class="outline-none border-none ring-0 focus:ring-0 bg-white text-gray-700 rounded-full pr-4 pl-10 py-2.5 w-full text-left max-w-full">
	</div>	
	
	<div class="lg:ml-auto rounded-full inline-flex items-center justify-start space-x-1 p-2 bg-primary-100 flex-shrink-0">
		<div class="rounded-full text-sm bg-primary-500 text-white py-1.5 px-3">New feature</div>
		<span class="text-primary-500 font-medium italic text-sm py-1.5 px-3">70% off on all classes</span>
	</div>
	<!-- 
	<span class="text-gray-700 text-sm font-medium italic hidden lg:inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
	-->
</div>