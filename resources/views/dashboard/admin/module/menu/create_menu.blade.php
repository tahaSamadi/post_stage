@extends('dashboard.admin.layout')
@section('main_content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('modules_name.'.$module_crud_type['module'])}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $crud_names[$module_crud_type['type']] }} {{__("modules_name.".$module_crud_type['module'])}} </h4>
                    @component('components.form.form',['action'=>route('menu.store'),'method'=>'post'])
                        @slot('items')
                            @component('components.form.input',['label'=>'عنوان','id'=>'title'
,'name'=>'title','value'=>old('title')])@endcomponent
                        @endslot
                    @endcomponent
                </div>

            </div>
        </div>
        <!-- end col -->
    </div>

@endsection

