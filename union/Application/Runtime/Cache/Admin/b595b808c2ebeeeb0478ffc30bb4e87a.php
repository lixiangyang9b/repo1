<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:31:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo (C("system_title")); ?></title>

    <meta name="keywords" content="<?php echo (C("system_title")); ?>">
    <meta name="description" content="<?php echo (C("system_title")); ?>">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="/union/Public/Admin/img/favicon.ico">
    <link href="/union/Public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/union/Public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/union/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/union/Public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <?php if(($images == '')): ?><img alt="image" class="img-circle" src="/union/Public/Admin/img/profile_small.jpg" />
                                <?php else: ?>
                                    <img alt="image" class="img-circle" style="width: 64px;height: 64px;" src="<?php echo getImage($images);?>" /><?php endif; ?>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($username); ?></strong></span>
                                <span class="text-muted text-xs block"><?php echo ($rolename); ?><b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <?php if(($user_id != 1)): ?><li><a class="J_menuItem" href="<?php echo U('User/edituser',['id'=>$user_id]);?>">修改资料</a>
                                </li>
                                <li class="divider"></li><?php endif; ?>
                                <li><a href="" onclick="logout();">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">*^_^*
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/main');?>" class="J_menuItem">
                            <i class="fa fa-home" style="font-size: 18px;"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>

                    <?php if(in_array('1',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#graduation-cap">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="nav-label">会员管理</span>
                            <span class="fa arrow"></span>
                        </a>

                        <?php if(in_array('2',$auth)||$auth==''){ ?>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Member/addMember');?>">新增会员</a>
                            </li>
                        </ul>
                        <?php } ?>

                        <?php if(in_array('3',$auth)||$auth==''){ ?>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Member/memberList');?>">查看会员</a>
                            </li>
                        </ul>
                        <?php } ?>

                    </li>
                    <?php } ?>

                    <?php if(in_array('4',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#shield">
                            <i class="fa fa-shield" style="font-size: 18px;"></i>
                            <span class="nav-label">&nbsp;奖惩管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('5',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Reward/addReward');?>">添加记录</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('6',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Reward/rewardList');?>">奖惩记录</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('7',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#balance-scale">
                            <i class="fa fa-balance-scale"></i>
                            <span class="nav-label">运动会管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('8',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Sports/addSports');?>">添加运动会</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('9',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Sports/sportsList');?>">查看运动会</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('10',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#flag">
                            <i class="fa fa-flag" style="font-size: 16px;"></i>
                            <span class="nav-label">新闻管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('11',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/addnews');?>">发布新闻</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('12',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/newslist');?>">查看新闻</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('13',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/catelist');?>">分类管理</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('14',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/recycle');?>">回收站</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('15',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#suitcase">
                            <i class="fa fa-suitcase" style="font-size: 16px;"></i>
                            <span class="nav-label">文档管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('16',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Doc/addDoc');?>">上传文档</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('17',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Doc/docList');?>">文档列表</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('18',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#university">
                            <i class="fa fa-university" style="font-size: 14px;"></i>
                            <span class="nav-label">经费管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('19',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Cost/addCost');?>">添加记录</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Cost/costList');?>">查看经费</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('20',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#gavel">
                            <i class="fa fa-gavel" style="font-size: 16px;"></i>
                            <span class="nav-label">电子提案</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('21',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Proposal/addProposal');?>">新增提案</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('22',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Proposal/proposalList');?>">查看提案</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('23',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#user">
                            <i class="fa fa-user" style="font-size: 17px;"></i>
                            <span class="nav-label">&nbsp;用户管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('24',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('User/addUser');?>">新增用户</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('25',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href=<?php echo U('User/userList');?>">查看用户</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('26',$auth)||$auth==''){ ?>
                    <li>
                        <a href="##unlock-alt">
                            <i class="fa fa-unlock-alt" style="font-size: 18px;"></i>
                            <span class="nav-label">&nbsp;权限管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(in_array('27',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Role/roleList');?>">角色管理</a>
                            </li>
                            <?php } ?>

                            <?php if(in_array('28',$auth)||$auth==''){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Auth/authList');?>">权限列表</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(in_array('29',$auth)||$auth==''){ ?>
                    <li>
                        <a href="#cogs">
                            <i class="fa fa-cogs" style="font-size: 15px;"></i>
                            <span class="nav-label">系统管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <?php if(in_array('30',$auth)||$auth==''){ ?>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('System/siteConfig');?>">站点配置</a>
                            </li>
                        </ul>
                        <?php } ?>

                        <?php if(in_array('31',$auth)||$auth==''){ ?>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Database/index',['type'=>'export']);?>">备份数据库</a>
                            </li>
                        </ul>
                        <?php } ?>

                        <?php if(in_array('32',$auth)||$auth==''){ ?>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Database/index',['type'=>'import']);?>">还原数据库</a>
                            </li>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->

        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="hidden-xs">
                            <a href="index_v1.html" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 主题</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="" onclick="logout();" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('Index/main');?>" frameborder="0" data-id="<?php echo U('Index/main');?>" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2017
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
    <script src="/union/Public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
    <script src="/union/Public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
    <script src="/union/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/union/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/union/Public/Admin/js/plugins/layer/layer.min.js"></script>
    <script src="/union/Public/Admin/js/hplus.min862f.js?v=4.1.0"></script>
    <script src="/union/Public/Admin/js/contabs.min.js" type="text/javascript"></script>
    <script src="/union/Public/Admin/js/plugins/pace/pace.min.js"></script>
    <script src="/union/Public/Admin/js/layer/layer.js"></script>
    <script>
        //定义全局变量
        var GV = {
            login_logout : "<?php echo U('login/logout');?>",
            login_index : "<?php echo U('login/index');?>"
        };
    </script>
    <script src="/union/Public/Admin/js/http/index/index.js"></script>
</body>

<!-- Mirrored from www.zi-han.net/theme/hplus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:31:16 GMT -->
</html>