@props(['columns'=>[],'data'=>[]])
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="check_all"></th>
                        @foreach($columns as $column)
                            <th>{{$column}}</th>
                         @endforeach
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $td)
                            <tr>
                                <td><input type="checkbox" name="item_id[]" value="{{$td["id"]}}" class="item"></td>
                                <td>{{$td["title"]}}</td>
                                <td><a href="">1</a></td>
                                <td>{{$lang_state[$td["state"]]}}</td>
                                <td>{{$lang_state[$td["state_main"]]}}</td>
                                <td>{{$lang_state[$td["state_header"]]}}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-danger btn-sm mx-1"><a href="javascript:void(0)"><i class="mdi mdi-delete-alert-outline"></i></a></button>
                                    <button class="btn btn-info btn-sm mx-1"><a href="javascript:void(0)"><i class="mdi mdi-movie-edit"></i></a></button>
                                    <button class="btn btn-dark btn-sm mx-1"><a href="javascript:void(0)"><i class=" mdi mdi-npm-variant-outline "></i></a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
