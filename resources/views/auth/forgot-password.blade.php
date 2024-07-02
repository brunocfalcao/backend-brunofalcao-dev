<x-auth.skeleton>
	<x-slot:auth_content>
		<div class="text-center">
			<a href="/"><img class="h-10 w-auto mx-auto" src="{{ Vite::file('images/logo-dark.png') }}" alt="Mastering Nova"></a>
			<h2 class="mt-4 text-2xl font-bold leading-9 tracking-tight text-gray-900">Forgot Password</h2>
		</div>
	
		<div class="mt-6">
			<div>
				<form action="{{ route('password.update') }}" method="POST" class="space-y-8">
					@csrf
					<input type="hidden" name="token" value="{{ $token }}">

					<div>
						<label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
						<div class="mt-2">
							<!-- On error (optional): add class text-red-900 ring-red-300 placeholder:text-red-300 and remove ring-gray-300 placeholder:text-gray-400 -->
							<input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
							<!-- Clarification -->
							<p class="mt-2 text-sm text-gray-500" id="email-description">Enter the email associated with your account</p>  
							<!-- Error message -->
							<!-- <p class="mt-2 text-sm text-red-600">Not a valid email address.</p> -->
						</div>
					</div>

					<div>
						<button type="submit" class="flex w-full justify-center rounded-md bg-primary-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Send Reset Link</button>
					</div>
				</form>
			</div>
		</div>		  
	</x-slot:auth_content>
</x-auth.skeleton>
