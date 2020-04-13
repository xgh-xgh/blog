<?php /*a:1:{s:70:"C:\wnmp\nginx\www\project\blog\application\index\view\index\index.html";i:1586776850;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>XGH个人博客</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#">XGH</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a target="_blank" href="<?php echo url('index/add/index'); ?>">博客发布</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他<strong class="caret"></strong></a>

                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" />
                        </div> <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">用户</a>
                        </li>

                    </ul>
                </div>

            </nav>
            <div class="jumbotron">
                <h1>
                    Hello, world!
                </h1>
                <p>
                    大家好这是我的第一个博客
                </p>
                <p>
                    <a class="btn btn-primary btn-large" href="#">蹦蹦跳跳</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-4 column">
            <h2>
                这是我的展示
            </h2>

        </div>

    </div>
</div>


<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row">

                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="col-md-4" style=width:350px;height:300px;>
                    <div class="thumbnail">
                        <img alt="图片" src="v3/default4.jpg" />
                        <div class="caption">
                            <h3>
                                <?php echo htmlentities(mb_substr($vo['title'],0,10,'utf-8')); ?>
                            </h3>
                            <p>
                                <?php echo htmlentities(mb_substr($vo['content'],0,100,'utf-8')); ?>
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">详情</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
    </div>
</div>



</body>
</html>

