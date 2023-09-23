<div>

    <section class="bg-white dark:bg-gray-900 m-0">

        <div class="py-4 px-4 mx-auto max-w-2xl">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">
                Medication Safety Issue Form</h2>
            @if ($formSubmitted)
                <div class="bg-green-200 text-green-800 p-2 rounded">
                    Progress
                </div>
                <flowbite-modal :show="{{ $showModal ? 'true' : 'false' }}">
                    <div class="bg-white p-4 shadow-lg rounded-lg">
                        <h3 class="text-xl font-semibold">Success</h3>
                        <p>{{ $successMessage }}</p>
                        <button wire:click='returnToHome'
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Home
                        </button>
                        <button wire:click='anotherContact'
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                            Another Report

                </flowbite-modal>
            @else
                <form wire:submit.prevent="submit">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                        <div class="w-full">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input wire:model='name' type="text" name="brand" id="brand"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="Name" required="">
                            @error('name')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="mobile"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile
                                Number</label>
                            <input wire:model='mobile' type="text" name="brand" id="brand"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="01xxxxxxxxx" required="">
                            @error('mobile')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">

                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input wire:model='email' type="email" id="email"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="name@name.com">
                            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll
                                never share your details.
                            </p>
                            @error('email')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="sm:col-span-2">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pharmacy</label>
                            <select wire:model='pharmacy' id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                                <option value="">Select</option>
                                <option value="Acute Pharmacy">Acute Pharmacy</option>
                                <option value="Chronic Pharmacy">Chronic Pharmacy</option>
                                <option value="Care Pharmacy - 4th Floor Pharmacy">Care Pharmacy - 4th Floor Pharmacy
                                </option>
                                <option value="Inpatient Pharmacy - 2nd Floor Pharmacy">Inpatient Pharmacy - 2nd Floor
                                    Pharmacy</option>
                                    <option value="Oncology Pharmacy">Oncology Pharmacy</option>
                                    
                                <option value="Emergency Pharmacy">Emergency Pharmacy</option>
                                <option value="Main Store Pharmacy">Main store pharmacy</option>
                                <option value="Any Other Pharmacy">Any other pharmacy</option>
                            </select>
                            @error('pharmacy')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medication Safety
                                Issues</label>
                            <select wire:model='medicationSafetyIssues' id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                                <option value="">Select</option>
                                <option value="High Alert Medications">High Alert Medications</option>
                                <option value="High Concentrated Electrolytes">High Concentrated Electrolytes</option>
                                <option value="Look alike">Look alike</option>
                                <option value="Sound alike">Sound alike</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('medicationSafetyIssues')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea wire:model='description' id="description" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="Your description here"></textarea>
                            @error('description')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                        Submit
                    </button>

                </form>
            @endif

        </div>
    </section>


</div>
