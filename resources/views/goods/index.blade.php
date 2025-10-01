<x-app-layout>
    <x-slot name="header">
        @include('goods.filters')
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-2 p-6 text-gray-900 dark:text-gray-100">
                    @if (count($products) > 0)
                        <!-- Table -->
                        <table class="min-w-full border border-gray-200 dark:border-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr class="divide-x divide-gray-200 dark:divide-gray-600">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">No.</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Account</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Products</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Carton</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">PCS</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Edit</th>

                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($products as $key => $product)
                                    <tr class="divide-x divide-gray-200 dark:divide-gray-700">
                                        <td class="px-6 py-4 whitespace-nowrap">{{$key}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <p class="font-bold">{{ $product['firstname'].' '.$product['lastname'].' - '.$product['marka']}}</p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ config('constants.acc_types')[$product['type']] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['product'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['ctn'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['pcs'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['rate'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['amount'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product['created'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center"><button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none"><i class="fas fa-pen-to-square"></i></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{-- {{ $accounts->links() }} --}}
                        </div>
                    @else
                        <p class="text-gray-500 dark:text-gray-400">No data found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@push('scripts')
<script>
    flatpickr("#start_date", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });

    flatpickr("#end_date", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>
@endpush
