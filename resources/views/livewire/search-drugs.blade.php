<div>
    <section class="section">
        <div class="container is-max-desktop">
            <h1 class="title has-text-centered">
                ERMC Formulary
            </h1>

            <div>
                <input wire:model.debounce.300ms="search" class="input is-primary is-rounded is-6" type="text"
                    placeholder="Brand Name or Generic Name">
            </div>

            @forelse ($drugs as $drug)
                <div class="card my-3">
                    <header class="card-header">
                        <p class="card-header-title">{{ $drug->tradename }}</p>

                        <div class="has-text-right m-2">
                            <a href="/drug/{{ $drug->id }}"><button
                                    class="card-header-icon button is-danger is-light is-rounded">Side
                                    Effects</button></a>
                        </div>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            <div class="columns is-mobile">

                                <div class="column is-6">
                                 
                                 <div>
                                    <span class="icon-text">
                                       <span style="color: blue" class="material-symbols-outlined">
                                          list_alt
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
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




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

            <div style="background-color: gainsboro" class="mt-5 box is-rounded">
               <span class="icon-text">
                  <span style="color: blue" class="material-symbols-outlined">
                     list_alt
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
    </section>
</div>
