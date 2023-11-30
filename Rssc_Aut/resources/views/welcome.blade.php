@extends('include.masterpage')

@section('title', 'Home page')

@section('content')

  <!--------------------------------- Cards Section --------------------------------->
   
  <section class="card_section">
  <h1 style="text-align: center; font-size: 2.5rem; color: #1B1F34;">Info</h1>
  <hr style="width: 10rem;">

  <div class="cards-container">
    @foreach ($topic as $top)
      <div class="card">
        <img src="{{ asset('storage/' . $top->image) }}" alt="Card Image">
        <h3>{{ $top->title }}</h3>
        <p>{{ $top->bio }}</p>
        <a href="/Project" class="btn">Continue Reading</a>
        <i class="fa-solid fa-arrow-right" id="font_awes" style="color: #e3e3e3;"></i>
      </div>
    @endforeach
  </div>
</section>

  <!--------------------------------- Cards Section --------------------------------->
  
  
  <!--------------------------------- Interval Section --------------------------------->
  
  <section class="Interval_cont">
  <div style="background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url({{ asset('assets/img/RedSea3.jpg') }}); background-size: cover; background-position: center;" class="Interval_Section">
  
  </div>
  </section>
  
  <!--------------------------------- Interval Section --------------------------------->
  
  
  <!--------------------------------- Second Set of Cards --------------------------------->
  
  <section> 
  <h1 style="text-align: center; font-size: 3rem; color: #1B1F34;" >Last News</h1>
  <hr style="width: 10rem;">
  <div class="cards-container2">

    @foreach ($news as $nw)
  <div class="card2">
     <img src="{{ asset('storage/' . $nw->image) }}" alt="Card 1 Image">
     <h3>{{ $nw->title }}</h3>
     <p>{{ $nw->bio }}</p>
     <a href="/News" class="btn">Continue Reading</a>
  </div>
  @endforeach

  </div>
  
  <!--------------------------------- Second Set of Cards --------------------------------->
  
  <hr>
  <!--------------------------------- About Section --------------------------------->
  
  <section class="About_Sec">
  
  <h1 style="text-align: center; font-size: 2.5rem; color: #1B1F34; padding-top: 2rem;" >About RSSC - Red Sea Studies Center</h1>
  
  <div class="about-section">
  <p>The Red Sea region has a rich historical, cultural and natural heritage, where the continent of Asia meets Africa along its coasts extending from the Gulf of Aqaba in the north to Bab el-Mandab strait in the south. Various civilizations and nations met throughout the ages and times in that spot. The red sea region is rich in unique natural and human resources.</p>
  <br>
  <p>Aqaba University of Technology is the first private university established in southern Jordan, and it has an ambitious vision to be distinguished, attractive and the preferred choice for students from Jordan and the region. The university is located just fifteen kilometers south of the city of Aqaba on the hills overlooking the Gulf of Aqaba and on a piece of land extending over 500 acres.</p>
  <br>
  <p>The establishment of this center comes from the mission of Aqaba University of Technology (AUT) to be a beacon of science and culture in the region. The center aims to achieve leadership and excellence, to foster innovation and entrepreneurship, and to conduct research and studies in the fields of heritage, environment, water, renewable energy, natural products and smart solutions in the red sea region.</p>
  
  <a href="/AboutUS" class="btn">Read More</a>
  
  </div>
  
  </section>
  
  <!--------------------------------- About Section --------------------------------->

@endsection

  