@extends('shou.index')
@section('content')


<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend><h2>管理员添加页面</h2></legend>
</fieldset>

<form class="layui-form" action="" enctype="multipart/form-data">

    <div class="layui-form-item">
        <label class="layui-form-label">管理员名称</label>
        <div class="layui-input-block">
            <input type="text" name="" lay-verify="title" autocomplete="off" placeholder="请输入管理员名称" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">管理员密码</label>
        <div class="layui-input-block">
            <input type="text" name="" lay-verify="title" autocomplete="off" placeholder="请输入密码" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即添加</button>
        </div>
    </div>
</form>

<script src="/layui/layui.js" charset="utf-8"></script>

@endsection
