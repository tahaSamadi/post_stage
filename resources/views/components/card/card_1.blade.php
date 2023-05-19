@props(['title'=>'','icon'=>''])
<div class="col-lg-12 p-0 mt-5">
    <div class="card border border-primary">
        <div class="card-header bg-transparent border-primary">
            <h6 class="my-0 text-primary"><i class="{{$icon}}  mr-3"></i>{{$title}}</h6>
        </div>
        <div class="card-body">
            {{$items_card ?? ''}}
        </div>
    </div>
</div>
