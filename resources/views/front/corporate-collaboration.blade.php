@extends('layouts.front')

@section('styles')


@endsection

@section('content')

    <!-- Starting of Section title overlay area -->
    <!--<div class="title-overlay-wrap overlay" style="background-image: url({{asset('assets/images/corporate-collaboration.png')}});">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Corporate Sells</h1>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Ending of Section title overlay area -->


    <!-- Starting of contact us area -->
    <div class="section-padding contact-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($cor_collab as $cor_data)
                    <div>
                        <!--<h3>{{$cor_data->title}}</h3>
                        <hr>-->
                        <div class="single-image-blog-box" style="border-radius:10px;">
                            <img src="{{asset('assets/images/corporate-sells.jpeg')}}">
                        </div>
                        
                        <br><br>
                        <div style="border:1px solid #03649c; padding:10px; border-radius:8px; font-family: 'Oxygen', sans-serif;font-size: 17px;">
                            <h4 style="text-align:center; font-size:25px; color:#03649c; padding-top: 10px;">Corporate Sales</h4>
                            {!! $cor_data->text !!}
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--<div class="col-md-7 col-sm-7">
                    404
                </div>-->
            </div>
             <hr>
        </div>
    </div>
    <!-- Ending of contact us area -->

@endsection


@section('scripts')
    <script>
        $('.refresh_code').click(function () {
            $.get('{{url('contact/refresh_code')}}', function(data, status){
                $('#codeimg').attr("src","{{url('assets/images')}}/capcha_code.png?time="+ Math.random());
            });
        })
    </script>
@stop