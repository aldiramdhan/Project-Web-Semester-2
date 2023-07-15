@include('landing-page.layouts.header')

<!-- shop section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Kategori
        </h2>
      </div>
    </div>
  

  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
          
          @foreach ($categories as $item)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a href="/login">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="bi fa-3x bi-book-half text-primary mb-4" style="font-size: 50px;"></i>
                        <h5 class="mb-3">
                          <a href="/motivasi">
                            {{ $item->name }}
                        </a>
                        </h5>
                    </div>
                </div>
              </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>
<!-- end shop section -->

@include('landing-page.layouts.footer')