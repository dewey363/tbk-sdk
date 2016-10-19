<?php 

include "TopSdk.php";
include "config.php";

$c = new TopClient;
$c ->appkey = APPKEY;
$c ->secretKey = APPSECRET;

//详情简版
// $req = new TbkItemInfoGetRequest;
// $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
// $req->setPlatform("1");
// $req->setNumIids("43022193676");
// $resp = $c->execute($req);

//关联商品
// $req = new TbkItemRecommendGetRequest;
// $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
// $req->setNumIid("41008598871");
// $req->setCount("20");
// $req->setPlatform("1");
// $resp = $c->execute($req);

//获取淘宝联盟选品库列表
// $req = new TbkUatmFavoritesGetRequest;
// $req->setPageNo("1");
// $req->setPageSize("20");
// $req->setFields("favorites_title,favorites_id,type");
// $req->setType("1");
// $resp = $c->execute($req);

//获取淘宝联盟选品库的宝贝信息
$req = new TbkUatmFavoritesItemGetRequest;
//1：PC，2：无线，默认：１
$req->setPlatform("1");
//页大小
$req->setPageSize("20");
//推广位id，需要在淘宝联盟后台创建；且属于appkey备案的媒体id（siteid）
$req->setAdzoneId("63636190");
//自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
$req->setUnid("lychao520");
//选品库favorite的id
$req->setFavoritesId("1489034");
//第几页，默认：1，从1开始计数
// $req->setPageNo("1");
$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,click_url,nick,seller_id,volume,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type");
$resp = $c->execute($req);

echo(json_encode($resp));

