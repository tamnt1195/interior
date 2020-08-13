<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "model/autoLoad.inc.php";
        
        // $list = product::all();

        // foreach($list as $row) {
        //     echo $row['name'].'<br>';
        // }

        $list2 = product::where('name', 'bàn');

        // foreach($list2 as $row) {
        //     echo $row['name'].'<br>';
        // }
        
        echo '<pre>';
        // print_r($list);
        print_r($list2);
        echo '</pre>';
    ?>
</body>
</html>