<?php /*a:1:{s:68:"C:\wnmp\nginx\www\project\blog\application\index\view\add\index.html";i:1586758987;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客发布</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1>
                    亲爱的宝宝<small>您又来了</small>
                </h1>
            </div>
        </div>
    </div>
</div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form class="form-horizontal" role="form" action="<?php echo url('add/add'); ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label" >标题</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">作者</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="about" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" >内容</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">发布</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>