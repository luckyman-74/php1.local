<html>
<head>
    <title>Игра в "города"</title>
</head>
<body>
<?php



function city ($myCity,$encoding = "UTF-8"){
    $cities = ['Москва', 'Челябинск', 'Калининград', 'Донецк', 'Душанбе', 'Ереван', 'Новосибирск', 'Амстердам', 'Екатеринбург', 'Галич'];
    $countChar = mb_strlen($_POST['myCity'])-1;
    $endChar = mb_substr($_POST ['myCity'],$countChar,1);
    $endChar = mb_strtolower($endChar);

    foreach ($cities as $city){
    if ($endChar==mb_strtolower(mb_substr($city,0,1,$encoding))){
        return $city;
        break;
        }
    }
}
?>
<h3>Игра в "города"</h3>
<p>Используйте города 'Москва', 'Челябинск', 'Калининград', 'Донецк', 'Душанбе', 'Ереван', 'Новосибирск', 'Амстердам', 'Екатеринбург', 'Галич'.</p>
<form action="index.php" method="post">
    <label for="myCity">Введите названиe города:</label>
    <input type="text" name="myCity">
    <input type="submit" value="Поехали">
<?php
echo city($myCity);
?>
</form>
</body>
</html>