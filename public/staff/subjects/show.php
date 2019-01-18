<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '1';
?>
<div id="content">
     <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php')?>">&laquo;Back to List</a>
     <div class="page show">
          Page ID:
          <?php echo h($id);?>
     </div>
</div>