<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row">
    <div class="col-12">
        <div class="card filter_section">
            {{$filter_section ?? ''}}
        </div>
        <div class="card">
            {{$items ?? ''}}
        </div>
    </div>
</div>
