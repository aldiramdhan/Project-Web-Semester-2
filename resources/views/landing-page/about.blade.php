@include('landing-page.layouts.header')

<section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Tentang RentalBuku
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- <div class="carousel-item active"> -->
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="{{asset('images/logo.svg')}}" alt="">
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
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="{{asset('bookdreamy')}}/images/Logo-BookDreamy3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  BookDreamy
                </h5>
                <p>
                  <img src="{{asset('bookdreamy')}}/images/left-quote.png" alt="">
                  <span>
                  Aman, Praktis dan Efisien.
                  </span>
                  <img src="{{asset('bookdreamy')}}/images/right-quote.png" alt=""> <br>
                  Seiring dengan gaya hidup modern, kami hadir memberikan layanan yang terbaik untuk memudahkan anda dalam peminjaman buku, Telusuri dan temukan bacaan yang anda inginkan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>

@include('landing-page.layouts.footer')
