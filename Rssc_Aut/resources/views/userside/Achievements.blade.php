@extends('include.masterpage')

@section('title', 'Achevements page')

@section('content')

<!-- ----------------------------Content------------------------- -->

<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Achievements</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <div id="comments">
        <h2>Achievements</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="{{ asset('assets/img/imgC.jpg') }}" alt="" /><span class="name"><a href="#">MAIA-TAQA Project</span></div>
            <div class="submitdate"><a href="#"></a></div>
            <p style="line-height: 26pt; text-align: justify;">Despite the fact that in the Southern Mediterranean countries there is a growing need for resource efficiency (RE) services (consulting, engineering and operations) to deal with the pressure on the environment, the RE supply persists at low levels. This is essentially due to the lack of a proper innovation process that would be able to identify the needs, structure the creative solutions and commercialise them. MAIA-TAQA will deal with these issues by setting up demonstrators in 3 Mediterranean pilot areas where innovative services will be applied: 
              <br>
              they will be related to micro-grids, photovoltaics, energy storage, solar thermal technologies and water sanitation and purification. 
              <br><br>
            Partners will develop solutions for each identified barrier: 
              <br>
            capacity building programme (for lack of skills); innovation desk (for lack of information); guidelines (for lack of regulation); voucher (for lack of finance) and targeted B2B events (for lack of specific matchmaking). The main final beneficiaries are SMEs (especially from environment/utility/building sector) that can have a set of supporting instruments to overcome the existing barriers and reduce the risks to innovation.

            <p class="readmore"><a href="https://www.enicbcmed.eu/projects/maia-taqa">Project Website &raquo;</a></p>

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
