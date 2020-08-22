@extends('shou.index')
@section('content')

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>新闻列表</legend>
</fieldset>

<table class="layui-table" lay-even="" lay-skin="row">
    <colgroup>
        <col width="150">
        <col width="150">
        <col width="250">
        <col width="50">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>人物</th>
        <th>民族</th>
        <th>出场时间</th>
        <th>格言</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>贤心</td>
        <td>汉族</td>
        <td>1989-10-14</td>
        <td>人生似修行</td>
        <td>
            <a href="{{url('/news/delete')}}" class="layui-btn layui-btn-danger  layui-btn-normal">删除</a>
            <a href="{{url('/news/edit')}}"   class="layui-btn  layui-btn-normal" >修改</a>
        </td>
    </tr>
    <tr>
        <td>张爱玲</td>
        <td>汉族</td>
        <td>1920-09-30</td>
        <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
        <td></td>
    </tr>
    <tr>
        <td>Helen Keller</td>
        <td>拉丁美裔</td>
        <td>1880-06-27</td>
        <td> Life is either a daring adventure or nothing.</td>
        <td></td>
    </tr>
    <tr>
        <td>岳飞</td>
        <td>汉族</td>
        <td>1103-北宋崇宁二年</td>
        <td>教科书再滥改，也抹不去“民族英雄”的事实</td>
        <td></td>
    </tr>
    <tr>
        <td>孟子</td>
        <td>华夏族（汉族）</td>
        <td>公元前-372年</td>
        <td>猿强，则国强。国强，则猿更强！ </td>
        <td></td>
    </tr>
    </tbody>
</table>

<script src="/layui/layui.js" charset="utf-8"></script>


@endsection

