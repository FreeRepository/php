<?php
session_start();
if (isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views'] + 1;
}else{
    $_SESSION['views'] = 1;
};
?>

<html>
<head>
    <meta charset="utf-8">
    <title>session show</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];

if ($_SESSION['views'] == 7){
    unset($_SESSION['views']);
};
?>

</body>
</html>