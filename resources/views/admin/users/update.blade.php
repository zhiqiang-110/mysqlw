@extends("admin.gong")
@section("admin")
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>用户修改</span> 
   </div> 
  
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/users/{{$date['id']}}" method="post">
    	@if ($errors->any())
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">用户名</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="name" value="{{$date['name']}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">密码</label> 
       <div class="mws-form-item"> 
        <input type="password" name="pwd" class="large" value="{{$date['pwd']}}"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">确认密码</label> 
       <div class="mws-form-item"> 
        <input type="password" name="repwd" class="large" value="{{$date['pwd']}}"/> 
       </div> 
      </div>
        <div class="mws-form-row"> 
       <label class="mws-form-label">邮箱</label> 
       <div class="mws-form-item"> 
        <input type="text" name="email" class="large" value="{{$date['email']}}"/> 
       </div> 
      </div>  
       <div class="mws-form-row"> 
       <label class="mws-form-label">电话</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="phone" value="{{$date['phone']}}"/> 
       </div> 
      </div>  
     </div> 
     
     <div class="mws-button-row"> 
     	{{csrf_field()}}
     	{{method_field("PUT")}}
      <input type="submit" value="确定" class="btn btn-danger" /> 
      <input type="reset" value="取消" class="btn " /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section("title",'后台--用户修改')