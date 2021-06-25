<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
ini_set("memory_limit","512M");
?>
	<?PHP
		//向google cloud plateform申請API帳號(以前不用$，但現在要，但有12個月300美金的體驗金)
		$url="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=25.1160725,121.5132288&radius=500&type=restaurant||cafe||bar&key=";
		//取得某定點方圓200公尺的餐廳等的json檔
		$contents = file_get_contents($url);
		//echo ($contents);
		

		$fp=fopen($url,"r");
		$fp1=fopen("aa.txt","w");
		$fp2=fopen("place.txt","a");
		while (!feof($fp))
		{
			$str=fgets($fp);
			fputs($fp1,$str);
		}
		fclose($fp);
		$x="\"name\" : \"";
		//取得店家名稱
		$y="\"photo_reference\" : \"";
		//取得店家照片依據
		$z="\"next_page_token\" : \"";
		//判斷是否有NEXT PAGE的依據(GOOGLE現在一次只能搜20筆(以前200筆))
		$a="\"vicinity\" : \"";
		//地點
		$b="\"types\" : [ \"";
		//類型
		$fp1=fopen("aa.txt","r");
		while ($str=fgets($fp1))
		{
			//echo $str."<br>";
			if (stristr($str,$z))
			{
				//echo $str;
				$KeyW=explode("\"",$str);
				//網址加NEXT_PAGE依據，就是下一頁的URL
				$url="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=25.1160725,121.5132288&radius=500&type=restaurant||cafe||bar&key=&pagetoken=".$KeyW[3]."<br>";
				echo $url;
			}
			if (stristr($str,$x))
			{
				$ans=explode("\"",$str);
				echo $ans[3]."<br>";
				fputs($fp2,$ans[3].PHP_EOL);
			}
			if (stristr($str,$y))
			{
				$ans1=explode("\"",$str);
				//echo $ans1[3]."<br>";
				//照片依據加上GOOGLE釋出的網址，就可以取得照片
				echo "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=".$ans1[3]."&key="."<br>";
				$ans1="https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=".$ans1[3]."&key=";
				fputs($fp2,$ans1.PHP_EOL);
			}
			if (stristr($str,$a))
			{
				$add=explode("\"",$str);
				echo $add[3]."<br>";
				fputs($fp2,$add[3].PHP_EOL);
			}
			if (stristr($str,$b))
			{
				$type=explode("\"",$str);
				echo $type[3]."<br>";
				fputs($fp2,$type[3].PHP_EOL);
			}
		}
		fclose($fp1);
		fclose($fp2);
		
		
	
	?>
</body>
</html>
