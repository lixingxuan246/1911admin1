@extends('shou.index')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/layui/css/layui.css"  media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend><h2>新闻添加页面</h2></legend>
</fieldset>

<form class="layui-form" action="" enctype="multipart/form-data">

    <div class="layui-form-item">
        <label class="layui-form-label">新闻标题</label>
        <div class="layui-input-block">
            <input type="text" name="" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
        </div>
    </div>
</form>
    <div class="layui-form-item">
        <label class="layui-form-label">新闻内容</label>
        <div class="layui-input-block">
            {{--<input type="text" name="username" lay-verify="required" lay-reqtext="用户名是必填项，岂能为空？" placeholder="请输入" autocomplete="off" class="layui-input">--}}
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">新闻编辑人</label>
            <div class="layui-input-inline">
                <input type="tel" name="" lay-verify="required|phone" autocomplete="off" class="layui-input">
            </div>
        </div>
    </div>


<script src="/layui/layui.js" charset="utf-8"></script>

@endsection
</body>
</html>