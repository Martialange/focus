<?php 
$title= 'CaseConsulting';
require 'data/aprecu_Case.php';
require 'elements/header.php';


?>

<!-- Main jumbotron for a primary marketing message or call to action -->

<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="bg-img"  style="background-image : url(/img/finance.jpg) ;width:100% ;height:460px ">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h1 data-animation="fadeInUp" class="display-2" data-delay="400ms">Wellcome to our <br>Online University</h1>
                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php foreach($marketing as $call=>$action ):?>
    <div class="container">
        <?=marketing ($call,$action)?>  
    </div>
<?php endforeach ?>
    
    

<div class="container">
<!-- Example row of columns -->
    <div class="row">
    <?php foreach($headings as $head =>$cont ):?>
        <?php foreach ($Matiere as $head1=>$cont1):?>
            <?php if($head===$cont1):?>
                <div class="col-md-4">
                    <?=heading($head,$cont,$head1);?>
                </div>
            <?php endif?>
        <?php endforeach?>
    <?php endforeach?>
    </div>

</div> 
<?php require 'elements/footer.php';?>
