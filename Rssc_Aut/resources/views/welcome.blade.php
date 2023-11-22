@extends('include.masterpage')

@section('title', 'Home page')

@section('content')
    

<!-- ----------------------------Content------------------------- -->

<div class="wrapper col3">
    <div id="intro">

        @foreach ($topic as $top)

      <ul>
        <li>
          <p class="imgholder"><img src="{{ asset('storage/' . $top->image) }}" alt="imgA" /></p>
          <h2>{{ $top->title }}<br><br></h2>
          <p>{{ $top->bio }}</p>
          <p class="readmore"><a href="/Project">Continue Reading &raquo;</a></p>
        </li>
      </ul>
      <br class="clear" />

      @endforeach

    </div>
  </div>
  <div class="wrapper col4">
    <div id="container">
      <div id="services">
        <ul>
          <li>
            <h2>Latest News</h2>
            <div class="imgholder"><img src="{{ asset('assets/img/News1.jpg') }}" width="240" height="135" alt="" /></div>
            <p>Aqaba: A history in photos initiative.<br><br><br><br><br></p>
            <p class="more"><a href="/News">Continue Reading &raquo;</a></p>
          </li>
          <li>
            <h2>Latest News</h2>
            <div class="imgholder"><img src="{{ asset('assets/img/News2.jpg') }}" width="240" height="135" alt="" /></div>
            <p>In continuation to the implementation of the phases of the Sahara Forest project in Jordan, procedures for signing a memorandum of understanding between Aqaba...</p>
            <p class="more"><a href="/News">Continue Reading &raquo;</a></p>
          </li>
          <li class="last">
            <h2>Latest News</h2>
            <div class="imgholder"><img src="{{ asset('assets/img/News3.jpg') }}" width="240" height="135" alt="" /></div>
            <p>Prof. Mohammad Sanad Abu Darwish, President of Aqaba University of Technology, received a delegation from the German Agency for International Cooperation.</p>
            <p class="more"><a href="/News">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div id="content">
        <h2>About RSSC - Red Sea Studies Center</h2>
        <p style="line-height: 26pt; text-align: justify;">The Red Sea region has a rich historical, cultural and natural heritage, where the continent of Asia meets Africa along its coasts extending from the Gulf of Aqaba in the north to Bab el-Mandab strait in the south. Various civilizations and nations met throughout the ages and times in that spot. The red sea region is rich in unique natural and human resources.
        </p>
  
        <p style="line-height: 26pt; text-align: justify;">Aqaba University of Technology is the first private university established in southern Jordan, and it has an ambitious vision to be distinguished, attractive and the preferred choice for students from Jordan and the region. The university is located just fifteen kilometers south of the city of Aqaba on the hills overlooking the Gulf of Aqaba and on a piece of land extending over 500 acres.</p>
  
        <p style="line-height: 26pt; text-align: justify;">The establishment of this center comes from the mission of Aqaba University of Technology (AUT) to be a beacon of science and culture in the region. The center aims to achieve leadership and excellence, to foster innovation and entrepreneurship, and to conduct research and studies in the fields of heritage, environment, water, renewable energy, natural products and smart solutions in the red sea region.</p>
  
        <p class="readmore"><a href="pages/AboutUS.html">Read More &raquo;</a></p>
      </div>
      <br class="clear" />
    </div>
  </div>
  
  <!-- ----------------------------Content------------------------- -->
  

@endsection
















