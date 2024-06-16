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
				<a href="/profile" class="rounded-lg text-sm hover:bg-primary-600 hover:text-white text-gray-900 px-6 xs:px-4 py-2.5">Account<span class="hidden xs:inline">&nbsp;Information<span></a>
				<a href="/billing" class="rounded-lg text-sm bg-primary-600 text-white  px-6 xs:px-4 py-2.5">Billing<span class="hidden xs:inline">&nbsp;Information<span></a>
			</div>
		</div>
	</x-slot:sticky_content>

	<x-slot:main_content>
		<div class="w-full rounded-2xl p-6 sm:p-10 bg-light-background">
			<div class="max-w-7xl mx-auto">
				<h2 class="font-bold text-lg">Purchase History</h2>
                
                <div class="inline-block min-w-full py-2 align-middle mt-6 w-full max-w-full">
                    <div class="overflow-auto shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg w-full max-w-full">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Invoice</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Amount</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                              <span class="sr-only">Edit</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                          <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Learn to Play Saxophone: Beginner  to Pro in Under 4 Hrs</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">USD $10.00</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Dec 1, 2022</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Paid</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                            </td>
                          </tr>
            
                          <!-- More people... -->
                        </tbody>
                      </table>
                    </div>
                  </div>
			</div>
		</div>  
	</x-slot:main_content>
</x-dashboard.skeleton>
