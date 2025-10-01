<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Dropdown Example -->
        <div class="mt-4">
            <x-input-label for="shopUuid" :value="__('Shop')" />

            <select id="shopUuid" name="shop_uuid" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" required>
                <option value="" disabled selected>{{ __('Select a Shop') }}</option>
                @foreach($shop_names as $shop)
                    <option value="{{ $shop['uuid'] }}" {{ old('shop_uuid') == $shop['uuid'] ? 'selected' : '' }}>
                        {{ $shop['name'].'-'.$shop['marka'] }}
                    </option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('shop_uuid')" class="mt-2" />
        </div>


        <!-- FirstName -->
        <div class="mt-4">
            <x-input-label for="firstname" :value="__('FisrtName')"/>
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- LastName -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('LastName')"/>
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus/>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Mobile -->
        <div class="mt-4">
            <x-input-label for="mobile" :value="__('Mobile')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="tel" name="mobile" :value="old('mobile')" required pattern="[5-9][0-9]{9}" title="Enter a valid 10-digit mobile number starting with 5-9"/>
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
