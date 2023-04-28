@props(['items_filter'=>[]])
<div class="col-12" id="filter_item">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            @component('components.form.form')
                @slot('items')
                    @component('components.form.input',['name'=>'title','id_title'=>'filter_title','label'=>'عنوان'])@endcomponent
                    @component('components.form.select2',['name'=>'parent_id','options'=>$items_filter,'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی', 'sub_method'=>'sub_cats','value'=>''])@endcomponent
                    @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4'],'value'=>'فیلتر'])@endcomponent
                @endslot
            @endcomponent
        </div>
        <div class="card-footer"></div>
    </div>
</div>
