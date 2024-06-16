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
			<div class="grid xl:grid-cols-5 gap-4 max-w-7xl mx-auto">
				<div class="xl:col-span-2">
					<div class="mx-auto max-w-sm flex items-center flex-col">
						<img src="{{Vite::asset('resources/images/guitar.jpg')}}" class="w-full max-w-48 rounded-full object-cover aspect-square">
						<h2 class="text-3xl mt-6 font-bold">Khusan Akhmedov</h2> 
						<p class="text-gray-500 text-xl mt-1 text-center font-medium">Web Designer</p>
						{{--<button class="btn btn-primary mt-8 !px-8 !py-2.5 !font-normal mx-auto">Upload new avatar</button>--}}

						<p class="text-gray-500 text-xl mt-8 text-center font-medium">Uzbekistan, Tashkent</p>
						<p class="text-gray-500 text-large mt-3 text-center">I’m a web designer, I work in programs like Figma, Adobe Photoshop, Adobe Illustrator</p>
					</div>
				</div>
				<div class="xl:col-span-3">
					<form class="mx-auto max-w-xl">
						<div class="pt-8 grid xs:grid-cols-2 gap-4">
							<div class="xs:col-span-2">
								<label for="full-name" class="label">Full Name</label>
								<input type="text" name="full-name" id="full-name" autocomplete="off" placeholder="Tom Cook" class="input" required />
							</div>
							<div>
								<label for="email" class="label">Email</label>
								<input type="email" name="email" id="email" autocomplete="off" placeholder="tom.cook@example.com" class="input" required />
							</div>
							<div>
								<label for="password" class="label">Password</label>
								<input type="password" name="password" id="password" autocomplete="off" placeholder="********" class="input" required />
							</div>
							
							<div class="xs:col-span-2">
								<label for="about" class="label">About me</label>
								<textarea name="about" id="about" autocomplete="off" class="input" placeholder="Let me cook" rows="5" required></textarea>
							</div>
						</div>
						<div class="flex items-center justify-between gap-4 mt-4">
							<button class="btn btn-outline !px-6">Cancel</button>
							<button class="btn btn-primary !px-8">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>  
	</x-slot:main_content>
</x-dashboard.skeleton>
