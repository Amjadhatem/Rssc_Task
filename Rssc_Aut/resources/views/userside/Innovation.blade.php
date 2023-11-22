@extends('include.masterpage')

@section('title', 'Innovation page')

@section('content')


<!-- ----------------------------Content------------------------- -->

<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Innovation & Entrepreneurship</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <div id="comments">
        <h2>Innovation & Entrepreneurship</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="{{ asset('assets/img/imgB.jpg') }}" alt="" /><span class="name"><a href="#">Fostering Innovation and entrepreneurship in the Red Sea region:</span></div>
            <div class="submitdate"><a href="#"></a></div>
            <p>
              <ul>
                <li>Pre-Incubation Support services (Business plan development).<br><br></li>
                <li>Prototype development.<br><br></li>
                <li>Mentorship services.<br><br></li>
                <li>Training and Education.<br><br></li>
                <li>Patent Registration support services.<br><br></li>
                <li>Networking and Events.<br><br></li> 
                <li>Co-working spaces.<br><br></li>
              </ul>
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>

<!-- ----------------------------Content------------------------- -->

@endsection
