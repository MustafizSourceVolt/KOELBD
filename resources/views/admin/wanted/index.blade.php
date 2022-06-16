@extends('layouts.admin')

@section('content')

<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard data-table area -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="add-product-box">
                                    <div class="product__header">
                                        <div class="row reorder-xs">
                                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                <div class="product-header-title">
                                                    <h2>Wanted Brands Request List</h2>
                                                    <p>Dashboard <i class="fa fa-angle-right" style="margin: 0 2px;"></i> Wanted Brands Request List</p>
                                                </div>
                                            </div>
                                              @include('includes.notification')
                                        </div>   
                                    </div>
                  <div>
                                
<div class="row">
  <div class="col-sm-12">
                                    <div class="table-responsive">
                                      <table id="product-table_wrapper" class="table table-striped table-hover products dt-responsive" cellspacing="0" width="100%">
                                              <thead>
                                                  <tr>
                                                    <th style="width: 130px;">Name</th>
                                                    <th style="width: 100px;">Mobile</th>
                                                    <th style="width: 174px;">Email</th>
                                                    <th style="width: 75px;">Remark</th>
                                                    <th style="width: 150px;">Actions</th></tr>
                                              </thead>

                                              <tbody>
                                            @foreach($wanted as $blog)                                                
                                              <tr role="row" class="odd">
                                                    <td>{{$blog->name}}</td>
                                                    <td>{{$blog->mobile}}</td>
                                                    <td>{{$blog->email}}</td>
                                                    <td>{{$blog->remark}}</td>
                                                      <td>
                                                        <a href="{{route('admin-wanted-view',$blog->id)}}" class="btn btn-primary product-btn"><i class="fa fa-print"></i> View</a>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                                  </tbody>
                                          </table></div></div>
                                        </div>
                                        </div>
                    </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard data-table area -->
                </div>
            </div>
        </div>
    
@endsection

@section('scripts')

@endsection