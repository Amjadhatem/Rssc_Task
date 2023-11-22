@extends('include.masterpage')

@section('title', 'News page')

@section('content')


<!-- ----------------------------Content------------------------- -->


<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Latest News</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <div id="comments">
        <h2>Latest News</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../img/News1.jpg" alt="" /><span class="name"><a href="#">Aqaba: A history in photos initiative</span></div>
            <div class="submitdate"><a href="#">2021-11-29 at 11:26 am</a></div>
            <p>Aqaba: A history in photos initiative<br><br><br><br></p>
            <p class="readmore"><a href="https://alghad.com/%D8%A5%D8%B7%D9%84%D8%A7%D9%82-%D9%85%D8%A8%D8%A7%D8%AF%D8%B1%D8%A9-%D8%A7%D9%84%D8%B9%D9%82%D8%A8%D8%A9-%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE-%D9%81%D9%8A-%D8%B5%D9%88%D8%B1/">Read More &raquo;</a></p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="../img/News2.jpg" alt="" /><span class="name"><a href="#">Memorandum of Understanding between Aqaba University of Technology and Al Hussein Technical University with the Sahara Forest Project</span></div>
            <div class="submitdate"><a href="#"></a></div>
            <p style="line-height: 26pt; text-align: justify;">In continuation to the implementation of the phases of the Sahara Forest project in Jordan, procedures for signing a memorandum of understanding between Aqaba University of Technology, Al Hussein Technical University and the Sahara Forest project have been completed with the aim of implementing training programs to improve the skills of its participants in various fields, the most important of which are food security and agricultural technology, in addition to building Capacity in line with Jordan's priorities in water, energy, and climate change.<br><br></p>
            <p class="readmore"><a href="http://www.aut.edu.jo/en/news/85694d63-8115-11ec-9e70-ecb1d7734703">Read More &raquo;</a></p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../img/News3.jpg" alt="" /><span class="name"><a href="#">Prof. Mohammad Sanad Abu Darwish, President of Aqaba University of Technology, received a delegation from the German Agency for International Cooperation</span></div>
            <div class="submitdate"><a href="#"></a></div>
            <p style="line-height: 26pt; text-align: justify;">This is an example of a activity made on a post. You can either edit the activity, delete the activity or reply to the activity. Use this as a place to respond to the post or to share what you are thinking.</p>
            <p class="readmore"><a href="http://www.aut.edu.jo/en/news/506a5af0-4dc7-11ec-9aae-ecb1d7734703">Read More &raquo;</a></p>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>

<!-- ----------------------------Content------------------------- -->



@endsection
