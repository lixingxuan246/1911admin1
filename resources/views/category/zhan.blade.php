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
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>管理员列表</legend>
</fieldset>

<table class="layui-table" lay-even="" lay-skin="row">
    <colgroup>
        <col width="350">
        <col width="600">
        <col width="400">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>管理员id</th>
        <th>管理员名称</th>
        <th>管理员头像</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>aaa</td>
        <td>1989-10-14</td>
        <td>人生似修行</td>
    </tr>
    <tr>
        <td>2</td>
        <td>ccc</td>
        <td>1920-09-30</td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>cddd</td>
        <td>1880-06-27</td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>www</td>
        <td>1103-北宋崇宁二年</td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>qqqqq</td>
        <td>公元前-372年</td>
        <td></td>
    </tr>
    </tbody>
</table>

<script src="/layui/layui.js" charset="utf-8"></script>


@endsection
</body>
</html>
