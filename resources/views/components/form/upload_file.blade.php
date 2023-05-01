@props(['id'=>'','name'=>'','value'=>'','attr'=>[],'label'=>''])
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            @if($label != '')
            <h4 class="card-title">{{$label}}</h4>
            @endif
            <div class="custom-file">
                <input type="file" name="{{$name}}" class="custom-file-input" id="{{$id}}">
                <label class="custom-file-label" for="{{$id}}">انتخاب فایل</label>
            </div>
        </div>
    </div>

</div>
