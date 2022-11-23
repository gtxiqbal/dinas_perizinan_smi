<?php
    include "../config/config.php";
        @session_start();
        $username= $_SESSION['username']; 

        $query=mysql_query("SELECT * FROM tbl_user WHERE username='".$username."'")or die(mysql_error());
        $data = mysql_fetch_array($query);

        $level = $data['level'];
              
        if ($level=="1"){
?>

<html>

<?php include 'shared/head.php'; ?>



<body class="theme-red">
    <?php include 'shared/page_loader.php'; ?>

    <?php include 'shared/overlay.php'; ?>
    
    <?php include 'shared/search_bar.php'; ?>

    <?php include 'shared/top_bar.php'; ?>

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
        <?php include 'shared/user_info.php'; ?>

        <?php include 'shared/menu.php'; ?>

        <?php include 'shared/footer.php'; ?>
        </aside>
        <!-- #END# Left Sidebar -->

               
    </section>

    <section class="content">
        <div class="container-fluid">

        <?php include 'shared/hal.php'; ?> 
        
        </div>
    </section>

    <?php include 'shared/javascript.php'; ?>  

</body>

</html>


<?php
    }else{
        echo "<script> alert ('Maaf Silahkan anda lewati proses LOGIN terlebih dahulu!!!'); document.location.href='index.php'; </script>";
    }
?>