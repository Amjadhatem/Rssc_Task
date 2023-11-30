@extends('include.masterpage')

@section('title', 'AboutUs page')

@section('content')

<!-- ----------------------------Content------------------------- -->

<section class="Breif_container">
  <div class="cd-content">
      <h1>About Us</h1>
      <hr>
      <div style="display: flex; justify-content: space-between; align-items: center;">
      <p>Aqaba University of Technology is the first private university established in southern Jordan, and it has an ambitious vision to be distinguished, attractive and the preferred choice for students from Jordan and the region. The university is located just fifteen kilometers south of the city of Aqaba on the hills overlooking the Gulf of Aqaba and on a piece of land extending over 500 acres.</p>
      <div  class="cd-image">
      <img src="{{ asset('assets/img/ABOUT_US_Banner.jpg') }}" alt="">
    </div>
    </div>
    </div>
    <p>The establishment of this center comes from the mission of Aqaba University of Technology (AUT) to be a beacon of science and culture in the region.</p>
    <p>The center also aims to exchange knowledge, expertise and culture at the local, regional and international level in several topics such as:</p>
     <br>
     <p>The center also aims to exchange knowledge, expertise and culture at the local, regional and international level in several topics such as:</p>
      <ul>
        <li>History and heritage of the Red Sea.</li>
        <li>Fostering Innovation and entrepreneurship in the Red Sea region.</li>
        <li>Contributing to sustainable development.</li>
        <li>Research related to bioactive natural products from the flora and fauna of the Red Sea.</li>
        <li>Research related to the fields of environment, natural resources, renewable energy and water in the Red Sea region.</li>
        <li>Developing initiatives in the field of sustainable development.</li>
        <li>Developing initiatives in the field of environmental protection.</li>
        <li>Developing initiatives in the field of Smart Solutions.</li>
      </ul>

      <div>
      <h1>Our Vision</h1>
      <hr>
      <div style="display: flex; justify-content: space-between; align-items: center;">
      <p>A leading distinguished center locally, regionally and internationally for supporting research and innovation in the red sea region to reserve heritage and to achieve sustainable development and to promote knowledge economy.</p>
      <div  class="cd-image">
        <img src="{{ asset('assets/img/Our Vision.gif') }}" alt="">
      </div>
      </div>
      </div>


      <div>
      <h1>Our Mission</h1>
      <hr>
      <div style="display: flex; justify-content: space-between; align-items: center;">
      <p>Introducing the capabilities of the Red Sea region, supporting research, innovation and entrepreneurship, linking researchers, establishing partnerships, conducting capacity building activities and supporting preservation of cultural and natural heritage initiatives, developing protection of environment initiatives, development of renewable energy, water natural and human resources in the Red Sea region.</p>
      <div  class="cd-image">
        <img src="{{ asset('assets/img/Our Mission.jpg') }}" alt="">
      </div>
      </div>
      </div>
   
  </section>

<!-- ----------------------------Content------------------------- -->

@endsection

