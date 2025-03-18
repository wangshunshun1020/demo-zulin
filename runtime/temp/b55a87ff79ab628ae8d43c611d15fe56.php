<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:104:"D:\work\demo\xiaochengxu\zulin\demo-zulin\public/../application/admin\view\xylease\store\store\info.html";i:1741933443;s:84:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\layout\default.html";i:1741931622;s:81:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\common\meta.html";i:1741931622;s:83:"D:\work\demo\xiaochengxu\zulin\demo-zulin\application\admin\view\common\script.html";i:1741931622;}*/ ?>
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
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="panel panel-default">
        <div class="panel-heading">基础信息</div>
        <div class="panel-body">
            <div class="row mt-15">
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo htmlentities($row['name']); ?>">
                </div>
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('Businesshours'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-businesshours" data-rule="required" class="form-control" name="row[businesshours]" type="text" value="<?php echo htmlentities($row['businesshours']); ?>">
                </div>
            </div>
            <div class="row mt-15">
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Phone'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-phone" data-rule="required" class="form-control" name="row[phone]" type="text" value="<?php echo htmlentities($row['phone']); ?>">
                </div>
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('Weixin'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-weixin" data-rule="required" class="form-control" name="row[weixin]" type="text" value="<?php echo htmlentities($row['weixin']); ?>">
                </div>
            </div>
            <div class="row mt-15">
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Address'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-address" data-rule="required" class="form-control" name="row[address]" type="text" value="<?php echo htmlentities($row['address']); ?>">
                </div>
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('经纬度'); ?>:</label>
                <div class="col-xs-12 col-sm-3" style="display: flex;flex-wrap: nowrap;">
                    <input id="c-latitude" data-rule="required" class="form-control" name="row[latitude-longitude]" type="text" value="<?php echo htmlentities($row['latitude']); ?>,<?php echo htmlentities($row['longitude']); ?>">
                </div>
                <label class="control-label col-xs-12 col-sm-1"><a href="https://lbs.qq.com/getPoint/" target="_blank" style="line-height: 34px;">获取经纬度</a></label>
            </div>
            
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">介绍信息</div>
        <div class="panel-body">
            <div class="row mt-15">
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Logo'); ?>:</label>
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                        <input id="c-logo" data-rule="required" class="form-control" name="row[logo]" type="text" value="<?php echo htmlentities($row['logo']); ?>">
                        <div class="input-group-addon no-border no-padding">
                            <span><button type="button" id="faupload-logo" class="btn btn-danger faupload" data-input-id="c-logo" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp,image/webp" data-preview-id="p-logo"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                            <span><button type="button" id="fachoose-logo" class="btn btn-primary fachoose" data-input-id="c-logo" data-mimetype="image/*"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                        </div>
                        <span class="msg-box n-right" for="c-logo"></span>
                    </div>
                    <ul class="row list-inline faupload-preview" id="p-logo"></ul>
                </div>
                <label class="control-label col-xs-12 col-sm-2">尺寸：200px * 200px</label>
            </div>
            
            <div class="row mt-15">
                
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Images'); ?>:</label>
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                        <input id="c-images" data-rule="required" class="form-control" size="50" name="row[images]" type="textarea" value="<?php echo htmlentities($row['images']); ?>">
                        <div class="input-group-addon no-border no-padding">
                            <span><button type="button" id="faupload-images" class="btn btn-danger faupload" data-input-id="c-images" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp,image/webp" data-multiple="true" data-preview-id="p-images"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                            <span><button type="button" id="fachoose-images" class="btn btn-primary fachoose" data-input-id="c-images" data-mimetype="image/*" data-multiple="true"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                        </div>
                        <span class="msg-box n-right" for="c-images"></span>
                    </div>
                    <ul class="row list-inline faupload-preview" id="p-images"></ul>
                </div>
                <label class="control-label col-xs-12 col-sm-2">尺寸：750px * 430px</label>
            </div>
            <div class="row mt-15">
                
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('介绍视频'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="input-group">
                        <input id="c-videofile" class="form-control" size="50" name="row[videofile]" type="text" value="<?php echo htmlentities($row['videofile']); ?>">
                        <div class="input-group-addon no-border no-padding">
                            <span><button type="button" id="faupload-videofile" class="btn btn-danger faupload" data-input-id="c-videofile" data-multiple="false" data-preview-id="p-videofile"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                            <span><button type="button" id="fachoose-videofile" class="btn btn-primary fachoose" data-input-id="c-videofile" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                        </div>
                        <span class="msg-box n-right" for="c-videofile"></span>
                    </div>
                    <ul class="row list-inline faupload-preview" id="p-videofile"></ul>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-2"><?php echo __('Content'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <textarea id="c-content" class="form-control editor" rows="5" name="row[content]" cols="50"><?php echo htmlentities($row['content']); ?></textarea>
                </div>
            </div>
        </div>
       
        
    </div>
    
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-primary btn-embossed disabled"><?php echo __('OK'); ?></button>
        </div>
    </div>
</form>

<style>
    .mt-15{margin-bottom: 15px;padding: 0;}
</style>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
