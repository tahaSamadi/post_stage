
<div class="col-12" id="filter_item">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            @component('components.form.form',['id'=>'filter'])
                @slot('items')
                    @component('components.form.input',['name'=>'title','id_title'=>'filter_title','label'=>'عنوان','attr'=>['placeholder'=>'عنوان را وارد کنید','id'=>'title']])@endcomponent
                    {{$extra_filter ?? ''}}
                    @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4'],'value'=>'فیلتر','id'=>'filter_button','type'=>''])@endcomponent

                @endslot
            @endcomponent
        </div>
        <div class="card-footer"></div>
    </div>
</div>
