@extends('shou.index')
@section('content')

    <body>

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend><h2>管理员添加页面</h2></legend>
    </fieldset>





<form class="layui-form" action="{{url('admin/createadmin')}}" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">管理员账号</label>
        <div class="layui-input-inline">
            <input type="text" name="admin_name" required  lay-verify="required" value="zhangsan"
                   placeholder="请输入管理员名称" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">真实名字</label>
        <div class="layui-input-inline">
            <input type="text" name="real_name" required  lay-verify="required" value="张三"
                   placeholder="请输入管理员真实姓名" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-inline">
            <input type="text" name="pwd" required  lay-verify="required"  value="123456"
                   placeholder="请输入你的密码" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">确认密码</label>
        <div class="layui-input-inline">
            <input type="text" name="repwd" required  lay-verify="required" value="123456"
                   placeholder="请再次输入密码" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">手机号</label>
        <div class="layui-input-inline">
            <input type="text" name="phone" required  lay-verify="required" value="13233334444"
                   placeholder="请输入手机号" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">邮箱</label>
        <div class="layui-input-inline">
            <input type="text" name="email" required  lay-verify="required" value="112306@qq.com"
                   placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">管理员类型</label>
        <div class="layui-input-block">
            <input type="radio" lay-filter="admin_type" name="admin_type" value="2" title="普通管理员" checked>
            <input type="radio" lay-filter="admin_type" name="admin_type" value="1" title="超级管理员" >
        </div>
    </div>
{{--    <div class="layui-form-item" id="all_role">--}}
{{--        <label class="layui-form-label">现有角色</label>--}}
{{--        <div class="layui-input-block">--}}
{{--            <div class="role">--}}
{{--                @foreach( $role_list as $k => $v )--}}
{{--                    <div class="role_name">--}}
{{--                        <input type="checkbox" name="role[]" lay-filter="parent"  value="{{$v['role_id']}}"--}}
{{--                               lay-skin="primary" title="{{$v['role_name']}}">--}}
{{--                    </div>--}}
{{--                    <hr/>--}}
{{--                    <div class="role_parent"><span class="title">权限：</span>--}}
{{--                        <span style="color:rgba(47, 47, 47, 0.6)">{{$v['power_node_name']}}</span>--}}
{{--                        @foreach( $v['power_list'] as $kk => $vv )--}}
{{--                            <span style="color:rgba(47, 47, 47, 0.6)">{{$vv['power_node_name']}}</span>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="submit" value="立即提交">
{{--            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>--}}
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>

</form>
<script src="/layui/layui.js" charset="utf-8"></script>
<script src="/layui/lay/modules/form.js" charset="utf-8"></script>
<script>
    var $;
    layui.use('form', function() {
        var form = layui.form;
        $ = layui.jquery;
    });
</script>
<style>
    .role{

    }
    .role_name{
        color: #0E0EFF;
        margin-top: 10px;
    }
    .title{
        color:#00b0e8;
    }

</style>



@endsection
<script src="/layui/layui.js" charset="utf-8"></script>

</body>