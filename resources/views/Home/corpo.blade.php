
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
          <h2 class="mb-2"><span class="px-4">Publicações recentes</span></h2>
          <span class="subheading">Nosso Blog</span>
        </div>
      </div>
      <div class="row d-flex">
        @for ($i = 0; $i < 3; $i++)
          @component('Blog.apoio.card')@endcomponent
        @endfor
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row no-gutters">
            <div class="col-md-6 ftco-animate">
              <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url(images/image_1.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
            <div class="col-md-6 ftco-animate">
              <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url(images/image_2.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
            <div class="col-md-6 ftco-animate">
              <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url(images/image_3.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
            <div class="col-md-6 ftco-animate">
              <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url(images/image_4.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>