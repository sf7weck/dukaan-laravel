<!-- Filters -->
<form method="GET" action="{{ route('accounts.index') }}" class="mt-4 flex flex-wrap items-center gap-4">
    <!-- Start Date -->
    <div class="relative">
        <x-input-label for="start_date" :value="__('Start Date')" />
        <x-text-input id="start_date"
                    type="text"
                    name="start_date"
                    value="{{ request('start_date') }}"
                    class="block mt-1 w-full pl-10"
                    placeholder="Select start date" />

        <!-- Calendar Icon -->
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pt-6">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 
                    00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </span>
    </div>

    <!-- End Date -->
    <div class="relative">
        <x-input-label for="end_date" :value="__('End Date')" />
        <x-text-input id="end_date"
                    type="text"
                    name="end_date"
                    value="{{ request('end_date') }}"
                    class="block mt-1 w-full pl-10"
                    placeholder="Select end date" />

        <!-- Calendar Icon -->
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pt-6">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 
                    00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </span>
    </div>


    <!-- Shop -->
    <div>
        <x-input-label for="shop" :value="__('Shop')" />
        <select id="shop" name="shop" class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
            <option value="">All Shops</option>
            {{-- @foreach($shops as $shop)  // need to add redis to list all shops for current account
                <option value="{{ $shop->uuid }}" {{ request('shop') == $shop->uuid ? 'selected' : '' }}>
                    {{ $shop->name }}
                </option>
            @endforeach --}}
        </select>
    </div>

    <!-- Type -->
    <div>
        <x-input-label for="type" :value="__('Type')" />
        <select id="type" name="type" class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
            <option value="">Account Types</option>
            <option value="1" {{ request('type') == '1' ? 'selected' : '' }}>In</option>
            <option value="2" {{ request('type') == '2' ? 'selected' : '' }}>Out</option>
        </select>
    </div>

    <!-- Mobile -->
    <div>
        <x-input-label for="mobile" :value="__('Mobile')" />
        <x-text-input id="mobile" type="text" name="mobile" value="{{ request('mobile') }}" class="block mt-1 w-full" />
    </div>

    <!-- Submit -->
    <div class="mt-6">
        <x-primary-button>{{ __('Filter') }}</x-primary-button>
        <x-primary-button  href="{{ route('accounts.index') }}" >{{ __('Reset') }}</x-primary-button>
        <x-primary-button>{{ __('Add') }}</x-primary-button>
    </div>
</form>