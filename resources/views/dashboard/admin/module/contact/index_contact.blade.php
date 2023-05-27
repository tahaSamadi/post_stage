@extends('dashboard.admin.layout')

@section('main_content')
    @component('components.list.header_list',['module_crud_type'=>$module_crud_type['module']])@endcomponent
    @component('components.list.base_table')
        @slot('filter_section')
            @component('components.filter.filter_list',['route'=>route('contact.index'),'method'=>'get'
,'options_filter'=>false])@endcomponent
            @slot('items')

            @endslot
        @endslot
    @endcomponent
@endsection
