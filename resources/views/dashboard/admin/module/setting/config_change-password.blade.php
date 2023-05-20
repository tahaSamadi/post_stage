@extends('dashboard.admin.layout')
@section('main_content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{ $crud_names[$module_crud_type['type']] }} {{__("modules_name.".$module_crud_type['module'])}}</h4>
            </div>
        </div>
    </div>
    @component('components.nav.layout.layout_nav_1')
        @slot('panel_items')
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                @component('components.nav.nav_item',['tab_id'=>'main','nav_title'=>'تغییر رمز عبور','active'=>true])@endcomponent
            </ul>
            <div class="tab-content p-3 text-muted">
                @component('components.nav.nav_panel',['id'=>'main','active'=>true])
                    @slot('panel')
                        @component('components.form.form' ,['action'=>route('change.password.store'),'method'=>'post'])
                            @slot('items')
                                @component('components.form.input',['label'=>'رمز عبور فعلی:','type'=>'password','id'=>'current_password'
            ,'name'=>'current_password','value'=>''])@endcomponent
                                    @component('components.form.input',['label'=>'رمز عبور جدید:','type'=>'password','id'=>'new_password'
                    ,'name'=>'new_password','value'=>''])@endcomponent
                                @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4']
            ,'type'=>'submit','value'=>'ارسال'])@endcomponent
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent
            </div>
        @endslot
    @endcomponent
@endsection

