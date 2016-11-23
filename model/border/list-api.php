<?php
//require_once("./lib/dbcon.php");

$keynum = $_GET["keynum"];
$viewnum = $_GET["viewnum"];

$data_array = array('list'=> array());

$list = [
  [24,2,'하카카카카','길동이',3,'2016/12/23/23:23'],
  [25,2,'5하카카카카','길동이',3,'2016/12/23/23:23'],
  [26,2,'6하카카카카','길동이',3,'2016/12/23/23:23'],
  [27,2,'7하카카카카','길동이',3,'2016/12/23/23:23'],
  [28,2,'8하카카카카','길동이',3,'2016/12/23/23:23'],
  [6,0,'6하카카카카','길동이',3,'2016/12/23/23:23'],
  [7,0,'7하카카카카','길동이',3,'2016/12/23/23:23'],
  [8,0,'8하카카카카','길동이',3,'2016/12/23/23:23'],
  [9,0,'9하카카카카','길동이',3,'2016/12/23/23:23'],
  [10,0,'10하카카카카','길동이',3,'2016/12/23/23:23'],
  [11,1,'정보게시판 재밌는 게시물','길동이',3,'2016/12/23/23:23'],
  [12,1,'으아아아오','길동이',3,'2016/12/23/23:23'],
  [13,1,'우키키키','길동이',3,'2016/12/23/23:23'],
  [14,1,'하카카카카','길동이',3,'2016/12/23/23:23'],
  [29,2,'9하카카카카','길동이',3,'2016/12/23/23:23'],
  [30,2,'10하카카카카','길동이',3,'2016/12/23/23:23'],
  [31,3,'메모 게시판 재밌는 게시물','길동이',3,'2016/12/23/23:23'],
  [32,3,'으아아아오',3,'2016/12/23/23:23'],
  [1,0,'자유게시판 재밌는 게시물','길동이',3,'2016/12/23/23:23'],
  [2,0,'으아아아오','길동이',3,'2016/12/23/23:23'],
  [3,0,'우키키키','길동이',3,'2016/12/23/23:23'],
  [4,0,'하카카카카','길동이',3,'2016/12/23/23:23'],
  [5,0,'5하카카카카','길동이',3,'2016/12/23/23:23'],
  [15,1,'5하카카카카','길동이',3,'2016/12/23/23:23'],
  [16,1,'6하카카카카','길동이',3,'2016/12/23/23:23'],
  [17,1,'7하카카카카','길동이',3,'2016/12/23/23:23'],
  [18,1,'8하카카카카','길동이',3,'2016/12/23/23:23'],
  [19,1,'9하카카카카','길동이',3,'2016/12/23/23:23'],
  [20,1,'10하카카카카','길동이',3,'2016/12/23/23:23'],
  [21,2,'생활게시판 재밌는 게시물','길동이',3,'2016/12/23/23:23'],
  [22,2,'으아아아오','길동이',3,'2016/12/23/23:23'],
  [23,2,'우키키키','길동이',3,'2016/12/23/23:23']
];

foreach ($list as $x){
    if($x[1] == $keynum){
      $data = array(
        "id" => $x[0],
        "type" => $x[1],
        "title" => $x[2],
        "writer" => $x[3],
        "hit" => $x[4],
        "date" => $x[5]
      );
      array_push($data_array['list'], $data);
    }
}

echo json_encode($data_array,JSON_UNESCAPED_UNICODE);
?>