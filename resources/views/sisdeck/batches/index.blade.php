@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Batches')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Batches</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="#" data-toggle="modal" data-target="#create-batch_modal" class="btn btn-primary-lte dhs_button" id="create-batch_button">
                <i class="fas fa-fw fa-plus-circle mr-2"></i>Add New Batch
            </a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary"><div class="box-body">@include('/sisdeck/batches/table')</div></div>
        <div class="text-center"></div>
    </div>
@endsection

