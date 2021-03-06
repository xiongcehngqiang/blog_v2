@extends('admin.base')

@section('content')
<div class="layui-row layui-col-space15">

    <div class="layui-col-sm6 layui-col-md3">

        <div class="layui-card">

            <div class="layui-card-header">

                访问量

                <span class="layui-badge layui-bg-cyan layuiadmin-badge">月</span>

            </div>

            <div class="layui-card-body layuiadmin-card-list">

                <p class="layuiadmin-big-font">{{ $data['visit_month'] }}</p>

                <p>

                    总计访问量

                    <span class="layuiadmin-span-color">{{ $data['visit_all'] }} <i
                                class="layui-inline layui-icon layui-icon-flag"></i></span>

                </p>

            </div>

        </div>

    </div>

    <div class="layui-col-sm6 layui-col-md3">

        <div class="layui-card">

            <div class="layui-card-header">

                文章

                <span class="layui-badge layui-bg-cyan layuiadmin-badge">月</span>

            </div>

            <div class="layui-card-body layuiadmin-card-list">

                <p class="layuiadmin-big-font">{{ $data['articles_month'] }}</p>

                <p>

                    总共文章

                    <span class="layuiadmin-span-color">{{ $data['articles_all'] }} 篇<i
                                class="layui-inline layui-icon layui-icon-face-smile-b"></i></span>

                </p>

            </div>

        </div>

    </div>

    <div class="layui-col-sm6 layui-col-md3">

        <div class="layui-card">

            <div class="layui-card-header">

                收入

                <span class="layui-badge layui-bg-green layuiadmin-badge">年</span>

            </div>

            <div class="layui-card-body layuiadmin-card-list">


                <p class="layuiadmin-big-font">999,666</p>

                <p>

                    总收入

                    <span class="layuiadmin-span-color">*** <i
                                class="layui-inline layui-icon layui-icon-dollar"></i></span>

                </p>

            </div>

        </div>

    </div>

    <div class="layui-col-sm6 layui-col-md3">

        <div class="layui-card">

            <div class="layui-card-header">

                活跃用户

                <span class="layui-badge layui-bg-orange layuiadmin-badge">月</span>

            </div>

            <div class="layui-card-body layuiadmin-card-list">


                <p class="layuiadmin-big-font">{{ $data['members_all'] }}</p>

                <p>

                    最近一个月

                    <span class="layuiadmin-span-color">{{ $data['members_month'] }} <i
                                class="layui-inline layui-icon layui-icon-user"></i></span>

                </p>

            </div>

        </div>

    </div>

<!--    <div class="layui-col-sm12">-->
<!---->
<!--        <div class="layui-card">-->
<!---->
<!--            <div class="layui-card-header">-->
<!---->
<!--                访问量-->
<!---->
<!--                <div class="layui-btn-group layuiadmin-btn-group">-->
<!---->
<!--                    <a href="javascript:;" class="layui-btn layui-btn-primary layui-btn-xs">去年</a>-->
<!---->
<!--                    <a href="javascript:;" class="layui-btn layui-btn-primary layui-btn-xs">今年</a>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="layui-card-body">-->
<!---->
<!--                <div class="layui-row">-->
<!---->
<!--                    <div class="layui-col-sm8">-->
<!---->
<!--                        <div class="layui-carousel layadmin-carousel layadmin-dataview" data-anim="fade"-->
<!--                             lay-filter="LAY-index-pagetwo">-->
<!---->
<!--                            <div carousel-item id="LAY-index-pagetwo">-->
<!---->
<!--                                <div><i class="layui-icon layui-icon-loading1 layadmin-loading"></i></div>-->
<!---->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="layui-col-sm4">-->
<!---->
<!--                        <div class="layuiadmin-card-list">-->
<!---->
<!--                            <p class="layuiadmin-normal-font">月访问数</p>-->
<!---->
<!--                            <span>同上期增长</span>-->
<!---->
<!--                            <div class="layui-progress layui-progress-big" lay-showPercent="yes">-->
<!---->
<!--                                <div class="layui-progress-bar" lay-percent="30%"></div>-->
<!---->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!---->
<!--                        <div class="layuiadmin-card-list">-->
<!---->
<!--                            <p class="layuiadmin-normal-font">月下载数</p>-->
<!---->
<!--                            <span>同上期增长</span>-->
<!---->
<!--                            <div class="layui-progress layui-progress-big" lay-showPercent="yes">-->
<!---->
<!--                                <div class="layui-progress-bar" lay-percent="20%"></div>-->
<!---->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!---->
<!--                        <div class="layuiadmin-card-list">-->
<!---->
<!--                            <p class="layuiadmin-normal-font">月收入</p>-->
<!---->
<!--                            <span>同上期增长</span>-->
<!---->
<!--                            <div class="layui-progress layui-progress-big" lay-showPercent="yes">-->
<!---->
<!--                                <div class="layui-progress-bar" lay-percent="25%"></div>-->
<!---->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->

    <div class="layui-col-sm4">

        <div class="layui-card">

            <div class="layui-card-header">新增文章</div>

            <div class="layui-card-body">
                <style>
                    .tips {
                        display: -webkit-flex;
                        display: -moz-flex;
                        display: flex;
                    }

                    .tips .tips-item {
                        flex: 1;
                        text-align: right;
                    }
                </style>
                <ul class="layuiadmin-card-status layuiadmin-home2-usernote">

                    @foreach ($articles as $article)
                    <li>

                        <a href="/api/v1/article/{{ $article->id }}" target="_blank"><h3>{{$article->title}}</h3></a>

<!--                        <p id="{{ $article->id }}" class="admin-editormd">{{ $article->content }}</p>-->

                        <div class="tips">
                            <span>{{$article->created_at}}</span>
                            <div class="tips-item">
                                @foreach ($article->tags as $tag)
                                <a class="layui-btn layui-btn-xs">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>

    <div class="layui-col-sm8">

        <div class="layui-row layui-col-space15">

<!--            <div class="layui-col-sm6">-->
<!---->
<!--                <div class="layui-card">-->
<!---->
<!--                    <div class="layui-card-header">本周活跃用户列表</div>-->
<!---->
<!--                    <div class="layui-card-body">-->
<!---->
<!--                        <table class="layui-table layuiadmin-page-table" lay-skin="line">-->
<!---->
<!--                            <thead>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <th>用户名</th>-->
<!---->
<!--                                <th>最后登录时间</th>-->
<!---->
<!--                                <th>状态</th>-->
<!---->
<!--                                <th>获得赞</th>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            </thead>-->
<!---->
<!--                            <tbody>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td><span class="first">胡歌</span></td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 11:20</i></td>-->
<!---->
<!--                                <td><span>在线</span></td>-->
<!---->
<!--                                <td>22 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td><span class="second">彭于晏</span></td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 10:40</i></td>-->
<!---->
<!--                                <td><span>在线</span></td>-->
<!---->
<!--                                <td>21 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td><span class="third">靳东</span></td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 01:30</i></td>-->
<!---->
<!--                                <td><i>离线</i></td>-->
<!---->
<!--                                <td>66 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td>吴尊</td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 21:18</i></td>-->
<!---->
<!--                                <td><i>离线</i></td>-->
<!---->
<!--                                <td>45 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td>许上进</td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 09:30</i></td>-->
<!---->
<!--                                <td><span>在线</span></td>-->
<!---->
<!--                                <td>21 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td>小蚊子</td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 21:18</i></td>-->
<!---->
<!--                                <td><i>在线</i></td>-->
<!---->
<!--                                <td>45 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!---->
<!--                                <td>贤心</td>-->
<!---->
<!--                                <td><i class="layui-icon layui-icon-log"> 09:30</i></td>-->
<!---->
<!--                                <td><span>在线</span></td>-->
<!---->
<!--                                <td>21 <i class="layui-icon layui-icon-praise"></i></td>-->
<!---->
<!--                            </tr>-->
<!---->
<!--                            </tbody>-->
<!---->
<!--                        </table>-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->

<!--            <div class="layui-col-sm6">-->
<!---->
<!--                <div class="layui-card">-->
<!---->
<!--                    <div class="layui-card-header">项目进展</div>-->
<!---->
<!--                    <div class="layui-card-body">-->
<!---->
<!--                        <div class="layui-tab-content">-->
<!---->
<!--                            <div class="layui-tab-item layui-show">-->
<!---->
<!--                                <table id="LAY-index-prograss"></table>-->
<!---->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->

            <div class="layui-col-sm12">

                <div class="layui-card">

                    <div class="layui-card-header">用户全国分布</div>

                    <div class="layui-card-body">

                        <div class="layui-row layui-col-space15">

                            <div class="layui-col-sm4">

                                <table class="layui-table layuiadmin-page-table" lay-skin="line">

                                    <thead>

                                    <tr>

                                        <th>排名</th>

                                        <th>地区</th>

                                        <th>人数</th>

                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($area as $data)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $data->name }}</td>

                                        <td>{{ $data->value }}</td>

                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>

                            <div class="layui-col-sm8">


                                <div class="layui-carousel layadmin-carousel layadmin-dataview" data-anim="fade"
                                     lay-filter="LAY-index-pagethree">

                                    <div carousel-item id="LAY-index-pagethree">

                                        <div><i class="layui-icon layui-icon-loading1 layadmin-loading"></i></div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@section('script')
<script>
    layui.use(['index', 'sample']);
</script>
@endsection