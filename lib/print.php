<?php
function print_title(){
	if(isset($_GET['id'])){
		echo htmlspecialchars($_GET['id']);
	}
}

function print_description(){
	if(isset($_GET['id'])){
		$basename=basename($_GET['id']);
		echo (file_get_contents("data/".$basename));
	}else{
		echo "플레이리스트 메모입니다.";
	}
}

function print_list(){
	$list = scandir('./data');
	$i=0;
	while($i<count($list)){
		$title = ($list[$i]);
		if($list[$i] != '.') {
			if($list[$i] != '..'){
				echo "<li><a href='index.php?id=$title'>$title</a></li>\n";	
			}
		}
		$i=$i+1;
	}	
}
?>
