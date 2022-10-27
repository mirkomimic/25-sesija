<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search/style.css">
    <title>Korpa</title>
</head>

<body>

    <h3>Proizvodi u korpi</h3>
    <table border="1" cellspacing="0" cellpadding="2px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Remove by id</th>
                <th>Remove by index</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            foreach ($korpa as $pr) :
            ?>
                <tr>
                    <td><?php echo $pr['id']; ?></td>
                    <td><?php echo $pr['name']; ?></td>
                    <td><?php echo $pr['price']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id2" value="<?php echo $pr['id']; ?>">
                            <input type="submit" name="submitID" value="Remove">
                        </form>
                    </td>
                    <td>
                        <form action="" method="POST">
                            <input type="text" name="index" value="<?php echo $index; $index++; ?>">
                            <input type="submit" name="submit1" value="Remove Item ">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
          <td colspan="2">Ukupno: <?= $komada; ?></td>
          <td colspan="3"><?= $ukupnoKorpa; ?></td>
        </tfoot>
    </table><br>
    <form action="" method="POST">
        <input type="submit" name="submit" value="remove">
    </form>
    <a href="prodavnica.php"><--Back</a>
</body>
</html>