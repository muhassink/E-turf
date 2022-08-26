@extends('user.useruserheader')
@section('useruser')
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

    </div>
  
  </div>
  
</section>
@endsection
