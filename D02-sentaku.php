<pre style="font-size:1.1em">
あなたは洗濯物を干すかどうか、その日の気温と湿度で決めることにしました。
暖かくて乾燥してる日を選んで干したいところですが、家の向には公園があり、そういった日は砂ぼこりが舞ってしまいます。
そこであなたは干すためのルールを決めました。

気温が 25 ℃以上の日、もしくは湿度が 40 % 以下の日は干します。それ以外の日は干しません。
ただし、上記の干す条件を満たす日のうち、気温が 25 ℃以上かつ、湿度 40 % 以下の日は砂ぼこりが舞うので干しません。

例えば、気温が 30 ℃で湿度が 60 % の日は温かいので干しますが、同じ気温で湿度が 20 % の日は砂ぼこりが舞うので干しません。
その日の気温と湿度が与えられるので、干すかどうか判断してください。

干す場合は "Yes" 干さない場合は "No" を出力してください。

入力例1
25 50
出力例1
Yes
入力例2
10 20
出力例2
Yes
入力例3
20 50
出力例3
No
<?php
$str = '25 50'; 
$str = '10 20';
$str = '20 50';