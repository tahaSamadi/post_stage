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
                    <h4 class="card-title">{{ $crud_names[$module_crud_type['type']] }}
                        {{__("modules_name.".$module_crud_type['module'])}} </h4>
                    @component('components.form.form',['action'=>route('menu.store'),'method'=>'post'])
                        @slot('items')
                            @component('components.form.input',['label'=>'عنوان','id'=>'title'
,'name'=>'title','value'=>old('title')])@endcomponent
                            @component('components.form.select2',['options'=>$menu_type
,'name'=>'menu_type','label'=>'مکان','id'=>'menu_type','first_option'=>'انتخاب کنید'])@endcomponent
                            @component('components.form.select2',['options'=>$menu_type_open
,'name'=>'menu_type_open','label'=>'نوع باز شدن'])@endcomponent
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
        <!-- end col -->
    </div>

@endsection


@section('js')
    @foreach($menu_type as $type)
        @if($type['id'] == old('menu_type'))
            <script>
                $("[name='parent_id_{{$type['type']}}']").val("{{old('parent_id_'.$type['type'])}}");
                $("[name='menu_type']").val("{{old('menu_type')}}");
                $("[name='menu_type_open']").val("{{old('menu_type_open')}}");
            </script>
        @endif
    @endforeach
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
