<div>
        @if ($drug->updated_at == '')
            <p class="has-text-right" style="color:red">Date Needed ??</p>
        @else
            <div class="has-text-right mb-2">
                <small><span class="icon-text">
                        <span style="color: orange" class="material-symbols-outlined">
                            history
                        </span>
                    </span>
                    Updated {{ $drug->updated_at->format('M d, Y') }}
                </small>
            </div>
        @endif
    
    
        <div class="card">
    
            <header class="card-header">
                <p class="card-header-title">{{ $drug->brandName }}</p>
            </header>
    
            <div class="card-content">
    
                <div>
                    <span class="icon-text">
                        <span style="color: blue" class="material-symbols-outlined">
                            prescriptions
                        </span>
                        <span>
                            <strong>&nbsp{{ $drug->genericName }}</strong>
                        </span>
                    </span>
                </div>
    
                <div class="my-2">
                    <span class="icon-text">
                        <span style="color: green" class="material-symbols-outlined">
                            payments
                        </span>
                        <span>
                            <strong>&nbsp{{ $drug->price }} EGP</strong>
                        </span>
                    </span>
                </div>
    
                {{-- <div class="my-2">
                    <span class="icon-text">
                        <span style="color: red" class="material-symbols-outlined">blur_circular</span>
                        <span><strong>&nbspSide Effects</strong></span>
                        <div><span><p>{!! $drug->se !!}</p></span></div>
                    </span>
                </div> --}}
    
    
    
    
            </div>
    
    
        </div>
    
    
        {{-- Side Effects --}}
        @if ($drug->sideEffects == '')
        @else
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon-text">
                            <span style="color: red" class="material-symbols-outlined">blur_circular</span>
                            <span><strong>&nbspSide Effects</strong></span>
                        </span>
                    </p>
                    <button
                        class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                    </button>
                </header>
                <div class="card-content is-hidden">
                    {!! $drug->sideEffects !!}
                </div>
            </div>
        @endif
    
        {{-- Pregnancy     --}}
        @if ($drug->pregnancy == '')
        @else
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon-text">
                            <span style="color: purple" class="material-symbols-outlined">pregnant_woman</span>
                            <span><strong>&nbspPregnancy</strong></span>
                        </span>
                    </p>
                    <button
                        class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                    </button>
                </header>
                <div class="card-content is-hidden">
                    {!! $drug->pregnancy !!}
                </div>
            </div>
        @endif
    
        {{-- Breastfeeding --}}
        @if ($drug->breastfeeding == '')
        @else
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon-text">
                            <span style="color: #45b6fe" class="material-symbols-outlined">breastfeeding</span>
                            <span><strong>&nbspBreastfeeding</strong></span>
                        </span>
                    </p>
                    {{-- <button class="card-header-icon card-toggle" aria-label="more options"> --}}
                    <button
                        class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                    </button>
                </header>
                <div class="card-content is-hidden">
                    {!! $drug->breastfeeding !!}
                </div>
            </div>
        @endif
    
    
        {{-- Storage Conditions --}}
        @if ($drug->storage == '')
        @else
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon-text">
                            <span style="color: #E25822" class="material-symbols-outlined">ac_unit</span>
                            <span><strong>&nbspStorage Conditions</strong></span>
                        </span>
                    </p>
                    <button
                        class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                    </button>
                </header>
                <div class="card-content is-hidden">
                    {!! $drug->storage !!}
                </div>
            </div>
        @endif
    
        @if ($drug->reference == '')
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon-text">
                            <span style="color: orange" class="material-symbols-outlined">description</span>
                            <span><strong>&nbspReference</strong></span>
                        </span>
                    </p>
                    <button
                        class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                    </button>
                </header>
                <div class="card-content is-hidden">
                    Drug leaflet
                </div>
            @else
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon-text">
                                <span style="color: orange" class="material-symbols-outlined">description</span>
                                <span><strong>&nbspReference</strong></span>
                            </span>
                        </p>
                        <button
                            class="m-2 card-toggle button is-small is-warning is-light is-rounded border is-outlined">Show</button>
                        </button>
                    </header>
                    <div class="card-content is-hidden">
                        {!! $drug->reference !!}
                    </div>
                </div>
        @endif
    
    
    
    
    
    
        {{-- Icons Names Section --}}
    
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
        <div class="mb-5"></div>
    
    </div>
    
    
    
