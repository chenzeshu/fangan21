<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <title>Hi</title>
    <style>
        html, body{
            width:100%
        }
        @media screen and (min-width:1200px){
            .title{
                width:35%;
                margin:0 auto;
            }
        }
        @media screen and (min-width:800px) and ( max-width:1199px){
            .title{
                width:80%;
                margin:0 auto;
            }
        }
        @media screen and ( max-width:800px){
            .title{
                width:90%;
                margin:0 auto;
            }
        }

        .title-title{
            margin-top:10px;
            font-size:24px;
            line-height:48px;
            font-weight:700;
        }
        .title-intro{
            margin-top:10px;
            font-size:16px;
            line-height:24px;
            color: rgb(128,128,128);
        }
        .enter{
            width:100%;
            margin: 40px 0;
        }
        .enter-button{
            display: block;
            width:153px;
            height:40px;
            margin: 0 auto;
            padding: 8px 0 4px 18px;
            text-indent: 12px;
            text-decoration: none;
            border-radius: 5px;
            color:#fff;
            font-size:22px;
            font-weight: 700;
            background: rgb(17,105,172);
        }
        .show-table-title{
            color: rgb(128,128,128);
        }
        .prefer {
            background:lightgreen;
        }
        .prefer-no {
            background: orange;
        }
        .prefer-prefer{
            background:green;
        }
    </style>
</head>
<body>
{{--banner--}}
{{--<img src="{{asset('storage/images/timg3.jpg')}}" alt="" width="100%" height="139">--}}
<img src="http://imglf5.nosdn.127.net/img/Q2J2aDM4bkx6RmhrVld6L2lkMUthcmZaSXJzNzloSFJET0IzQ1BNSXMzZXREY1g0emYrcjhRPT0.jpg?imageView&thumbnail=1680x0&quality=96&stripmeta=0&type=jpg" alt="" width="100%" height="139">
{{--标题--}}
<div class="title">
    <div class="title-title" style="margin-top:10px;
            font-size:24px;
            line-height:48px;
            font-weight:700;">
        Hi卡盟邀请您来购买辅助
    </div>
    <div class="title-intro" style=" margin-top:10px;
            font-size:16px;
            line-height:24px;
            color: rgb(128,128,128);">
    {{--标题简介--}}
        Hi卡盟是一个集中式辅助卡密销售平台, 平台由于接近作者, 享有市面较低的价格. 我们的目的是让您在琳琅满目的产品中通过这个平台, 获得便宜实惠的价格和优质的体验.
    </div>
    {{--按钮:进入Hi卡盟--}}
    <div class="enter" style="   width:100%;
            margin: 40px 0;">
        <a href="http://hi.08ka.cn" class="enter-button" style="   display: block;
            width:153px;
            height:40px;
            margin: 0 auto;
            padding: 8px 0 4px 18px;
            text-indent: 12px;
            text-decoration: none;
            border-radius: 5px;
            color:#fff;
            font-size:22px;
            font-weight: 700;
            background: rgb(17,105,172);">去卡盟看看</a>
        <br>
        <span style="display:block;width:50%;color: rgb(128,128,128);margin:0 auto"> &nbsp;或直接在浏览器输入 <b>http://hi.08ka.cn</b></span>
    </div>

    <div class="show-table">
        {{--h2--}}
        <div class="title-title" style="margin-top:10px;
            font-size:24px;
            line-height:48px;
            font-weight:700;">
            点击前, 先看看销售产品价格表
        </div>
        <div class="show-table-content">
            <table width="100%">
                <tr style="background: rgba(128,128,128,.3)">
                    <td>序号</td>
                    <td>推荐等级(<span class="prefer-prefer" style="background:green;">特推</span>;
                        <span class="prefer" style="background:lightgreen;">推荐</span>;
                        一般; <span class="prefer-no" style="background:orange;">不推荐</span>)</td>
                    <td>天</td>
                    <td>周</td>
                    <td>月</td>
                </tr>
                <tbody>
                @foreach($data as $k => $v)
                <tr>
                    <td>{{$k+1}}</td>
                    @if($v['level'] === 0)
                        <td class="prefer-no" style="background:orange;">
                        @elseif($v['level'] === 2)
                        <td class="prefer" style="background:lightgreen;">
                        @elseif($v['level'] === 3)
                        <td class="prefer-prefer" style="background:green;">
                        @else
                        <td>
                        @endif
                        {{$v->name}} <span style="color:red">{{$v->noteword}}</span>
                    </td>
                    <td>{{$v['day']}}</td>
                    <td>{{$v['week']}}</td>
                    <td>{{$v['month']}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--列表--}}
    </div>
</div>


</body>
</html>