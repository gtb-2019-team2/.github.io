


<!DOCTYPE html >
    <html>
    <head>
        <title>
            title
        </title>
    </head>

    <body>
        <header>
            <h1>
                フォームの送信
            </h1>
        </header>
        <main>
         
       
        <?php
	            header('Access-Control-Allow-Origin: *');
	            class Hotpepper {
                    /*URL*/
                    const URL = 'https://webservice.recruit.co.jp/hotpepper/gourmet/';
                    /*APIキー*/
                    private $apiKey = '060d84c575777615';
                    /*APIバージョン*/
                    private $apiVersion = 'v1';

                    /*URLへの接続*/
                    public function send($params)
                    {
                        //各種入力した値を用いてAPIに接続用URL設定
                        //$params 駅名
                        //$params2 ジャンルコード(予定)
                        $url = sprintf("%s%s/?key=%s&keyword=%s&range=3&count=10&format=json",
                            self::URL,
                            $this->apiVersion,
                            $this->apiKey,
                            $params
                        );

                        //APIに接続
                        $sh = file_get_contents($url);
                        
                        
                        //取得したjsonデータを配列に入れる
                        return  json_decode($sh,true);
                    }
                }

                class Search
                {

                    public function listView($comment)
                    {
                        $results = $this->mainSearch($comment);
                        echo '<br>';
                        $count = 0;
                        for ($i = 1; $i < 100; $i++)
                        {

                            if($results[$i]['station_name'] === $comment){
                                $count++;
                                //echo $count;
                                $Buffer="<div class='shop_list_cell cell_{$count}'>
                                <div class=right_area>";
 
 
                                // 店名
                                $Buffer.="<div class='shop_info_2 info_02' id=shop_info><h2 class=recieve_shop_name_2 id=s_name>{$results[$i]['name']}";
                                $Buffer.='</h2>';
 
 
                                //ジャンル、タグ
                                $Buffer.="<p class=recieve_shop_genre_2>{$results[$i]['genre']['name']}";
                                $Buffer.='</p></div>';
 
 
                                //住所
                                $Buffer.="<div class=recieve_shop_address>{$results[$i]['address']}";
                                $Buffer.='</div>';
 
                                //画像など
                                $Buffer.="<div class=img-wrap><img class=recieve_list_photo src={$results[$i]['photo']['mobile']['l']} alt=shop_photo width=845px></div>";
 
 
                                echo $Buffer.='</div></div>';
                            }

                            // if($results[$i]['station_name'] === $comment){
                            //     $count++;
                            //     //echo $count;
                            //     $Buffer="<div class='shop_list_cell cell_{$count}'>
                            //     <div class=right_area>";
 
 
                            //     // 店名
                            //     $Buffer.="<div class='shop_info_2 info_02' id=shop_info><h2 class=recieve_shop_name_2 id=s_name>{$results[$i]['name']}";
                            //     $Buffer.='</h2>';
 
 
                            //     //ジャンル、タグ
                            //     $Buffer.="<p class=recieve_shop_genre_2>{$results[$i]['genre']['name']}";
                            //     $Buffer.='</p>';
 
 
                            //     //住所
                            //     $Buffer.="<div class=recieve_shop_address>{$results[$i]['address']}";
                            //     $Buffer.='</div>';
 
                            //     //画像など
                            //     $Buffer.="<div class=img-wrap><img class=recieve_list_photo src={$results[$i]['photo']['mobile']['l']} alt=shop_photo width=845px></div>";
 
 
                            //     echo $Buffer.='</div></div>';
                            // }

                            // if($results[$i]['station_name'] === $comment){
                            //     $count++;
                            //     //echo $count;
                            //     $Buffer="<div class=right_area shop{$count}>";
         
         
                            //     //画像など
                            //     $Buffer.="<img class=recieve_list_photo src={$results[$i]['photo']['mobile']['l']} alt=shop_photo width=845px>";
         
         
                            //     // 店名
                            //     $Buffer.="<div class=shop_info_2 info_02 id=shop_info info_01><h2 class=recieve_shop_name_2 id=s_name>{$results[$i]['name']}";
                            //     $Buffer.='</h2>';         
    
                            //     //ジャンル、タグ
                            //     $Buffer.="<p class=recieve_shop_genre_2>{$results[$i]['genre']['name']}";
                            //     $Buffer.='</p>';
         
         
                            //     //住所
                            //     $Buffer.="<div class=recieve_shop_address>{$results[$i]['address']}";
                            //     $Buffer.='</div>';
         
         
                            //     echo $Buffer.='</div></div>';
                            // }
                                // if($results[$i]['station_name'] === $comment){
                                //     $count++;
                                //     $Buffer='<div>';
                                //     $Buffer.="<ul class=shop{$count}>";
                                //     $Buffer.="<li class=aaa>{$results[$i]['name']}"; // 店名 
                                //     $Buffer.='</li>';
                                //     $Buffer.="<li class=bbb>{$results[$i]['genre']['name']}"; //ジャンル、タグ
                                //     $Buffer.='</li>';
                                //     $Buffer.="<li class=ccc>{$results[$i]['address']}"; //住所
                                //     $Buffer.='</li>';
                                //     $Buffer.="<li class=ddd><img src={$results[$i]['photo']['mobile']['l']}>"; //画像など
                                //     $Buffer.='</li>';
                                //     $Buffer.='</ul>';
                                //     echo $Buffer.='</div>';
                                // }
                            
                            if(empty($results[$i+1])){
                                break;
                            }
                            
                        }
                        echo '</br>';
                    }

                

                    public function mainSearch($comment)
                    {  
                        $hp = new Hotpepper();
                        if($comment != NULL)
                        {
                            echo $comment;
                            $array = $hp->send($comment);
                            $count = 0;
                            $results = $array['results']['shop'];
                            $count = 0;
                            return $results;
                        }     
                    }
                    
                }


                
                if(isset($_POST["comment1"]))
                {
                    
                    $comment = $_POST["comment1"];
                    $S = new Search();
                    $S->listView($comment);
                }
                else{
                    $alert = "<script type='text/javascript'>alert('駅名を入れてください');</script>";
                    echo $alert;
                }
                
                $comment = NULL;
            ?>

            
        </main>
    </body>

</html>