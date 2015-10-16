<?php include('header.php'); ?>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div id="page" class="box">
          <?php 
            $readme = file_get_contents(ROOT . '/README.md');
            $Parsedown = new Parsedown();
            echo $Parsedown->text($readme);
          ?>
        </div>  
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>