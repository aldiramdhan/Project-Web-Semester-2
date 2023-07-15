@include('landing-page.layouts.header')

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            About
          </h2>
          <div class="client_container layout_padding-top">
            <div class="img-box">
              <img src="{{asset('images/logo.svg')}}" alt="" class="mx-5">
            </div>
            <div class="detail-box">
              <p>
                <img src="{{asset('bookdreamy')}}/images/left-quote.png" alt="">
                <span>
                Tersedia berbagai macam buku
                </span>
                <img src="{{asset('bookdreamy')}}/images/right-quote.png" alt=""> <br>
                RentalBuku adalah layanan perpustakaan untuk peminjaman buku, tersedia dengan berbagai macam buku berkualitas. Kami hadir untuk memudahkan anda mencari keperluan buku untuk dinikmati.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Book Bestsellers
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="fruit_container">
        <div class="box">
          <img src="{{asset('bookdreamy')}}/images/1buku.jpg" alt="">
          <div class="link_box">
            <h5>
              Great At Work 
            </h5>
            <a href="/login">
              Pinjam 
            </a>
            <a href="/login">
              Detail
            </a>
          </div>
        </div>
        <div class="box">
          <img src="{{asset('bookdreamy')}}/images/2buku.jpg" alt="">
          <div class="link_box">
            <h5>
              Detective Conan
            </h5>
            <a href="/login">
              Pinjam 
            </a>
            <a href="/login">
              Detail
            </a>
          </div>
        </div>
        <div class="box">
          <img src="{{asset('bookdreamy')}}/images/3buku.jpg" alt="">
          <div class="link_box">
            <h5>
              Marriage With Benefits
            </h5>
            <a href="/login">
              Pinjam
            </a>
            <a href="login">
              Detail
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('landing-page.layouts.footer')
