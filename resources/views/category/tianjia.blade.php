@extends('shou.index')
@section('content')

<body>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend><h2>管理员添加页面</h2></legend>
</fieldset>

<form class="layui-form" action="{{url('admin/admin/login')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="layui-form-item">
        <label class="layui-form-label">管理员名称</label>
        <div class="layui-input-block">
            <input type="text" name="admin_name" lay-verify="title" autocomplete="off" placeholder="请输入管理员名称" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">管理员密码</label>
        <div class="layui-input-block">
            <input type="text" name="admin_pwd" lay-verify="title" autocomplete="off" placeholder="请输入密码" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="submit" value  = "立即添加">
{{--            <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即添加</button>--}}
        </div>
    </div>
</form>


@endsection
<script src="/layui/layui.js" charset="utf-8"></script>

</body>
