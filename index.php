<?php
if(isset($_GET['id'])) {
	$data = file_get_contents("module.json");
	$objJson = json_decode($data, true);
	
	$temp = $objJson[0]['items_url'];
	$temp1 = explode("courses/", $temp);
	$temp2 = explode("/modules", $temp1[1]);
	$temp2 = $temp2[0];

	$user = 4637837;//$_GET['id'];
	foreach($objJson as $obj) {	
		$module_item_id = $mid = $duration = $page_id = $title = array();
		foreach($obj['items'] as $items) {
			$title[] = $items['title'];
			$module_item_id[] = $items['id'];
			if(isset($items['contentMeta']['content_aux_details']) && isset($items['contentMeta']['content_id'])) {
				$mid[] = $items['contentMeta']['content_aux_details']['olympus_token'];
				$duration[] = $items['contentMeta']['content_aux_details']['duration'];
				$page_id[] = $items['contentMeta']['content_id'];
			} else {
				$mid[] = 0;
				$duration[] = 0;
				$page_id[] = 0;
			}
		}

		$arr = array("lms_user_id" => $user,"title" => $title, "course_id" => $temp2, "module_item_id" => $module_item_id, "mid" => $mid, "duration" => $duration, "page_id" => $page_id);
		for($i = 0; $i < count($arr['module_item_id']); $i++) {
			echo "<h1>".$arr['title'][$i]."</h1>";
			for($j = 0; $j <= $arr['duration'][$i]; $j+=60) {
				if($arr['mid'][$i] != 0) {
					$parameter = "ranges%5B0%5D%5Bs%5D=".$j."&ranges%5B0%5D%5Be%5D=".($j+60);
					$parameter .= "&page_id=".$arr['page_id'][$i];
					$parameter .= "&course_id=".$arr['course_id'];
					$parameter .= "&position=".($j+50);
					$parameter .= "&module_item_id=".$arr['module_item_id'][$i];
					$parameter .= "&lms_user_id=".$arr['lms_user_id'];
					$parameter .= "&mid=".$arr['mid'][$i];
					$parameter .= "&media_type=GL_HLS";
					$parameter .= "&delay=".($j/60);
					$parameter .= "&duration=".$arr['duration'][$i];
					echo '<iframe src="formMultiple.php?'.$parameter.'" height="200" width="300" title="Iframe Example"></iframe>';
				}
			}
			echo "<br><hr><br>";
		}
	}
	exit;
}
?>
<html>
	<head>
		<title>My Great Learning - Video Skipper</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap">
		<style>
			*, body {
				font-family: 'Poppins', sans-serif;
				font-weight: 400;
				-webkit-font-smoothing: antialiased;
				text-rendering: optimizeLegibility;
				-moz-osx-font-smoothing: grayscale;
			}

			html, body {
				height: 100%;
				background-color: #152733;
				overflow: hidden;
			}


			.form-holder {
				  display: flex;
				  flex-direction: column;
				  justify-content: center;
				  align-items: center;
				  text-align: center;
				  min-height: 100vh;
			}

			.form-holder .form-content {
				position: relative;
				text-align: center;
				display: -webkit-box;
				display: -moz-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				-webkit-justify-content: center;
				justify-content: center;
				-webkit-align-items: center;
				align-items: center;
				padding: 60px;
			}

			.form-content .form-items {
				border: 3px solid #fff;
				padding: 40px;
				display: inline-block;
				width: 100%;
				min-width: 540px;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px;
				border-radius: 10px;
				text-align: left;
				-webkit-transition: all 0.4s ease;
				transition: all 0.4s ease;
			}

			.form-content h3 {
				color: #fff;
				text-align: left;
				font-size: 28px;
				font-weight: 600;
				margin-bottom: 5px;
			}

			.form-content h3.form-title {
				margin-bottom: 30px;
			}

			.form-content p {
				color: #fff;
				text-align: left;
				font-size: 17px;
				font-weight: 300;
				line-height: 20px;
				margin-bottom: 30px;
			}


			.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
				color: #fff;
			}

			.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
				width: 100%;
				padding: 9px 20px;
				text-align: left;
				border: 0;
				outline: 0;
				border-radius: 6px;
				background-color: #fff;
				font-size: 15px;
				font-weight: 300;
				color: #8D8D8D;
				-webkit-transition: all 0.3s ease;
				transition: all 0.3s ease;
				margin-top: 16px;
			}


			.btn-primary{
				background-color: #6C757D;
				outline: none;
				border: 0px;
				 box-shadow: none;
			}

			.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
				background-color: #495056;
				outline: none !important;
				border: none !important;
				 box-shadow: none;
			}

			.form-content textarea {
				position: static !important;
				width: 100%;
				padding: 8px 20px;
				border-radius: 6px;
				text-align: left;
				background-color: #fff;
				border: 0;
				font-size: 15px;
				font-weight: 300;
				color: #8D8D8D;
				outline: none;
				resize: none;
				height: 120px;
				-webkit-transition: none;
				transition: none;
				margin-bottom: 14px;
			}

			.form-content textarea:hover, .form-content textarea:focus {
				border: 0;
				background-color: #ebeff8;
				color: #8D8D8D;
			}

			.mv-up{
				margin-top: -9px !important;
				margin-bottom: 8px !important;
			}

			.invalid-feedback{
				color: #ff606e;
			}

			.valid-feedback{
			   color: #2acc80;
			}
		</style>
	</head>
	<body>

		<div class="form-body">
			<div class="row">
				<div class="form-holder">
					<div class="form-content">
						<div class="form-items">
							<h3>My Great Learning - Video Skipper</h3>
							<p>It qill send the video completion acknowledgement to the My Great Learning Server using This Script.</p>
							<p>You Need To Atten The Quiz And You can get the certificate</p>
							<p>Write The Content In "module.json" file</p>
							<form class="requires-validation">

								<div class="col-md-12">
								   <input class="form-control" type="text" name="id" placeholder="USER ID" required>
								</div>
								<br>

								<div class="form-button mt-3">
									<button id="submit" type="submit" class="btn btn-primary">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>