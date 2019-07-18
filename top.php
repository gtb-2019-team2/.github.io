


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>テスト</title>
        
    </head>
    <body>
        <header>
            <h1>
                フォームの送信
            </h1>
        </header>
        <main>
            <form action="top.php" method="post">
                <input type="text" name="comment"><br>
                <input type="submit"  value="送信">
            </form>
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
                        $url = sprintf("%s%s/?key=%s&range=3&keyword=%s&count=100&format=json",
                            self::URL,
                            $this->apiVersion,
                            $this->apiKey,
                            $params
                        );

                        $sh = file_get_contents($url);
                        echo $sh;
                    
                        // if(!extension_loaded('curl'))
                        // {
                        //     exit('cURL etension not loaded.');
                        // }
                        // $ch = curl_init();
                        // curl_setopt($ch, CURLOPT_URL, $url);
                        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        // curl_setopt($ch, CURLOPT_VERBOSE, false);
                        // curl_setopt($ch, CURLOPT_HEADER, false);
                        // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                        // echo $ch;
                        // $response = curl_exec($ch);
                        // echo $response;
                        // if($response === false)
                        // {
                        //     exit('errorno:' . curl_getinfo($ch, CURLINFO_HTTP_CODE));
                        // }
                    
                        return  $sh;  //json_decode($response,true);
                    }
                }

                if(isset($_POST["comment"]))
                {
                    $hp = new Hotpepper();
                    $comment = $_POST["comment"];
                    $hp->send($comment);
                }
            ?>
        </main>
    </body>

</html>