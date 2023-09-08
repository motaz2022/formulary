<div>
    <div class="text-end text-sm">
        @if ($drug->updated_at == '')
            <p style="color:red">Date Needed ??</p>
        @else
            <div>
                <span class="material-symbols-outlined relative top-1.5 left-0 text-blue-500"> history </span>
                Updated {{ $drug->updated_at->format('M d, Y') }}
            </div>
        @endif
    </div>
    <div
        class=" columns-auto mt-2 block p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $drug->brandName }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"><span
                class="material-symbols-outlined relative top-1.5 left-0 text-sky-500 mr-2">prescriptions</span>Generic
            Name: {{ $drug->genericName }}
        </p>
        <p class="font-normal text-gray-700 dark:text-gray-400"><span
                class="material-symbols-outlined relative top-1.5 left-0 text-green-600 mr-2">payments</span>Price:
            {{ $drug->price }}
            EGP</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"><span
                class="material-symbols-outlined relative top-1.5 left-0 text-yellow-500 mr-2">dns</span>Class:
            {{ $drug->subGroup }}
        </p>
    </div>
    <div class="my-4">
        <div id="accordion-color" data-accordion="collapse"
            data-active-classes="bg-blue-100 dark:bg-gray-800 dark:text-white">
            {{-- Check Side effects --}}
            @if ($drug->sideEffects == '')
            @else
                {{-- accordion 1 Side effects --}}
                <h2 id="accordion-color-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-1" aria-expanded="false"
                        aria-controls="accordion-color-body-1">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-yellow-500 mr-2">blur_circular</span>Side
                            Effects</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2  text-black dark:text-gray-400">{!! $drug->sideEffects !!}</p>
                    </div>
                </div>
                {{-- End accordion 1 Side effects --}}
            @endif
            {{-- Check Pregnancy --}}
            @if ($drug->pregnancy == '')
            @else
                {{-- accordion 2 Pregnancy --}}
                <h2 id="accordion-color-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                        aria-controls="accordion-color-body-2">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-violet-500 mr-2">pregnant_woman</span>Pregnancy</span></span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2  text-black dark:text-gray-400">{!! $drug->pregnancy !!}</p>
                    </div>
                </div>
                {{-- end accordion 2 Pregnancy --}}
            @endif
            {{-- Check Breastfeeding --}}
            @if ($drug->breastfeeding == '')
            @else
                {{--  accordion 3 Breastfeeding --}}
                <h2 id="accordion-color-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                        aria-controls="accordion-color-body-3">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-teal-500 mr-2">breastfeeding</span>Breastfeeding</span></span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2  text-black dark:text-gray-400">{!! $drug->breastfeeding !!}</p>
                    </div>
                </div>
            @endif
            {{-- end accordion 3 Breastfeeding  --}}

            {{-- Start accordion 4 Medication Safety Issues  --}}

            {{-- Medication Safety Issues --}}
            @if ($drug->msi == false)
            @else
                {{--  Medication Safety Issues --}}
                <h2 id="accordion-color-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                        aria-controls="accordion-color-body-4">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-red-500 mr-2">error</span>Medication
                            Safety Issues</span></span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>

                <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                    @if ($drug->hams == true)
                        <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-500 dark:text-red-400 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <b>High Alert Medications</b>
                                
                            </div>
                            <div class="mx-6">
                                <p class="mb-2   text-black dark:text-gray-400">The Institute for Safe Medication
                                    Practices (ISMP) includes this medication among its list of
                                    drugs which have a heightened risk of causing significant patient harm when used in error.</p>
                            </div>
                            


                        </div>
                    @endif

                    @if ($drug->soundLook == '')
                    @else
                        <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-blue-500 dark:text-blue-400 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <b>Sound-alike/look-alike issues:</b>
                            </div>

                            <div class="mx-6">
                                <p class="mb-2 text-black dark:text-gray-400">{!! $drug->soundLook !!}</p>
                            </div>
                            
                            



                        </div>
                    @endif

                    @if ($drug->highConc == true)
                        <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-yellow-400 dark:text-yellow-300 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <b>High Concentrated Electrolytes</b>
                                
                            </div>



                        </div>
                    @endif
                </div>



            @endif
            {{-- end Medication Safety Issues  --}}
            {{-- End accordion 4 Medication Safety Issues  --}}





            {{-- Check Storage Conditions --}}
            @if ($drug->storage == '')
            @else
                {{--  accordion 5 Storage Condition --}}
                <h2 id="accordion-color-heading-5">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                        aria-controls="accordion-color-body-5">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-sky-500 mr-2">ac_unit</span>Storage
                            Conditions</span></span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                    <div class="p-5 font-sans border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2  text-black dark:text-gray-400">{!! $drug->storage !!}</p>
                    </div>
                </div>
                {{-- end accordion 5 Storage Condition --}}
            @endif
            {{-- also this type accordion should be the last one if you want add another add from code above --}}
            {{-- Check Storage Conditions  --}}
            @if ($drug->reference == '')
                {{--  accordion 6 reference Condition --}}
                <h2 id="accordion-color-heading-6">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                        aria-controls="accordion-color-body-6">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-orange-500 mr-2">description</span>Reference</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                    <div class="p-5 font-sans border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2  text-black dark:text-gray-400">Drug leaflet</p>
                    </div>
                </div>
                {{-- end accordion 6 reference Condition --}}
            @else
                {{--  accordion 6 reference Condition --}}
                <h2 id="accordion-color-heading-6">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                        aria-controls="accordion-color-body-6">
                        <span><span
                                class="material-symbols-outlined relative top-1.5 left-0 text-orange-500 mr-2">description</span>Reference</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                    <div class="p-5 font-sans border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2  text-black dark:text-gray-400">{!! $drug->reference !!}</p>
                    </div>
                </div>
                {{-- end accordion 6 reference Condition --}}
            @endif
        </div>
    </div>
</div>
