<div>
    <h1 class="mb-2 has-text-centered">Search the ERMC Drug
        Formulary,
        effective from
        <strong>March 1, 2022</strong>
        using generic or brand name.
    </h1>

        <div>
            <input wire:model.debounce.300ms="search" class="input is-primary is-rounded is-6" type="text"
                placeholder="Generic Name or Brand Name...">
        </div>

        <div wire:loading.class.dealy='op'>
            @forelse ($drugs as $drug)
                {{-- Check Availability --}}
                @if ($drug->availability == 1)
                    <div class="card my-3">
                        <header class="card-header">
                            <p class="card-header-title">{{ $drug->tradename }}</p>

                            <div class="has-text-right m-2">
                                <a href="/drug/{{ $drug->id }}"><button
                                        class="card-header-icon button is-info is-light is-rounded is-normal is-responsive">More
                                        Info</button></a>
                            </div>
                        </header>

                        <div class="card-content">
                            <div class="content">
                                <div class="columns is-mobile">

                                    <div class="column is-6">

                                        <div>
                                            <span class="icon-text">
                                                <span style="color: blue" class="material-symbols-outlined">
                                                    prescriptions
                                                </span>
                                                <span>
                                                    <strong>&nbsp{{ $drug->scientificname }}</strong>
                                                </span>
                                            </span>
                                        </div>

                                        <div class="mt-2">
                                            <span class="icon-text">
                                                <span style="color: red" class="material-symbols-outlined">
                                                    dns
                                                </span>
                                                <span>
                                                    <strong>&nbsp{{ $drug->subgroup }}</strong>
                                                </span>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="column is-6">

                                        <span class="icon-text">
                                            <span style="color: green" class="material-symbols-outlined">
                                                payments
                                            </span>
                                            <span>
                                                <strong>&nbsp{{ $drug->price }} EGP</strong>
                                            </span>
                                        </span>

                                        {{-- <div class="mt-2">
                                    <span class="icon-text">
                                        <span style="color: orange" class="material-symbols-outlined">
                                            history
                                        </span>
                                        <span>
                                            <strong>&nbsp{{ $drug->updated_at->format('d/m/Y') }}</strong>
                                        </span>
                                    </span>
                                </div> --}}

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @empty
                <div class="has-text-centered">
                    <div class="box my-3 p-6">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fa-solid fa-magnifying-glass fa-lg" style="color: hsl(348, 100%, 61%)"></i>
                            </span>
                            <strong class="has-text-danger is-size-5">No search results found</strong>
                        </span>
                        {{-- <strong class="has-text-danger is-size-4">No search results found</strong> --}}
                    </div>
                </div>
            @endforelse

            <div class="has-text-centered">
                {{ $drugs->links('pagination-links') }}
            </div>
        </div>



        <div class="mt-5 box is-rounded border">
            <span class="icon-text">
                <span style="color: blue" class="material-symbols-outlined">
                    prescriptions
                </span>
                <span>
                    <strong>&nbspScientific Name</strong>
                </span>
            </span>

            <span class="icon-text">
                <span style="color: green" class="material-symbols-outlined">
                    payments
                </span>
                <span>
                    <strong>&nbspPrice</strong>
                </span>
            </span>

            <span class="icon-text">
                <span style="color: red" class="material-symbols-outlined">
                    dns
                </span>
                <span>
                    <strong>&nbspDrug Group</strong>
                </span>
            </span>

        </div>

    

</div>
