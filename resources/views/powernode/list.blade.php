@extends('shou.index')
@section('content')

    <table class="layui-table">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>ID</th>
            <th>节点名称</th>
            <th>节点路径</th>
            <th>父级节点</th>
            <th>是否启用</th>
            <th>时间</th>
            <th>操作</th>
        </tr>
        </thead>
        @foreach($power_info as $k=>$v)
        <tbody>
        <tr>
            <td>{{$v->power_node_id}}</td>
            <td>{{$v->power_node_name}}</td>
            <td>{{$v->power_node_level}}</td>
            <td>{{$v->power_node_url}}</td>
            <td>{{$v->status==1?'√':'×'}}</td>
            <td>{{date('Y-m-d H:i:s',$v->ctime)}}</td>
            <td>{{--}}<a href="{{url('/powernode/auth/'.$v->power_node_id)}}" class="btn btn-success">编辑</a>--}}
                <a href="{{url('/powernode/destroy/'.$v->power_node_id)}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
{{$power_info->links()}}


<div style="margin-top: 10px"></div>
<table id="demo" lay-filter="test"></table>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-xs" lay-event="detail">查看</a>
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

@endsection
