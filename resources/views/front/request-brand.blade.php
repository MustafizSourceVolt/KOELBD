@extends('layouts.front')
@section('content')


    <!-- Starting of product category area -->
    <div class="section-padding product-category-wrap">
        <div class="container">
            <div class="row">
                <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-lg-12"style="background-color: #004b802e; border-radius:15px;">
                <div class="section-title text-center"style="padding:15px;">
                    <h2>Request for Special Brand</h2>
                </div>
            </div>
                <div class="col-lg-12 col-md-12 col-sm-12"style="background-color: #004b802e; border-radius:15px;margin-top:10px;">
                    <div class="comments-area">
                    @include('includes.form-success')
                    @include('includes.form-error')
                    <div class="comments-form">
                        <form action="{{route('admin-wanted-brand-submit')}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" placeholder="your name" required="" type="text">
                                </div>
                                <div class="col-md-6">
                                    <input name="mobile" placeholder="your mobile" type="tel">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="email" placeholder="your email" required="" type="email">
                                </div>
                                <div class="col-md-6">
                                    <input name="brand_name" placeholder="your required brand" required="" type="text">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-8">
                                   <input name="category" placeholder="product name" type="text">
                                </div>
                            </div>
                                <p>
                                    <textarea name="text" id="comment" placeholder="please let us know what is your query" cols="30" rows="10" style="resize: vertical;" required=""></textarea>
                                </p>
                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                       <input  name="contact_btn" value="{{$lang->sm}}" type="submit">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
    </div>
                
            </div>
        </div>
    </div>
    <!-- Ending of product category area -->
@endsection

@section('scripts')

<!--

<script type="text/javascript">
            $("#ex2").slider({});
        $("#ex2").on("slide", function(slideRange) {
            var totals = slideRange.value;
            var value = totals.toString().split(',');
            $("#price-min").val(value[0]);
            $("#price-max").val(value[1]);
        });
</script>
-->

@endsection