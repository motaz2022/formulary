<div>
    <section class="section">
        <div class="container is-max-desktop">

            <div class="has-text-right mb-2">
                <p><span class="icon-text">
                        <span style="color: orange" class="material-symbols-outlined">
                            history
                        </span>
                    </span>
                    <strong>Updated {{ $drug->updated_at }}</strong>
                </p>
            </div>

            <div class="card">

                <header class="card-header">
                    <p class="card-header-title">{{ $drug->tradename }}</p>
                </header>

                <div class="card-content">

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

                    <div class="my-2">
                      <span class="icon-text">
                          <span style="color: red" class="material-symbols-outlined">blur_circular</span>
                          <span><strong>&nbspSide Effects</strong></span>
                          <span><p>&nbsp{{ $drug->se }}</p></span>
                      </span>
                  </div>


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



    </section>
</div>
