<x-dashboard.skeleton>
	<x-slot:sticky_content>
		{{-- <input type="text" placeholder="Search" class="block lg:hidden outline-none border border-gray-300 ring-0 focus:ring-0 bg-white text-gray-600 rounded-full px-8 py-4 w-full text-left max-w-full">
		--}}

		<div class="pb-6 mt-2">
			<h2 class="text-2xl lg:text-3xl font-bold text-black">Profile</h2>
		    <p class="italic text-gray-700 text-base mt-2">Your account and payment information here!</p>
		</div>
	</x-slot:sticky_content>

	<x-slot:main_content>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form class="sm:px-4">
    <div class="space-y-12">
      <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
        <div>
          <h2 class="text-lg font-medium leading-7 text-gray-900">Profile</h2>
          <p class="mt-1 text-base leading-6 text-gray-600">Update your photo and personal details here.</p>
        </div>
  
        <div class="col-span-2"></div>

        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
        </div>

        <div class="col-span-2 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
          <div class="sm:col-span-4">
            <div class="">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-600 sm:max-w-md">
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">untitledui.com/</span>
                <input type="text" name="username" id="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="username" value="olivia">
              </div>
            </div>
          </div>
        </div>

        <div>
          <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Your Photo</label>
          <p class="mt-1 text-sm leading-6 text-gray-500">This will be displayed on your profile.</p>
        </div>

        <div class="col-span-2 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
          <div class="col-span-full">
            <div class="flex items-center gap-x-3">
              <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
              </svg>
              <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
            </div>
          </div>
        </div>

        <div>
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Your bio</label>
          <p class="mt-1 text-sm leading-6 text-gray-500">Write a short introduction.</p>
        </div>


        <div class="col-span-2 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
          <div class="sm:col-span-4">
            <div>
              <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-500">275 characters left.</p>
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
        </div>

        <div class="col-span-2 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
          <div class="sm:col-span-4">
            <div class="relative rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  @svg('heroicon-o-envelope', 'h-5 w-5 text-gray-400')
                </div>
              <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Save Changes</button>
    </div>
  </form>
  
  
	</x-slot:main_content>
</x-dashboard.skeleton>
