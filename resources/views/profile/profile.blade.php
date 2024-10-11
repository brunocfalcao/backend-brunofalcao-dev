<x-dashboard.skeleton>
	<x-slot:sticky_content>
		{{-- <input type="text" placeholder="Search" class="block lg:hidden outline-none border border-gray-300 ring-0 focus:ring-0 bg-white text-gray-600 rounded-full px-8 py-4 w-full text-left max-w-full">
		--}}

		<div class="mt-2 xl:pb-2 flex flex-col xl:flex-row gap-4 items-start xl:items-center">
			<div>
				<h2 class="text-2xl lg:text-3xl font-bold text-black">Profile</h2>
				<p class="text-gray-700 text-base mt-2">Your account and payment information</p>
			</div>

			<div class="xl:ml-auto flex-grow-0 bg-primary-100 rounded-xl p-3 flex gap-2">
				<a href="/profile" class="rounded-lg text-sm bg-primary-600 text-white px-6 xs:px-4 py-2.5">Account<span class="hidden xs:inline">&nbsp;Information<span></a>
				<a href="/billing" class="rounded-lg text-sm hover:bg-primary-600 hover:text-white text-gray-900 px-6 xs:px-4 py-2.5">Billing<span class="hidden xs:inline">&nbsp;Information<span></a>
			</div>
		</div>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="w-full rounded-2xl p-6 sm:p-10 bg-light-background">
				<form class="max-w-xl">
					<h2 class="text-lg font-semibold text-gray-900">Your Profile</h2>
					<div class="mt-2 grid xs:grid-cols-2 gap-4">
						<div class="xs:col-span-2">
							<label for="full-name" class="label">Full Name</label>
							<input type="text" name="full-name" id="full-name" autocomplete="off" placeholder="Tom Cook" class="input" required />
						</div>
						<div>
							<label for="email" class="label">Email</label>
							<input type="email" name="email" id="email" autocomplete="off" placeholder="tom.cook@example.com" class="input" required />
						</div>
						<div>
							<label for="phone" class="label">Phone number</label>
							<input type="text" name="phone" id="phone" autocomplete="off" placeholder="+1 123 123 123" class="input" required />
						</div>
					</div>
					<div class="flex items-center justify-between gap-4 mt-4">
						<button class="btn btn-outline !px-6">Cancel</button>
						<button class="btn btn-primary !px-8">Save</button>
					</div>
				</form>
		</div>  
	</x-slot:main_content>
</x-dashboard.skeleton>
