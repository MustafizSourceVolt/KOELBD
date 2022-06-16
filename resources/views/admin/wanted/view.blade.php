@extends('layouts.admin')

@section('styles')
<style type="text/css">
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border-top: none;
}
.add-product-box {
    box-shadow: none;
}
.add-product-1
{
    padding-bottom: 30px;
}
</style>
@endsection
        
@section('content')
<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard area -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="add-product-box">
                                    <div class="product__header"  style="border-bottom: none;">
                                        <div class="row reorder-xs">
                                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                <div class="product-header-title">
                                                    <h2>View Details <a href="{{ route('admin-wanted-brand') }}" style="padding: 5px 12px;" class="btn add-back-btn"><i class="fa fa-arrow-left"></i> Back</a></h2>
                                                    <p>Dashboard <i class="fa fa-angle-right" style="margin: 0 2px;"></i> View <i class="fa fa-angle-right" style="margin: 0 2px;"></i> Vendor Details
                                                </div>
                                            </div>
                                              @include('includes.notification')
                                        </div>   
                                    </div>
                                        <hr>
                                          @include('includes.form-error')
                                          @include('includes.form-success')
                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Name</strong></td>
                                <td>{{$wanted->name}}</td>
                            </tr>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Mobile:</strong></td>
                                <td>{{$wanted->mobile}}</td>
                            </tr>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Email:</strong></td>
                                <td>{{$wanted->email}}</td>
                            </tr>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Brand:</strong></td>
                                <td>{{$wanted->brand_name}}</td>
                            </tr>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Category:</strong></td>
                                <td>{{$wanted->category}}</td>
                            </tr>
                            <tr>
                                <td width="49%" style="text-align: right;"><strong>Remark:</strong></td>
                                <td>{{$wanted->remark}}</td>
                            </tr>
                            
                            </tbody>
                        </table>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard area --> 
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')

@endsection

