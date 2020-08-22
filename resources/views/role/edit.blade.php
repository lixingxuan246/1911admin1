@extends('shou.index')
@section('content')
    <div style="margin-top: 20px"></div>

        <form class="layui-form" action="{{url('/role/update/'.$res->role_id)}}" method="post">
        @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">角色的名称</label>
            <div class="layui-input-inline">
                <input type="text" name="role_name" required  lay-verify="required"  value="{{$res->role_name}}" placeholder="请输入角色名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否启用</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="1"  @if($res->status==1) checked @endif title="启用" checked >
                <input type="radio" name="status" value="0" @if($res->status==0) checked @endif title="不启用" >
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">修改</button>
            </div>
        </div>
    </form>



    <script src="/layui/layui.js" charset="utf-8"></script>
    <style>
        .son{
            margin-left: 40px;
            margin-top: 10px;
        }
    </style>
    <script>

        //Demo
        var $;
        layui.use('form', function(){
            var form = layui.form;
            $ = layui.jquery;

            {{--$.ajaxSetup({--}}
            {{--headers: {--}}
            {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
            {{--});--}}

            {{--// 父选子--}}
            {{--form.on('checkbox(parent)', function(data){--}}
            {{--if(  data.elem.checked == true  ){--}}
            {{--data.othis.parent('.parent').find('.son input').prop('checked', true);--}}
            {{--}else{--}}
            {{--data.othis.parent('.parent').find('.son input').prop('checked', false);--}}
            {{--}--}}
            {{--form.render();--}}

            {{--});--}}

            {{--// 子选父--}}
            {{--form.on('checkbox(son)', function(data){--}}
            {{--if(  data.elem.checked == true  ){--}}
            {{--data.othis.parents('.parent').find('input').first().prop('checked', true);--}}
            {{--}else{--}}
            {{--// 先判断当前的子级有没有选中的，如果有选中的，不修改父级，如果全部都是不选中的，把父级也修改为不选中--}}
            {{--let mark = false;--}}
            {{--data.othis.parent('.son').find('input').each(function () {--}}
            {{--console.log($(this).prop('checked'));--}}
            {{--if( $(this).prop('checked') == true ){--}}
            {{--mark = true;--}}
            {{--}--}}
            {{--})--}}
            {{--if( mark == false )--}}
            {{--{--}}
            {{--data.othis.parents('.parent').find('input').first().prop('checked', false);--}}
            {{--}--}}
            {{--}--}}
            {{--form.render();--}}
            {{--});--}}

            {{--//监听提交--}}
            {{--form.on('submit(formDemo)', function(data){--}}
            {{--layer.msg(JSON.stringify(data.field));--}}
            {{--//            return false;--}}
            {{--$.ajax({--}}
            {{--url:'{{url('/role/add')}}',--}}
            {{--data:data.field,--}}
            {{--type:'post',--}}
            {{--dataType:'json',--}}
            {{--success:function( json_info ){--}}
            {{--if( json_info.status == 200 ){--}}
            {{--alert('success');--}}
            {{--}else{--}}
            {{--alert('fail');--}}
            {{--}--}}
            {{--}--}}
            {{--})--}}

            {{--return false;--}}
            {{--});--}}
        });
    </script>
@endsection
