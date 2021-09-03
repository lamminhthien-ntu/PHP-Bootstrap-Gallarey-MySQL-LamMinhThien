<?php include('connect_mysql.php') ?>
<?php include('bootstrap_cdn.php') ?>
<?php include('navbar_searchbox.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php $keyword = $_GET['keyword'];

?>

<body>

    <div class="container">
        <div class="row">

            <?php
            $sql = "SELECT * FROM `images` WHERE title LIKE \"%$keyword%\";";
            echo $sql;
            $get_data = mysqli_query($link, $sql) or die('Could not querry');
            ?>

            <?php while ($row = mysqli_fetch_assoc($get_data)) {  ?>

                <?php echo "<div class='col-md-3' style='margin: 40px;'>" ?>
                <?php echo "           <div class='card' style='width: 18rem;''>  "; ?>
                <?php echo '               <img class="card-img-top" src=' . $row['filepath'] . ' alt="Card image cap">  '; ?>
                <?php echo '               <div class="card-body">   '; ?>
                <?php echo '                    <h5 class="card-title">  '; ?>
                <?php echo $row['title']; ?>
                <?php echo  "</h5>";  ?>
                <?php echo     '<p class="card-text">' . $row['description'] . '     </p>'; ?>

        </div>
    </div>
    <?php echo       "<br> </div>"  ?>

<?php   } ?>
</div>
</div>

</body>

</html>