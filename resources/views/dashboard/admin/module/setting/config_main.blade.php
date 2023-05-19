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
                @component('components.nav.nav_item',['tab_id'=>'main','nav_title'=>'اصلی','active'=>true])@endcomponent
                @component('components.nav.nav_item',['tab_id'=>'profile1','nav_title'=>'فرعی'])@endcomponent
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                @component('components.nav.nav_panel',['id'=>'main','active'=>true])
                    @slot('panel')
                        @component('components.form.form' ,['action'=>route('config_main.store'),'method'=>'post'])
                            @slot('items')
                                @component('components.form.input',['label'=>'عنوان سایت:','id'=>'site_title'
            ,'name'=>'site_title','value'=>$config_key['site_title']])@endcomponent
                                @component('components.form.input',['label'=>'عنوان سایت انگلیسی:','id'=>'site_title_en'
            ,'name'=>'site_title_en','value'=>$config_key['site_title_en']])@endcomponent
                                @component('components.form.input',['label'=>'ایمیل:','id'=>'email'
            ,'name'=>'email','value'=>$config_key['email']])@endcomponent
                                @component('components.form.input',['label'=>'موبایل:','id'=>'mobile'
            ,'name'=>'mobile','value'=>$config_key['mobile']])@endcomponent
                                @component('components.form.textarea',['label'=>'توضیح درباره سایت:','id'=>'description'
            ,'name'=>'description','value'=>$config_key['description']])@endcomponent
                                @component('components.form.tags_input'
            ,['label'=>'کلمه کلیدی','name'=>'tags','value'=>$config_key['tags']])@endcomponent
                                @component('components.form.input',['label'=>'تلفن:','id'=>'tell'
            ,'name'=>'tell','value'=>$config_key['tell']])@endcomponent
                                @component('components.form.textarea',['label'=>'توضیح درباره سایت:','id'=>'address'
            ,'name'=>'address','value'=>$config_key['address']])@endcomponent
                                @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4']
            ,'type'=>'submit','value'=>'ارسال'])@endcomponent
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent

                @component('components.nav.nav_panel',['id'=>'profile1'])
                    @slot('panel')
                        @component('components.form.form' ,['action'=>route('config_main.store'),'method'=>'post'])
                            @slot('items')
                                @component('components.form.input',['label'=>'تعداد صفحه در مدیریت:','id'=>'admin_page_number'
                ,'name'=>'admin_page_number','value'=>$config_key['admin_page_number']])@endcomponent
                                @component('components.card.card_1',['title'=>'آدرس شبکه های اجتماعی','icon'=>'fas fa-share-alt'])
                                    @slot('items_card')
                                        @component('components.form.input',['label'=>'تلگرام:','id'=>'telegram'
                        ,'name'=>'telegram','value'=>$config_key['telegram']])@endcomponent
                                        @component('components.form.input',['label'=>'لینکدین:','id'=>'linkedin'
        ,'name'=>'linkedin','value'=>$config_key['linkedin']])@endcomponent
                                        @component('components.form.input',['label'=>'اینستاگرام:','id'=>'instagram'
        ,'name'=>'instagram','value'=>$config_key['instagram']])@endcomponent
                                        @component('components.form.input',['label'=>'واتساپ:','id'=>'whatsapp'
        ,'name'=>'whatsapp','value'=>$config_key['whatsapp']])@endcomponent
                                    @endslot
                                @endcomponent
                                @component('components.card.card_1',['title'=>'صفحه تماس با ما','icon'=>' fas fa-phone '])
                                    @slot('items_card')
                                        @component('components.form.input',['label'=>'شماره تماس:','id'=>'mobile_contact'
        ,'name'=>'mobile_contact','value'=>$config_key['mobile_contact']])@endcomponent
                                        @component('components.form.input',['label'=>'ایمیل:','id'=>'email_contact'
        ,'name'=>'email_contact','value'=>$config_key['email_contact']])@endcomponent
                                        @component('components.form.textarea',['label'=>'آدرس:','id'=>'address_contact'
        ,'name'=>'address_contact','value'=>$config_key['address_contact']])@endcomponent

                                    @endslot
                                @endcomponent
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
@section('js')
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=tags]');

        // initialize Tagify on the above input node reference
        var tagify = new Tagify(input, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
    </script>
@endsection

