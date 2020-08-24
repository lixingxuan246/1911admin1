@extends('shou.index')
@section('content')

        <!DOCTYPE html>
<html>
<style>
    ul li {
        list-style: none;
        float: left;
        margin-left: 12px;
    }
</style>
<body>
    <h1>用户展示</h1><hr>
    <table class="layui-table" lay-even="" lay-skin="row">
        <colgroup>
            <col width="150">
            <col width="150">
            <col width="250">
            <col width="50">
            <col width="50">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>id</th>
            <th>用户名称</th>
            <th>添加时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($res as $k=>$v)
            <td>{{$v->role_id}}</td>
            <td>{{$v->role_name}}</td>
            <td>{{date('Y-m-d H:i:s',$v->ctime)}}</td>
            <td>{{($v->status==1?'启用':'不启用')}}</td>
            <td>
                <a href="{{url('/role/detal/'.$v->role_id)}}" class="layui-btn layui-btn-danger  layui-btn-normal">删除</a> |
                <a href="{{url('/role/edit/'.$v->role_id)}}" class="layui-btn  layui-btn-normal" >编辑</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$res->links()}}
    <script src="/layui/layui.js" charset="utf-8"></script>
</body>
</html>
@endsection


