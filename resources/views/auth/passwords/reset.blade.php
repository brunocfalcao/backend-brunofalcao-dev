@extends('backend::layouts.auth')

@section('content')
    <div class="w-full flex flex-row bg-gray-100">
        <div class="w-1/2 bg-white rounded-r-3xl flex justify-center items-center">

            <div class="w-3/6 flex flex-col mx-auto justify-center space-y-6">
                <div class="flex flex-col">
                    <h2 class="text-3xl font-medium text-[#263154]">{{ __('Reset Password') }}</h2>
                </div>

                @if (session('status'))
                    <div class="bg-green-100 text-black p-2" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" class="w-full" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="w-full flex flex-col mb-3 space-y-3">
                        <div class="w-full">
                            <input id="email" type="email"
                                   class="w-full p-4 @error('email') text-red-500 @enderror focus:outline-none focus-within:ring-0 ring-transparent border-transparent border-0 focus:ring-0 ring-0 rounded-md bg-gray-100"
                                   name="email"
                                   placeholder="Email Address"
                                   value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                            @error('email')
                            <div class="w-full mt-2 bg-red-100 text-red-500 p-2 font-medium text-sm rounded-md"
                                 role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input id="password" type="password"
                                   class="w-full p-4 @error('email') text-red-500 @enderror focus:outline-none focus-within:ring-0 ring-transparent border-transparent border-0 focus:ring-0 ring-0 rounded-md bg-gray-100"
                                   name="password"
                                   placeholder="{{ __('Password') }}"
                                   required>

                            @error('password')
                            <div class="w-full mt-2 bg-red-100 text-red-500 p-2 font-medium text-sm rounded-md"
                                 role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input id="password" type="password"
                                   class="w-full p-4 @error('email') text-red-500 @enderror focus:outline-none focus-within:ring-0 ring-transparent border-transparent border-0 focus:ring-0 ring-0 rounded-md bg-gray-100"
                                   name="password_confirmation"
                                   placeholder="{{ __('Confirm Password') }}"
                                   required>

                            @error('password_confirmation')
                            <div class="w-full mt-2 bg-red-100 text-red-500 p-2 font-medium text-sm rounded-md"
                                 role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col mb-0">
                        <div class="offset-md-4">
                            <button type="submit" class="w-full p-4 rounded-md bg-[#3D075A] text-white">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="flex flex-row">
                    <p class="text-gray-400">
                        Already have an account?
                        <a href="{{ route('eduka.dev.login') }}" class="underline text-gray-800">Log in</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="w-1/2 p-8 h-screen bg-gray-100">
            <div class="w-full h-full" style="background-image: url({{ Vite::image('login-bg-01.png') }})"></div>
        </div>
    </div>
@endsection
