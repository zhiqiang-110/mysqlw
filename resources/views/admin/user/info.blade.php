@extends("admin.gong")
@section("admin")
<html>

<head></head>
<style>
    #DataTables_Table_1_wrapper{
        background-color: white;
        font-size: 25px;
    }
</style>
<body>
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>用户详情</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid" >
                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 155px;">ID</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 211px;">兴趣</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">性别</th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @if(!empty($info))
                        <tr class="odd">
                            <td class="  sorting_1">{{$info['id']}}</td>
                            <td class=" ">{{$info['hobby']}}</td>
                            <td class=" ">{{$info['sex']}}</td>
                        </tr>
                        @else
                        该用户还没有填写详情!
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
@section("title",'后台--用户详情')