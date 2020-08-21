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

        <th>管理员email</th>
        <th>管理员手机号</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
  @foreach ($res as $k =>$v)
    <tr>
        <td>{{$v->admin_id}}</td>
        <td>{{$v->admin_name}}</td>
        <td>{{$v->admin_email}}</td>
        <td>{{$v->admin_phone}}</td>
        <td>{{date('Y-m-d',$v->ctime)}}</td>
        <td></td>
    </tr>
      @endforeach

    </tbody>
</table>

<script src="/layui/layui.js" charset="utf-8"></script>


@endsection
</body>
</html>
