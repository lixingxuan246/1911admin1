@extends('shou.index')
@section('content')
    <form class="layui-form" action="{{url('/role/update/'.$res->role_id)}}" method="post">
        <div style="margin-top: 10px"></div>
        <div class="layui-form" >
            <div class="layui-form-item">
                <label class="layui-form-label">角色的名称</label>
                <div class="layui-input-inline">
                    <input type="text" name="role_name" required  lay-verify="required"   value="{{$res->role_name}}" placeholder="请输入标题" autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">是否启用</label>
                <div class="layui-input-block">
                    <input type="radio" name="status" value="1"  @if($res->status==1) checked @endif title="启用" checked >
                    <input type="radio" name="status" value="0" @if($res->status==0) checked @endif title="不启用" >
                </div>
            </div>
            <hr/>
            <div class="layui-form-item">
                <label class="layui-form-label">权限操作</label>
                <div class="layui-input-block">
                    @foreach( $all_node as $k => $v )
                        <div class="parent">
                            <input type="checkbox" name="like[]" lay-filter="parent"  value="{{$v['power_node_id']}}"
                                   lay-skin="primary" title="{{$v['power_node_name']}}"><br/>
                            <div class="son">
                                @if( isset( $v['son']) )
                                    @foreach( $v['son'] as $kk => $vv )
                                        <input type="checkbox" name="like[]" lay-filter="son" value="{{$vv['power_node_id']}}"
                                               lay-skin="primary" title="{{$vv['power_node_name']}}">
                                    @endforeach
                                @endif
                            </div>
                            <hr/>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">修改</button>

                </div>
            </div>
        </div>
    </form>
    <script>
        //Demo
        var $;
        layui.use('form', function(){
            var form = layui.form;
            $ = layui.jquery;
            console.log( form );
            form.on('checkbox(parent)', function(data){
//               console.log(1);exit;
                if(data.elem.checked ==true){
                    data.othis.parent('.parent').find('.son input').prop('checked',true);
                }else{
                    data.othis.parent('.parent').find('.son input').prop('checked',false);
                }
                form.render();
            });
//            // 子选父
            form.on('checkbox(son)', function(data){
                if(  data.elem.checked == true  ){
                    data.othis.parents('.parent').find('input').first().prop('checked', true);
                }else{
                    let mark = false;
                    data.othis.parent('.son').find('input').each(function () {
                        console.log($(this).prop('checked'));
                        if( $(this).prop('checked') == true ){
                            mark = true;
                        }
                    })
                    if( mark == false )
                    {
                        data.othis.parents('.parent').find('input').first().prop('checked', false);
                    }
                }
                form.render();
            });
            {{--form.on('submit(formDemo)', function(data){--}}
            {{--layer.msg(JSON.stringify(data.field));--}}
            {{--//            return false;--}}
            {{--$.ajax({--}}
            {{--url:'{{url('/role/store')}}',--}}
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
