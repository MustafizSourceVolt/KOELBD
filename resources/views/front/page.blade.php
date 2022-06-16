@extends('layouts.front')
@section('content')

    <!-- Starting of Section title overlay area -->
    <div class="title-overlay-wrap overlay" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>{{strtoupper($page->title)}}</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Ending of Section title overlay area -->

      <div class="section-padding">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12"  dir="{{$lang->rtl == 1 ? 'rtl':''}}">
                           <h3>{!! $page->title !!}</h3> <hr>
                            <div>{!! $page->text !!}</div>
                       </div>
                   </div>
               </div>
           </div>

@endsection