<?php require 'inc/head.php';
if (!isset($_SESSION['loginName'])){
    header('Location:login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
if (!empty($_SESSION['qtyCookie'])) {
    foreach ($_SESSION['qtyCookie'] as $id => $qtty) {
        echo $qtty . '<br>';
    }
    }else{
    echo 'Aucun article';
}
      ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
