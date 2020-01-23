<?php
require_once('ReaderFactory.class.php');
?>
<html lang="ja">
<head>
<title>作曲家と作品たち</title>
</head>

<body>
<?php
    $filename = 'Music.csv';

    $factory = new ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
?>

</body>
</html>
