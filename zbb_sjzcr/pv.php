<?php
require_once './source/class/class_core.php';
$kldapp = C::app();
$kldapp->init();
//pv数
$clickCount  = C::t("click_count")->fetch_real_count();
//投票次数
$canyuCount = C::t("player")->get_canyu_count();
//电视广播票数排行
$zcr = C::t("player")->fetch_player_ph();
?>
<!DOCTYPE>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>深广电十佳主持人投票真实统计</title>
    <style>
        .pv,.canyu{
            font-size:18px;
            margin:10px 5px;
            font-weight:bold;
        }
        .title{
            font-size:20px;
            margin:10px 0;
            font-weight:bold;
        }
        .title_2{
            font-size:18px;
            margin:10px 0; 
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="pv">PV:<?php echo $clickCount?></div>
    <div class="canyu">投票次数:<?php echo $canyuCount?></div>
    <div class="title">排行榜</div>
    <div>
    <?php foreach ($zcr as $key => $v){ ?>
        <div>
        <?php 
            $v['descs'] = str_replace("主持人","",$v['descs']);
            $j  = $key+1;
            echo "第".$j."名&nbsp;&nbsp;";
            if($v['user_group'] == 1){
                echo "(电视|";
                echo $v['descs'];
                echo")";
            }else{
                echo "(广播|";
                echo $v['descs'];
                echo")";
            }
            echo $v['name'].":".$v['poll_num']
        ?>
        </div>
    <?php } ?>
    </div> 
</body>
</html>