@extends('userheader')
@section('user')
<section id="screenshots" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>our Gallery</h2>
      <p class="separator">our turf courts</p>
    </div>
  </div>
 
  <div class="container">
 
    <div class="owl-carousel owl-theme">
    @foreach($result as $value)
      <div><img src="/image/{{$value->file}}" alt="" width="150px" height="450px"></div>
      @endforeach
      <!-- <div><img src="{{$value->file}}" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf7.jpg" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf9.jpg" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf11.jpg" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf12.jpg" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf13.jpg" alt="" width="150px" height="450px"></div>
      <div><img src="img/turf14.jpg" alt="" width="150px" height="450px"></div> -->
    </div>
  
  </div>
  
</section>
@endsection
