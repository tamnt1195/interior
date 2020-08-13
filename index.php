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
        

        $list2 = product::search('name', 'bàn', 'order by', 'date', 'asc', 'limit', 3);

        foreach($list2 as $row) {
            echo $row->name.'<br>';
        }

    ?>
</body>
</html>