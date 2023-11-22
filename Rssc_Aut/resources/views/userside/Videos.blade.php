@extends('include.masterpage')

@section('title', 'Vedio page')

@section('content')


<!-- ----------------------------Content------------------------- -->


<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Gallery</a></li>
      <li>&#187;</li>
      <li><a href="#">Videos</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1>Videos</h1>
      <p><center>
        
        <video width="600" controls>
          <source src="../video/WelcomeJordan.mp4" type="video/mp4">
        </video>
        <br><br>
        <a href="https://www.youtube.com/watch?v=zC4t3fP1vhY" target="_blank">Welcome to Jordan</a>
      </center></p>
  </div>
    <div class="clear"></div>
  </div>
</div>


<!-- ----------------------------Content------------------------- -->


@endsection
