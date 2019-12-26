<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\index\index.html";i:1577337025;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek" />
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>bool</title>
    <!--common style-->
    <link href="/static/resource/css/style.css" rel="stylesheet">
    <link href="/static/resource/css/style-responsive.css" rel="stylesheet">
    <style>
    iframe{
        height: 100%;
        width: 100%;
        border-top: 1px solid #ccd0d8;
        border-left:none;
        border-right:none;
        border-bottom:none;
        padding-bottom: 20px;

    }
    .iframe-main{
        height: 100%;
        width: 100%;
    }

    </style>
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src="/static/resource/img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">Hyacinth</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--左侧导航-->
                <ul class="nav nav-pills nav-stacked side-navigation">

                    <li>
                        <h3 class="navigation-title">Hyacinth管理系统</h3>
                    </li>

                    <li class="active">
                        <a href="<?php echo url('admin/console/index'); ?>" target="main">
                            <i class="fa fa-home">
                            </i> <span>首页</span>
                        </a>
                    </li>
                    <li>
                        <h3 class="navigation-title">Hyacinth</h3>
                    </li>

                    <li>
                        <a href="<?php echo url('admin/subscribe/index'); ?>" target="main"><i class="fa fa-paper-plane"></i>
                            <span>预订管理</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo url('admin/house/maintain'); ?>" target="main"><i class="fa fa-home"></i>
                            <span>房型维护</span>
                        </a>
                    </li>

<!--                    <li>
                        <a href="<?php echo url('admin/customer/index'); ?>" target="main"><i class="fa fa-male"></i>
                            <span>客户管理</span>
                        </a>
                    </li>-->

                    <li>
                        <a href="<?php echo url('admin/finance/index'); ?>" target="main"><i class="fa fa-credit-card"></i>
                            <span>数据统计</span>
                        </a>
                    </li>
<!--                    <li>
                        <a href="" target="main"><i class="fa fa-comments-o"></i>
                            <span>短信营销</span>
                        </a>
                    </li>-->

                    <li class="menu-list">
                        <a href=""><i class="fa fa-cogs"></i>  <span>系统设置</span></a>
                        <ul class="child-list">
                            <li><a href="<?php echo url('admin/house/index'); ?>" target="main"> 房间管理 </a></li>
                            <li><a href="<?php echo url('admin/storey/index'); ?>" target="main"> 楼层管理 </a></li>
                            <li><a href="<?php echo url('admin/jointime/index'); ?>" target="main"> 入住时长 </a></li>
<!--                            <li><a href="<?php echo url('admin/MemberCard/index'); ?>" target="main">会员卡管理</a></li>-->
                        </ul>
                    </li>

                </ul>
                <!--左侧导航end-->


            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" >

            <!-- header section start-->
            <div class="header-section">

                <!--左侧导航栏上部logo-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="/static/resource/img/logo-icon.png" alt="">

                        <span class="brand-name">Hyacinth</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="/static/resource/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->



                
                <div class="notification-wrap">
                <!--left notification start-->
                <div class="left-notification">
                <ul class="notification-menu">


                <!--mail info start-->
                <li class="d-none">
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-primary">10条</span>
                    </a>
                </li>
                <!--mail info end-->

                <!--notification info start-->
                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">4</span>
                    </a>

                    <div class="dropdown-menu dropdown-title ">

                        <div class="title-row">
                            <h5 class="title yellow">
                                你有4 条通知
                            </h5>
                            <a href="javascript:;" class="btn-warning btn-view-all">查看全部</a>
                        </div>
                        <div class="notification-list-scroll sidebar">
                            <div class="notification-list mail-list not-list">
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-primary">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <strong>新用户注册</strong>

                                    <p>
                                        <small>现在</small>
                                    </p>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-success">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <strong> 消息发送失败 </strong>

                                    <p>
                                        <small>30 分钟前</small>
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
---少时诵诗书所所

<!--                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-home"></i>
                        <span class="badge bg-warning">1</span>预订管理
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-home"></i>
                        <span class="badge bg-warning">1</span>房型维护
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-home"></i>
                        <span class="badge bg-warning">2</span>入住管理
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-home"></i>
                        <span class="badge bg-warning">3</span>财务管理
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-home"></i>
                        <span class="badge bg-warning">4</span>系统管理
                    </a>
                </li>-->
                <!--notification info end-->

                </ul>
                </div>
                <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="/static/resource/img/logo.jpg" alt=""><?php echo session('admin'); ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="<?php echo url('admin/login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> 注销 </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--right notification end-->

                </div>
            </div>
            <!-- header section end-->

            <!--body wrapper start-->
                <!-- main -->
                <div class="iframe-main">
                    <iframe src="<?php echo url('admin/console/index'); ?>" class="main"  name="main" ></iframe>
                </div>
                <!-- main -->
            <!--body wrapper end-->


        </div>
        <!-- body content end-->
    </section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="/static/resource/js/jquery-1.10.2.min.js"></script>
<script src="/static/resource/js/bootstrap.min.js"></script>

<!-- iframeResizer.min.js -->
<script src="/static/resource/js/iframeResizer.min.js"></script>

<!--Nice Scroll-->
<script src="/static/resource/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common scripts for all pages-->
<script src="/static/resource/js/scripts.js"></script>

<script type="text/javascript">
    // $('iframe').iFrameResize([
    //     {
    //         log: true,
    //         height: '100%'
    //     }
    // ]);

    iFrameResize({ 
        autoResize: true,
        minHeight: 100,
        scrolling: true
    });

</script>

</body>
</html>
