<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="отправка почты php" />
<meta name="description" content="отправка почты php" />
<title>отправка почты php</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>	
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="myjs.js" type="text/javascript"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="feedback/js/feedback.js"></script>
    <script src="feedback/js/jquery.arcticmodal.js"></script>
    <script src="feedback/js/jquery.jgrowl.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.modal_btn', function(){
			$('#small-modal').arcticmodal();
		});
	});
    </script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">




</head>
<body>
 <div class="header">
    <div class="headwrap">
        <div class="logo">
            <div class="logotip"><a href="http://lbot3d.ru">Сайт находится на реконструкции</a></div>
        </div>
        <!--
        <div class="logo">
            <div class="logotip"><a href="http://aweb34.ru">Aweb<span>34</span>.ru</a></div>
        </div>
        -->
    </div>
</div>
<div class="wraper container">
<h1>Вы можете отправить сообщение.</h1>
        
<!--a class="back" href="lbot3d.ru"><< lbot3d.ru</a-->
<div class="row">
    	<div class="span4 offset1">
        	<div class="well">
                <legend>Пример формы 2</legend>
                <form action="" method="get" name="form-2">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="input-medium focused" name="name" type="text" placeholder="Ваше имя111">
                    </div>
					<!--
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-book"></i></span>
                        <input class="input-medium focused" name="tell" type="text" placeholder="Ваш телефон">
                    </div>
					-->
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="input-medium focused" name="e-mail" type="text" placeholder="Ваш E-mail">
                    </div>
                    <textarea class="input-lage focused" name="text" placeholder="Ваше сообщение" value="UUUUU009"></textarea>
					<!--
                    <label class="checkbox">
                        <input type="checkbox" value="да" name="checkbox"> Checkbox
                    </label>
					-->
                    <input class="feedback btn btn-block btn-large btn-success" name="send" type="button" value="Тест формы !">
                </form>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="email" class="col-sm-3 col-sm-offset-1 control-label">Ваш email</label>
                    <div class="col-sm-5 ">
                        <input type="text" class="form-control"  id="email" placeholder="Введите email на который отправляете письмо" name="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="emailalert form-group">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="col-sm-3 col-sm-offset-1 control-label">Ваше сообщение</label>
                    <div class="col-sm-5 ">
                        <textarea class="form-control" rows="5" id="body" placeholder="Введите текст вашего письма" name="body"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="bodyalert form-group">
                        
                    </div>
                </div>
             </form>
            
            <div class="col-sm-offset-4 col-sm-4 col-xs-offset-2  col-xs-7">
                 <button  class="submit btn btn-primary col-sm-12 col-xs-12 btn-lg">Отправить письмо</button>
            </div>
            <div class="load col-sm-offset-4 col-sm-4 center" style="display: none;">                                 
                    <img class="img-responsive" src="css/preload.gif">
            </div>
<!-- Modal bootstrap-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 70px;">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="border: none;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div id='result' class="text-center"></div>
      </div>
    </div>
  </div>
</div>

            
        </div>	
    </div>
</div>
  
</div>
<script src="js/bootstrap.min.js"></script>
</body>

