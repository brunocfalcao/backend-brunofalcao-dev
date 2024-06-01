<x-auth.skeleton>
	<x-slot:auth_content>
		<div class="text-center">
			<a href="/"><img class="h-10 w-auto mx-auto" src="{{ Vite::asset('resources/images/logo-dark.png') }}" alt="Mastering Nova"></a>
			<h2 class="mt-4 text-2xl font-bold leading-9 tracking-tight text-gray-900">Reset Password</h2>
		</div>
	
		<div class="mt-6">
			<div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
					<div>
						<label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
						<div class="mt-2">
							<!-- On error (optional): add class text-red-900 ring-red-300 placeholder:text-red-300 and remove ring-gray-300 placeholder:text-gray-400 -->
							<input id="name" value="{{ $name ?? old('name') }}" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							@error('name')
							<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
							@enderror
						</div>
					</div>
	
					<div class="mt-6">
						<label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
						<div class="mt-2">
							<!-- On error (optional): add class text-red-900 ring-red-300 placeholder:text-red-300 and remove ring-gray-300 placeholder:text-gray-400 -->
							@isset($email)
							<input disabled id="email" value="{{ $email ?? old('email') }}" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<p class="mt-2 text-xs font-bold text-primary-600">Field is disabled. Just for your confirmation</p>
							@else
							<input id="email" value="{{ $email ?? old('email') }}" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							@endisset
							<!-- Error message -->
							@error('email')
							<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
							@enderror
						</div>
					</div>
		
					<div class="mt-6">
						<label for="password" class="block text-sm font-medium leading-6 text-gray-900">New Password</label>
						<div class="mt-2">
							<!-- On error (optional): add class text-red-900 ring-red-300 placeholder:text-red-300 and remove ring-gray-300 placeholder:text-gray-400 -->
							<input id="password" name="password" type="password" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							@error('password')
							<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
							@enderror
						</div>
					</div>
		
					<div class="mt-6">
						<label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
						<div class="mt-2">
							<!-- On error (optional): add class text-red-900 ring-red-300 placeholder:text-red-300 and remove ring-gray-300 placeholder:text-gray-400 -->
							<input id="password_confirmation" name="password_confirmation" type="password" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<!-- Error message -->
							@error('password_confirmation')
							<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
							@enderror
						</div>
					</div>
		
					<div class="mt-8">
						<button type="submit" class="flex w-full justify-center rounded-md bg-primary-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Set Password</button>
					</div>
				</form>
			</div>
		</div>	  
	</x-slot:auth_content>
</x-auth.skeleton>
