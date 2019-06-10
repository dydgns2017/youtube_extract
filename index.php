<?php
function outputJSON($msg, $status = 'error'){
        header('Content-Type: application/json');
        die(json_encode(array(
                'data' => $msg,
                'status' => $status
        )));
}

$services['download'] = "_downloadlink";
function _downloadlink(){
	if(isset($_POST['link']) && strlen($_POST['link']) > 10){
		$link = $_POST['link'];
		die(system("bash youtube_extract.sh $link"));
	} else {
		die("none link");
	}
}

$services['getlist'] = "_getlist";
function _getlist(){
	$files = scandir("./temp");
	outputJSON($files, "success");
}

if(isset($_POST['func'])){
	$func = $_POST['func'];
	call_user_func($services[$func]);
} else {
	die("잘못된 서비스 요청");
}
?>
