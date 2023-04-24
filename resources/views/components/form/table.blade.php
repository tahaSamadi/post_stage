@props(['data'=>[],'edit_route'=>'','columns'=>[],'column_en'=>[]])
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                @if(isset($data[0]))
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="check_all"></th>
                        @foreach($columns as $key => $value)
                            <th>{{$value}}</th>
                         @endforeach
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $td)
                            <tr>
                                <td><input type="checkbox" name="item_id[]" value="{{$td["id"]}}" class="item"></td>
                                @foreach($column_en as $column)
                                <td>{{$td[$column]}}</td>
                                @endforeach
                                <td class="d-flex justify-content-center" data-id="{{$td["id"]}}">
                                    <button class="btn btn-danger btn-sm mx-1" data-crud="delete"><a href="javascript:void(0)"><i class="mdi mdi-delete-alert-outline"></i></a></button>
                                    <button class="btn btn-info btn-sm mx-1"><a href="{{route($edit_route,['news_cat'=>$td["slug"]])}}"><i class="mdi mdi-movie-edit"></i></a></button>
                                    <button type="button" class="btn btn-dark position-relative" data-crud="show_child" data-subcats-count="{{$td->sub_cats()->count()}}">
                                        <a href="javascript:void(0)"><i class=" mdi mdi-npm-variant-outline "></i></a>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{$td->sub_cats()->count()}}</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                @else
                    <div class="alert alert-danger">نتیجه ای یافت نشد</div>
                @endif
                </table>
            </div>
        </div>
    </div>
</div>

@section('extra_js')
    <script>
        $(document).ready(function () {
            delete_item('آیا شما اطمینان به حذف این ایتم دارید؟','{{route('news.cats.delete')}}');
            table_ajax("{{route('news.cats.index')}}",'{{route('news.cats.delete')}}')
        })
    </script>
@endsection
