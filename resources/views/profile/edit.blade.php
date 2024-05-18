<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-6 col-lg-8">
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="p-4 pl-0 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Language') }}
                    </h2>
                    <div class="p-3 flex items-center lg:flex-row lg:justify-center">
                        <a href="{{ route('setLocale', 'en') }}">
                            <img src="{{ asset('images/us-flag.png') }}" alt="{{ __('English') }}" class="btn img-fluid"
                                style="max-height: 65%;">
                        </a>
                        <a href="{{ route('setLocale', 'es') }}">
                            <img src="{{ asset('images/sp-flag.png') }}" alt="{{ __('Spanish') }}" class="btn img-fluid"
                                style="max-height: 65%;">
                        </a>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
