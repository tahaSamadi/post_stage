@props(['options'=>[],'label'=>'','name'=>'','first_option'=>false])
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label class="control-label">{{$label}}</label>
                    <select class="form-control select2" name="{{$name}}">
                        @if($first_option)
                            <option value="">{{$first_option}}</option>
                        @endif
                        @foreach($options as $option)
                            <option value="{{$option["id"]}}">{{$option["title"]}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
