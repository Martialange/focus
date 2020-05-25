<?php 

$ficher=file_get_contents(__DIR__. DIRECTORY_SEPARATOR . 'data' .DIRECTORY_SEPARATOR . 'Case_Medical.tsv');
$ficher1=file_get_contents(__DIR__.DIRECTORY_SEPARATOR. 'data' .DIRECTORY_SEPARATOR.'Code_Medical.tsv');
$lignes= explode(PHP_EOL, $ficher);
foreach ($lignes as $k => $ligne){
    $lignes[$k]=explode("\t", trim($ligne));
}
require 'elements/header.php';
?>


<?php foreach($lignes as $v):?>
    <?php if (count($v)===1):?>
        <h2><?=$v[0]?></h2>
    <?php else:?>
        <div class="row">
            <div class="col-md-3">
                <p>
                    <strong><?=$v[0];?></strong><br>
                    <?=$v[1];?>
                </p>
            </div>
            <div class="col-md-3">
                <?php if(isset($v[2])):?>
                        <?=$v[2]?>
                    <?php endif?>  
            </div>
            <div class="col-md-3">
                <p>
                    <?php if(isset($v[3])):?>
                        <?=$v[3]?>
                    <?php endif?>    
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    <?php if(isset($v[4])):?>
                        <?=$v[4]?>
                    <?php endif?> 
                    
                </p>
            </div>
        </div>
    <?php endif?>
<?php endforeach?>


