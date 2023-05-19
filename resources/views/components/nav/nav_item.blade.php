@props(['tab_id'=>'','nav_title'=>'','active'=>false])
<li class="nav-item">
    <a class="nav-link @if($active) active @endif" data-toggle="tab" href="#{{$tab_id}}" role="tab">
        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
        <span class="d-none d-sm-block">{{$nav_title}}</span>
    </a>
</li>
