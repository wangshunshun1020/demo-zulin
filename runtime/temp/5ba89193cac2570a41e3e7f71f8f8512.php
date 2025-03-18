<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:103:"D:\work\demo\xiaochengxu\zulin\demo-zulin\public/../application/admin\view\xylease\dashboard\index.html";i:1741933443;s:84:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\layout\default.html";i:1741931622;s:81:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\common\meta.html";i:1741931622;s:83:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\common\script.html";i:1741931622;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">
<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <style>
    .flex{display: flex;}
    .nums{margin: 20px 0 30px;}
    .sales-box{padding: 15px 20px; margin-bottom: 20px;background: #f1f4f6; border-radius: 5px;}
    .sales-box h4{font-size: 18px; line-height: 34px;color: #232529;}
    .sales-box h4 a{float: right;font-size: 14px;font-weight: normal;}
    .sales-box h3{font-size: 30px;font-weight: bold;}
    .sales-box .top{margin-top: 20px;}
    .sales-box p{font-size: 16px;color: #8a8d99;}
    .sales-box .title{font-size: 18px;color: #8a8d99;}
    .sales-box .title strong{margin-left: 3px;}
    .sales-box .btm{margin-top: 30px;}
    .sales-box .btm .item{width: 50%;text-align: center;}
    .sales-box .btm .sx{width: 15%;}
    .sales-box .btm .r{border-left: 1px solid rgb(220, 223, 230)}
    .sales-box h5{font-size: 24px;font-weight: bold;}
    .pln{padding-left: 0;}

    .sm-st-icon {
        width: 60px;
        height: 60px;
        display: inline-block;
        line-height: 60px;
        text-align: center;
        font-size: 30px;
        background: #eee;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        margin-right: 10px;
        color: #fff;
    }

    .sm-st{display: flex;}

    .sm-st-info {
        padding-top: 2px;
    }

    .sm-st-info span {
        display: block;
        font-size: 24px;
        font-weight: 600;
    }
    
    .orange {
        background: #fa8564 !important;
    }

    .red {
        background: #F05050 !important;
    }

    .green {
        background: #86ba41 !important;
    }

    .pink {
        background: #AC75F0 !important;
    }

    .yellow {
        background: #fdd752 !important;
    }

    .bule {
        background: #23b7e5 !important;
    }
    
</style>

<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null, false); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab"><?php echo __('Dashboard'); ?></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">

                <div class="row nums">
                    
                    <div class="col-sm-2 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon pink"><i class="fa fa-rmb"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total1; ?></span>
                                总消费
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon yellow"><i class="fa fa-archive"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total2; ?></span>
                                总充值
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 pln">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon red"><i class="fa fa-users"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total3; ?></span>
                                会员数
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon green"><i class="fa fa-id-badge"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total4; ?></span>
                                员工数
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon orange"><i class="fa fa-th-large"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total5; ?></span>
                                待退押金
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon bule"><i class="fa fa-check-circle"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $total6; ?></span>
                                商品数
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-xs-6">
                        <div class="sales-box">
                            <h4>租赁订单 <a class="btn-addtabs" href="<?php echo url('/xylease/order/order/index?ref=addtabs'); ?>">查看 <i class="fa fa-angle-right"></i></a></h4>
                            <div class="top text-center">
                                <div class="title">累计</div>
                                <div>
                                    <h3>¥<?php echo $orderTotalMoney; ?></h3>
                                    <p>(订单：<?php echo $orderTotalNum; ?>)</p>
                                </div>
                            </div>
                            <div class="flex btm">
                                <div class="item">
                                    <div class="title">今日<strong>¥<?php echo $orderTodayMoney; ?></strong></div>
                                    <p>(订单：<?php echo $orderTodayNum; ?>)</p>
                                </div>
                                <div class="item r">
                                    <div class="title">本月<strong>¥<?php echo $orderMonthMoney; ?></strong></div>
                                    <p>(订单：<?php echo $orderMonthNum; ?>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6 col-xs-6">
                        <div class="sales-box">
                            <h4>充值订单<a class="btn-addtabs" href="<?php echo url('/xylease/recharge/order/index?ref=addtabs'); ?>">查看 <i class="fa fa-angle-right"></i></a></h4>
                            <div class="top text-center">
                                <div class="title">累计</div>
                                <div>
                                    <h3>¥<?php echo $rechargeTotalMoney; ?></h3>
                                    <p>(订单：<?php echo $rechargeTotalNum; ?>)</p>
                                </div>
                            </div>
                            <div class="flex btm">
                                <div class="item">
                                    <div class="title">今日<strong>¥<?php echo $rechargeTodayMoney; ?></strong></div>
                                    <p>(订单：<?php echo $rechargeTodayNum; ?>)</p>
                                </div>
                                <div class="item r">
                                    <div class="title">本月<strong>¥<?php echo $rechargeMonthMoney; ?></strong></div>
                                    <p>(订单：<?php echo $rechargeMonthNum; ?>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <section class="col-lg-6 connectedSortable">
                        <div class="sales-box">
                            <h4>订单趋势 (近七日)</h4>
                            <div class="tab-content no-padding">
                                <div class="chart tab-pane active" id="order-chart" style="position: relative; height: 300px;"></div>
                            </div>
                        </div>
                    </section>
                    <section class="col-lg-6 connectedSortable">
                        <div class="sales-box">
                            <h4>销售额 (元)</h4>
                            <div class="tab-content no-padding">
                                <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;"></div>
                            </div>
                        </div>
                    </section>
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
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
