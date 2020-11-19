<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
            include 'head.php';
        ?>
        
    </head>
    <body>
    <?php
        require('navbar.php');
        require_once('dbconfig.php');
        for($i=6;$i<9;$i++)
        {
            $stmt = $connect->prepare("SELECT * FROM registration WHERE id = ?");
            $stmt->bind_param('i', $i);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_object();
            require('card.php');
        }
    ?>
    </body>
</html>