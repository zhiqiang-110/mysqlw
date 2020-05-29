@extends("admin.gong")
@section("admin")
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>用户列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <form action="/users" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索名字: <input type="text" name="keyword" value="{{$key}}" aria-controls="DataTables_Table_1" /></label>
      搜索邮箱: <input type="text" name="keyword2" value="{{$key2}}" aria-controls="DataTables_Table_1" /></label>
      <input type="submit" class="btn btn-success" value="搜索">
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 155px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 211px;">用户名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">邮箱</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 134px;">电话</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 134px;">添加时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 134px;">修改时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($users as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row['id']}}</td> 
        <td class=" ">{{$row['name']}}</td> 
        <td class=" ">{{$row['email']}}</td> 
        <td class=" ">{{$row['phone']}}</td>
        <td class=" ">{{$row['created_at']}}</td>
        <td class=" ">{{$row['updated_at']}}</td>
        <td class=" ">@if($row['static']==0)未激活@elseif($row['static']==1)已激活@elseif($row['static']==2)禁用 @endif</td> 
        <td class=" ">
        <form action="/user/{{$row['id']}}/edit" method="get">
              {{csrf_field()}}
              <!-- {{method_field("PUT")}} -->
              <button type="submit" class="btn btn-danger">修改</button>
          </form>
          <form action="/user/{{$row['id']}}" method="post">
              {{csrf_field()}}
              {{method_field("DELETE")}}
              <button type="submit" class="btn btn-danger">删除</button>
          </form>
          <a href="/user/{{$row['id']}}" class="btn btn-danger">用户详情</a>
          <a href="/address/{{$row['id']}}" class="btn btn-danger">用户收货地址</a>
        </td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$users->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section("title",'后台--用户列表')