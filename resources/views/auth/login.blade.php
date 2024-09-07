@extends('layouts.app')

@section('content')
<div class=" tw-flex tw-items-center tw-justify-center tw-p-3">
    <div class="tw-bg-white tw-w-full tw-max-w-md tw-rounded-2xl tw-shadow-lg tw-overflow-hidden">
        <div class="tw-p-8">
            <h2 class="tw-text-3xl tw-font-bold tw-text-gray-800 tw-mb-6 tw-text-center">{{ __('Login') }}</h2>
            <form method="POST" action="{{ route('login') }}" class="tw-space-y-6">
                @csrf

                <div>
                    <label for="email" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700 tw-mb-1">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                           class="tw-w-full tw-px-4 tw-py-3 tw-rounded-lg tw-border tw-border-gray-300 tw-focus:ring-2 tw-focus:ring-blue-500 tw-focus:border-transparent @error('email') tw-border-red-500 @enderror">
                    @error('email')
                        <p class="tw-text-red-500 tw-text-xs tw-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700 tw-mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           class="tw-w-full tw-px-4 tw-py-3 tw-rounded-lg tw-border tw-border-gray-300 tw-focus:ring-2 tw-focus:ring-blue-500 tw-focus:border-transparent @error('password') tw-border-red-500 @enderror">
                    @error('password')
                        <p class="tw-text-red-500 tw-text-xs tw-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="tw-flex tw-items-center tw-justify-between">
                    <label class="tw-flex tw-items-center">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                               class="tw-rounded tw-border-gray-300 tw-text-blue-600 tw-shadow-sm tw-focus:border-blue-300 tw-focus:ring tw-focus:ring-blue-200 tw-focus:ring-opacity-50">
                        <span class="tw-ml-2 tw-text-sm tw-text-gray-600">{{ __('Remember Me') }}</span>
                    </label>
                </div>

                <div>
                    <button type="submit" class="tw-w-full tw-bg-blue-600 tw-text-white tw-py-3 tw-rounded-lg tw-font-semibold tw-transition tw-duration-300 tw-ease-in-out tw-hover:bg-blue-700 tw-focus:outline-none tw-focus:ring-2 tw-focus:ring-blue-500 tw-focus:ring-opacity-50">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
        <div class="tw-bg-gray-50 tw-py-4 tw-text-center">
            <p class="tw-text-sm tw-text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="tw-font-semibold tw-text-blue-600 tw-hover:text-blue-800">Sign up</a></p>
        </div>
    </div>
</div>
@endsection
