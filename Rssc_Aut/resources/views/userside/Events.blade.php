@extends('include.masterpage')

@section('title', 'Events page')

@section('content')


<!-- ----------------------------Content------------------------- -->

<div class="wrapper col3">
  <div id="breadcrumb">
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <div id="comments">
        <h2>Our Events</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><!--<img class="avatar" src="../img/demo/60x60.gif" width="60" height="60" alt="" /><span class="name"><a href="#">Activity 1:</span>--></div>
            <div class="submitdate"><!--<a href="#">Aug. 4, 2022 at 08:35 am</a>--></div>
            <p>Stay tuned for our upcoming events.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>


<!-- ----------------------------Content------------------------- -->



@endsection
