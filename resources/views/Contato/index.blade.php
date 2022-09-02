@extends('components.corpo')

@section('corpo')

    <body>
        @component('components.topo')@endcomponent

        @component('components.bannerInterno', ['tituloBanner' => $tituloBanner])@endcomponent

        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3">Contato</h2>
                    </div>
                    <div class="w-100"></div>

                </div>
                <div class="row block-9">
                    <div class="col-lg-6 order-md-last d-flex">
                        <form action="#" class="bg-light p-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
