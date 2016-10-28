<?php

        function getLottoNumbers($max_number, $ignor_numbers, $maxn, $max_line, $max_lines, $unique_numbers) {

                                                        $line = array();
                                                        $lottery = array();

                                                        $finalNumbers = array();
                                                        while ( $max_lines < $max_line)
                                                        {
                                                                srand((double) microtime() * 1000000);
                                                                while (1>0) {
                                                                        $lottery[] = rand(1, $max_number);
                                                                        $lottery = array_unique($lottery);
                                                                        if( in_array($lottery, $line ) ){
                                                                        }else{
                                                                                if (sizeof($lottery) == $maxn) {
                                                                                        sort($lottery);
                                                                                        $line[]=$lottery;
                                                                                        break;
                                                                                }
                                                                        }
                                                                }
                                                                unset($lottery);
                                                                $max_lines++;
                                                        }
                                                        sort ( $line );
                                                        for( $i=0; $i < sizeof($line); $i++ ){
                                                                $each_line = $line[$i];
                                                                for( $j=0; $j < sizeof( $each_line ); $j++ )
                                                                {
                                                                        $finalNumbers[] = $each_line[$j];
                                                                }
                                                        }
                                                        return $finalNumbers;
                                                }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>UK Random Lotto Numbers Generator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta itemprop="url" content="http://www.mustardseedmedia.co.uk/lotto/">
		<meta name="description" content="Mustard Seed Media Random Lotto Numbers Generator">
		<meta property="article:publisher" content="http://www.mustardseedmedia.co.uk">
		<meta property="og:site_name" content="Mustard Seed Media Lotto Numbers">
		<meta property="og:type" content="article">
		<meta property="og:description" content="Mustard Seed Media Random Lotto Numbers Generator">
		<meta property="og:url" content="http://www.mustardseedmedia.co.uk/lotto/">
		<meta property="og:image" content="">
		<link rel="stylesheet" type="text/css" href="minimal.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> 
</head>
<body>
	<div class="contain_all">
		<header class="home_head">
                        <div class="contain">
                                <p>
                                <h3>Random Lotto Numbers Generator </h3>
                                </p>
                                <div class="content_left">
                                        <p>Eurolottery Numbers:</p>
                                </div>
                                <div class="content_right">
					<?php

                                                $mainNumbers = getLottoNumbers(50, array(), 5, 1, 0, 4);
                                                $luckyStars = getLottoNumbers(12, array(), 2, 1, 0, 2);

                                                echo("<h3>");
                                                $count=0;
                                                while($count < sizeof($mainNumbers)) {
                                                        echo($mainNumbers[$count]."&nbsp;");
                                                        $count++;
                                                }
                                                echo("<span style='color:orange;'>");
                                                $count=0;
                                                while($count < sizeof($luckyStars)) {
                                                        echo($luckyStars[$count]."&nbsp;");
                                                        $count++;
                                                }
                                                echo("</span>"); 
                                                echo("</h3>");

                                        ?>
                                </div>
                                <div class="content_left">
                                        <br/><br/>
                                        <p>Lotto Numbers:</p>
                                </div>
				<div class="content_left">
                                        <br/><br/>
                                        <p>Lotto Numbers:</p>
                                </div>
                                <div class="content_right">
                                        <br/><br/>
                                        <?php

                                                $mainNumbers = getLottoNumbers(59, array(), 6, 1, 0, 4);

                                                echo("<h3>");
                                                $count=0;
                                                while($count < sizeof($mainNumbers)) {
                                                        echo($mainNumbers[$count]."&nbsp;");
                                                        $count++;
                                                }
                                                echo("</h3>");

                                        ?>
                                </div>

                        </div>
                </header>
        </div>
</body>
</html>


