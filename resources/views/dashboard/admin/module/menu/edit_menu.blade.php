@extends('dashboard.admin.layout')
@section('main_content')
    <!-- start page title -->
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">{{ $crud_names[$module_crud_type['type']] }} {{__('modules_name.'.$module_crud_type['module'])}}</h4>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @component('components.form.form',['action'=>route('menu.update',['menu'=>$menu->id]),'method'=>'post'])
                        @slot('items')
                            @component('components.form.input',['id'=>'title','name'=>'title','label'=>'عنوان','value'=>$menu->title])@endcomponent
                                @component('components.form.select2',['options'=>$menu_type
    ,'name'=>'menu_type','label'=>'مکان','id'=>'menu_type','first_option'=>'انتخاب کنید','value'=>$menu->menu_type])@endcomponent
                                @component('components.form.select2',['options'=>$menu_type_open
,'name'=>'menu_type_open','label'=>'نوع باز شدن','value'=>$menu->menu_type_open])@endcomponent
                                @if(isset($menu_type[0]))
                                    @foreach($menu_type as $type)
                                        @component('components.form.select2',['options'=>$type->menu,'name'=>'parent_id_'.$type['type']
        ,'label'=>__('fields.'.$type['type']),'first_option'=>'دسته بندی اصلی','id'=>$type['type'],'sub_method'=>'sub_cats'])@endcomponent
                                    @endforeach
                                @endif
                                @component('components.form.button',['type'=>'submit','value'=>'ثبت فرم'])@endcomponent

                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function check_footer(value){
            if(value === '2'){
                $("#header").addClass("d-block")
            }
            if(value === '1'){
                $("#footer").addClass("d-block")
            }
        }



        $("#header,#footer").removeClass('d-block').addClass('d-none')
        check_footer($("#menu_type select").val())
        $("#menu_type select").on('change',function () {
            $("#header,#footer").removeClass('d-block').addClass('d-none')
            var value=$(this).val()
            check_footer(value)
        })

    </script>
@endsection
