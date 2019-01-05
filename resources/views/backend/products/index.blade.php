@extends('layouts.backend.main')

@section('title', 'Data Management | Product index')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Product
          <small>Display All Products</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.products.index') }}">Product</a></li>
          <li class="active">All Products</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header clearfix">
                    <div class="pull-left">
                        <a href="{{ route('backend.blog.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @include('backend.partials.message')

                    @if (! $products->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        
                        @include('backend.products.table')
                        
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{ $products->appends( Request::query() )->render() }}
                    </div>
                    <div class="pull-right">
                        <small>{{ $productCount }} {{ str_plural('Item', $productCount) }}</small>
                    </div>
                </div>
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
