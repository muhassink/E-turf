@extends('user.useruserheader')
@section('useruser')
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>we provide </h2>
      <p class="separator">comfortness is our first priority</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <img src="/img/svg/football.png" alt="img" class="img-fluid">
          <h4>available court</h4>
          <table>
            <tr>
              <li style="padding: 50px;">football</li>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <img src="/img/svg/amenity.png" alt="img" class="img-fluid">
          <h4>amenities</h4>
          <table>
            <tr>
              <div>
                <li>parking</li>
                <li>drinking water</li>
              </div>
              <div>
                <li>restroom</li>
                <li>refreshments</li>
              </div>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <img src="/img/svg/firstaid.png" alt="img" class="img-fluid">
          <h4>first aid</h4>
          <table>
            <tr>
              <li>
                we have good firstaid care
              </li>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <section id="video" class="text-center wow fadeInUp">
    <div class="overlay">
      <div class="container-fluid container-full">
        <div class="row">
          <a href="" class="js-modal-btn play-btn" data-video-id="video"></a>
        </div>
      </div>
    </div>
  </section>
  @endsection