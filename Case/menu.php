<?php 
$title= 'Menu';
$thematics=empty($_GET['thematics'])?null:$_GET['thematics'];
require 'data/aprecu_Case.php';
require 'elements/header.php';
?>

<main role="main">

  <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12 p-4">
                    <div class="section-heading text-center mx-4 wow fadeInUp" data-wow-delay="300ms">
                        <span>The Best</span>
                        <h3>Collection of <?=$thematics?> Business Cases</h3>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php foreach ($$thematics as $case ):?>
                  <?=card($case);?>
              <?php endforeach ;?>
            </div>
         </div>
  </div> 

</main>


<?php require 'elements/footer.php';?>
