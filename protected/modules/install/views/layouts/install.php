<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link media="screen" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" />

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />

	<title><?php echo tFile::getT('module_install', 'Open Business Card').' - '.tFile::getT('module_install', 'Installation in 1 step'); ?></title>

	<style type="text/css">
        body {font-family: 'Roboto', Arial, sans-serif; font-size: 14px; font-weight: normal; }
		#container { width: 960px; margin: 0 auto;}
		div.logo {float: left;  margin: 15px 0 20px;}
		div.logo a {color: #acacac; display: block; position: relative; text-decoration: none; width: 355px; overflow: hidden;}
		div.logo img {border: 0 none; height: auto; max-width: 100%; vertical-align: middle;}
		div.logo a span {font-family: 'Roboto', Arial, sans-serif; font-size: 21px; color: #000; left: 75px; position: absolute; top: 36px;}
		div.content	{float:left; width:960px;}

        #page { width: 800px; margin: 0 auto; }
        div.logo {float: left; margin-left: -20px;}
        div.content {padding-top: 10px;}
        #footer { color: gray; font-size: 10px; border-top: 1px solid #aaa; margin-top: 10px; }

        h1 {color: black; font-size: 1.6em; font-weight: bold; margin: 0.5em 0; }
        h2 { color: black; font-size: 1.25em; font-weight: bold;  margin: 0.3em 0; }
        h3 {color: black; font-size: 1.1em; font-weight: bold; margin: 0.2em 0; }

        table.result { background: #E6ECFF none repeat scroll 0 0; border-collapse: collapse; width: 100%; }
        table.result th { background: #CCD9FF none repeat scroll 0 0; text-align: left; }
        table.result th, table.result td { border: 1px solid #BFCFFF; padding: 0.2em; }
        td.passed {background-color: #60BF60; border: 1px solid silver; padding: 2px; }
        td.warning {background-color: #FFFFBF; border: 1px solid silver; padding: 2px; }
        td.failed {background-color: #FF8080; border: 1px solid silver; padding: 2px; }
        .install_box {background-color: #EDF4FF; margin: 5px 0; padding: 5px; border: 1px solid #CCCCCC;}
		.install_color {background-color: #EDF4FF; border: 1px solid #CCCCCC; padding-left: 20px;}
		.padding-left5 {padding-left: 5px;}
        .install .install_color input, .install .install_color textarea {width: 200px; height: 20px;}
		div.form .row.buttons {margin: 15px 0 0 0;}
		div.form .license-block {margin: 10px 0;}
		div.form .site-description textarea {/*width: 465px;*/ width: 100%; height: 50px; resize: none;}
		div.form fieldset {
			border: 1px solid #ccc;
			margin: 10px 0 15px 5px;
			padding: 10px;
		}
		.span-12 {width: 450px;}
		div.form legend {font-size: 24px; padding: 0 5px;}
		div.form label {font-size: 14px; font-weight: normal;}
		div.content { width: 100% !important; }
		.install_color .row {padding-left: 5px;}
		.container {width:950px;margin:0 auto;}
		.column, .span-1, .span-2, .span-3, .span-4, .span-5, .span-6, .span-7, .span-8, .span-9, .span-10, .span-11, .span-12, .span-13, .span-14, .span-15, .span-16, .span-17, .span-18, .span-19, .span-20, .span-21, .span-22, .span-23, .span-24 {float:left;margin-right:10px;}
		.last {margin-right:0;}
		.span-1 {width:30px;}
		.span-2 {width:70px;}
		.span-3 {width:110px;}
		.span-4 {width:150px;}
		.span-5 {width:190px;}
		.span-6 {width:230px;}
		.span-7 {width:270px;}
		.span-8 {width:310px;}
		.span-9 {width:350px;}
		.span-10 {width:390px;}
		.span-11 {width:430px;}
		.span-12 {width:470px;}
		.span-13 {width:510px;}
		.span-14 {width:550px;}
		.span-15 {width:590px;}
		.span-16 {width:630px;}
		.span-17 {width:670px;}
		.span-18 {width:710px;}
		.span-19 {width:750px;}
		.span-20 {width:790px;}
		.span-21 {width:830px;}
		.span-22 {width:870px;}
		.span-23 {width:910px;}
		.span-24 {width:950px;margin-right:0;}
		input.span-1, textarea.span-1, input.span-2, textarea.span-2, input.span-3, textarea.span-3, input.span-4, textarea.span-4, input.span-5, textarea.span-5, input.span-6, textarea.span-6, input.span-7, textarea.span-7, input.span-8, textarea.span-8, input.span-9, textarea.span-9, input.span-10, textarea.span-10, input.span-11, textarea.span-11, input.span-12, textarea.span-12, input.span-13, textarea.span-13, input.span-14, textarea.span-14, input.span-15, textarea.span-15, input.span-16, textarea.span-16, input.span-17, textarea.span-17, input.span-18, textarea.span-18, input.span-19, textarea.span-19, input.span-20, textarea.span-20, input.span-21, textarea.span-21, input.span-22, textarea.span-22, input.span-23, textarea.span-23, input.span-24, textarea.span-24 {border-left-width:1px;border-right-width:1px;padding-left:5px;padding-right:5px;}
		input.span-1, textarea.span-1 {width:18px;}
		input.span-2, textarea.span-2 {width:58px;}
		input.span-3, textarea.span-3 {width:98px;}
		input.span-4, textarea.span-4 {width:138px;}
		input.span-5, textarea.span-5 {width:178px;}
		input.span-6, textarea.span-6 {width:218px;}
		input.span-7, textarea.span-7 {width:258px;}
		input.span-8, textarea.span-8 {width:298px;}
		input.span-9, textarea.span-9 {width:338px;}
		input.span-10, textarea.span-10 {width:378px;}
		input.span-11, textarea.span-11 {width:418px;}
		input.span-12, textarea.span-12 {width:458px;}
		input.span-13, textarea.span-13 {width:498px;}
		input.span-14, textarea.span-14 {width:538px;}
		input.span-15, textarea.span-15 {width:578px;}
		input.span-16, textarea.span-16 {width:618px;}
		input.span-17, textarea.span-17 {width:658px;}
		input.span-18, textarea.span-18 {width:698px;}
		input.span-19, textarea.span-19 {width:738px;}
		input.span-20, textarea.span-20 {width:778px;}
		input.span-21, textarea.span-21 {width:818px;}
		input.span-22, textarea.span-22 {width:858px;}
		input.span-23, textarea.span-23 {width:898px;}
		input.span-24, textarea.span-24 {width:938px;}
		.append-1 {padding-right:40px;}
		.append-2 {padding-right:80px;}
		.append-3 {padding-right:120px;}
		.append-4 {padding-right:160px;}
		.append-5 {padding-right:200px;}
		.append-6 {padding-right:240px;}
		.append-7 {padding-right:280px;}
		.append-8 {padding-right:320px;}
		.append-9 {padding-right:360px;}
		.append-10 {padding-right:400px;}
		.append-11 {padding-right:440px;}
		.append-12 {padding-right:480px;}
		.append-13 {padding-right:520px;}
		.append-14 {padding-right:560px;}
		.append-15 {padding-right:600px;}
		.append-16 {padding-right:640px;}
		.append-17 {padding-right:680px;}
		.append-18 {padding-right:720px;}
		.append-19 {padding-right:760px;}
		.append-20 {padding-right:800px;}
		.append-21 {padding-right:840px;}
		.append-22 {padding-right:880px;}
		.append-23 {padding-right:920px;}
		.prepend-1 {padding-left:40px;}
		.prepend-2 {padding-left:80px;}
		.prepend-3 {padding-left:120px;}
		.prepend-4 {padding-left:160px;}
		.prepend-5 {padding-left:200px;}
		.prepend-6 {padding-left:240px;}
		.prepend-7 {padding-left:280px;}
		.prepend-8 {padding-left:320px;}
		.prepend-9 {padding-left:360px;}
		.prepend-10 {padding-left:400px;}
		.prepend-11 {padding-left:440px;}
		.prepend-12 {padding-left:480px;}
		.prepend-13 {padding-left:520px;}
		.prepend-14 {padding-left:560px;}
		.prepend-15 {padding-left:600px;}
		.prepend-16 {padding-left:640px;}
		.prepend-17 {padding-left:680px;}
		.prepend-18 {padding-left:720px;}
		.prepend-19 {padding-left:760px;}
		.prepend-20 {padding-left:800px;}
		.prepend-21 {padding-left:840px;}
		.prepend-22 {padding-left:880px;}
		.prepend-23 {padding-left:920px;}
		.border {padding-right:4px;margin-right:5px;border-right:1px solid #ddd;}
		.colborder {padding-right:24px;margin-right:25px;border-right:1px solid #ddd;}
		.pull-1 {margin-left:-40px;}
		.pull-2 {margin-left:-80px;}
		.pull-3 {margin-left:-120px;}
		.pull-4 {margin-left:-160px;}
		.pull-5 {margin-left:-200px;}
		.pull-6 {margin-left:-240px;}
		.pull-7 {margin-left:-280px;}
		.pull-8 {margin-left:-320px;}
		.pull-9 {margin-left:-360px;}
		.pull-10 {margin-left:-400px;}
		.pull-11 {margin-left:-440px;}
		.pull-12 {margin-left:-480px;}
		.pull-13 {margin-left:-520px;}
		.pull-14 {margin-left:-560px;}
		.pull-15 {margin-left:-600px;}
		.pull-16 {margin-left:-640px;}
		.pull-17 {margin-left:-680px;}
		.pull-18 {margin-left:-720px;}
		.pull-19 {margin-left:-760px;}
		.pull-20 {margin-left:-800px;}
		.pull-21 {margin-left:-840px;}
		.pull-22 {margin-left:-880px;}
		.pull-23 {margin-left:-920px;}
		.pull-24 {margin-left:-960px;}
		.pull-1, .pull-2, .pull-3, .pull-4, .pull-5, .pull-6, .pull-7, .pull-8, .pull-9, .pull-10, .pull-11, .pull-12, .pull-13, .pull-14, .pull-15, .pull-16, .pull-17, .pull-18, .pull-19, .pull-20, .pull-21, .pull-22, .pull-23, .pull-24 {float:left;position:relative;}
		.push-1 {margin:0 -40px 1.5em 40px;}
		.push-2 {margin:0 -80px 1.5em 80px;}
		.push-3 {margin:0 -120px 1.5em 120px;}
		.push-4 {margin:0 -160px 1.5em 160px;}
		.push-5 {margin:0 -200px 1.5em 200px;}
		.push-6 {margin:0 -240px 1.5em 240px;}
		.push-7 {margin:0 -280px 1.5em 280px;}
		.push-8 {margin:0 -320px 1.5em 320px;}
		.push-9 {margin:0 -360px 1.5em 360px;}
		.push-10 {margin:0 -400px 1.5em 400px;}
		.push-11 {margin:0 -440px 1.5em 440px;}
		.push-12 {margin:0 -480px 1.5em 480px;}
		.push-13 {margin:0 -520px 1.5em 520px;}
		.push-14 {margin:0 -560px 1.5em 560px;}
		.push-15 {margin:0 -600px 1.5em 600px;}
		.push-16 {margin:0 -640px 1.5em 640px;}
		.push-17 {margin:0 -680px 1.5em 680px;}
		.push-18 {margin:0 -720px 1.5em 720px;}
		.push-19 {margin:0 -760px 1.5em 760px;}
		.push-20 {margin:0 -800px 1.5em 800px;}
		.push-21 {margin:0 -840px 1.5em 840px;}
		.push-22 {margin:0 -880px 1.5em 880px;}
		.push-23 {margin:0 -920px 1.5em 920px;}
		.push-24 {margin:0 -960px 1.5em 960px;}
		.push-1, .push-2, .push-3, .push-4, .push-5, .push-6, .push-7, .push-8, .push-9, .push-10, .push-11, .push-12, .push-13, .push-14, .push-15, .push-16, .push-17, .push-18, .push-19, .push-20, .push-21, .push-22, .push-23, .push-24 {float:left;position:relative;}
		div.prepend-top, .prepend-top {margin-top:1.5em;}
		div.append-bottom, .append-bottom {margin-bottom:1.5em;}
		.box {padding:1.5em;margin-bottom:1.5em;background:#e5eCf9;}
		hr {background:#ddd;color:#ddd;clear:both;float:none;width:100%;height:1px;margin:0 0 1.45em;border:none;}
		hr.space {background:#fff;color:#fff;visibility:hidden;}
		.clearfix:after, .container:after {content:"\0020";display:block;height:0;clear:both;visibility:hidden;overflow:hidden;}
		.clearfix, .container {display:block;}
		.clear {clear:both;}
		div.footer	{width:100%; height:50px;}
		.footer {
			float: left;
			width: 960px;
			margin: 30px 0 0 0;
			border-top: 1px solid #cfcfcf;
			/*background: url(../images/pages/footer_bg.jpg) repeat-x top;*/

			background-color:#efefef;
			background-image: -moz-linear-gradient(top, #efefef 0%, #fdfdfd 100%);
			background-image: -webkit-linear-gradient(top, #efefef 0%, #fdfdfd 100%);
			background-image: -o-linear-gradient(top, #efefef 0%, #fdfdfd 100%);
			background-image: -ms-linear-gradient(top, #efefef 0% ,#fdfdfd 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efefef', endColorstr='#fdfdfd',GradientType=0 );
			background-image: linear-gradient(top, #efefef 0% ,#fdfdfd 100%);
		}
		.footer p { margin: 10px 0 5px 10px; color: #aaaaaa; font-size: 11px; }
		.min-size-fancy { min-height: 110px; min-width: 225px;}
		.hidden { display: none;}
		.white-popup-block{background:#FFF;padding:20px 10px;text-align:left;max-width:650px;margin:0 auto;}
		.language-select span, .language-select a {color: #000;}
    </style>
</head>

<body>
<div id="container">
	<?php
		if(Yii::app()->controller->action->id != 'index'){
			$this->widget('application.modules.lang.components.langSelectorWidget', array(
				'type' => 'links',
				'languages' => array(
					'en' => array(
						'name_iso' => 'en',
						'name' => 'English',
						'flag_img' => 'us.png'
					),
					'ru' => array(
						'name_iso' => 'ru',
						'name' => 'Русский',
						'flag_img' => 'ru.png'
					),
				)
			));
		}
	?>
	
	<div class="content">
		<?php echo $content; ?>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>
	<div class="footer">
		<p class="slogan"><a href="http://monoray.net/products/51-open-business-card" target="_blank">Open Business Card</a></p>
	</div>
</div>
<?php
	if($this->isAssetsIsWritable()) {
		$this->widget('ext.magnific-popup.EMagnificPopup', array(
			'target' => 'a.fancy',
			'type' => 'image',
			'options' => array(
				'closeOnContentClick' => true,
				'mainClass' => 'mfp-img-mobile',
				'callbacks' => array(
					'close' => 'js:function(){
						var capClick = $(".get-new-ver-code");
						if(typeof capClick !== "undefined")	capClick.click();
					}
					',
				),
			),
		));

		$this->widget('ext.magnific-popup.EMagnificPopup', array(
				'target' => '.mgp-open-inline',
				'type' => 'inline',
				'options' => array(
					'preloader' => false,
					'focus' => '#name',
					'callbacks' => array(
						'beforeOpen' => 'js:function() {
							if($(window).width() < 700) {
							  this.st.focus = false;
							} else {
							  this.st.focus = "#name";
							}
						  }
						',
						'close' => 'js:function(){
							var capClick = $(".get-new-ver-code");
							if(typeof capClick !== "undefined")	capClick.click();
						}
						',
					),
				),
			)
		);
	}
?>
</body>
</html>