@extends('components.corpo')
@section('corpo')

<body>
    @component('components.topo')@endcomponent

    @component('components.bannerInterno', ['tituloBanner' => $tituloBanner])@endcomponent

    <section class="ftco-counter" id="section-counter" style="margin: 0 0 10% 0;">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 order-last d-flex flex-column align-items-stretch">
            <div class="img d-flex align-self-stretch align-items-center justify-content-center"
              style="background-image:url(images/xabout.jpg.pagespeed.ic.MERjBUcTIC.jpg)">
              <div class="desc">
                <h3><a href="#" class="p-2">Sunday Services</a></h3>
              </div>
            </div>
            <div class="img d-flex align-self-stretch align-items-center justify-content-center"
              style="background-image:url(images/xabout-2.jpg.pagespeed.ic.ishVIOyJc7.jpg)">
              <div class="desc">
                <h3><a href="#" class="p-2">Announcement</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-5 py-5">
            <div class="row justify-content-start pt-3 pb-3">
              <div class="col-md-12 heading-section heading-section-no-line ftco-animate">
                <h2 class="mb-4">About Spring Church</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-bible"></span>
                    </div>
                    <strong class="number" data-number="70000">0</strong>
                    <span>Members</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-bible"></span>
                    </div>
                    <strong class="number" data-number="1000">0</strong>
                    <span>Pastors</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-bible"></span>
                    </div>
                    <strong class="number" data-number="100000">0</strong>
                    <span>Donation</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-bible"></span>
                    </div>
                    <strong class="number" data-number="100">0</strong>
                    <span>Churches</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
@endsection