<?php 

function heading(string $head, string $contenu, string $matiere='#'):string 
{
    return '<h2>'. $head .'</h2>
    <p>'. $contenu .'</p>
    <p><a class="btn btn-secondary" href="menu.php?thematics='.$matiere.'" role="button">View details &raquo;</a></p>';
}
function marketing(string $call , string $action, string $lien='#'):string 
{
    return '<h1 class="display-4">'. $call.'</h1>
    <p>'. $action.'</p>
    <p><a class="btn btn-primary btn-lg" href="'.$lien.'" role="button">Learn more &raquo;</a></p>';
}
function nav_item(string $lien, string $titre):string
{
  $classe = 'nav-item';
  if($_SERVER['SCRIPT_NAME'] === $lien){
    $classe .= ' active';
  }
  return'<li class="' . $classe . '" >
     <a class="nav-link" href="' . $lien . '"> ' . $titre .'</a>
  </li>';
}

function card(array $case)
{
    return' <div class="col-md-3">
          <div class="card mb-2 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="'.$case[0].'" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <p class="card-text">'.$case[1].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <form action="/game.php" method="GET">
                  <button type="submit" name="casestudy" value="'.$case[3].'" class="btn btn-sm btn-outline-success">Start</button>
                </form>
                <small class="text-muted">'.$case[2].' min</small>
              </div>
            </div>
          </div>
        </div>'; 
}

/** */
function Question(string $name, string $value, array $data):string
{
    $attribute ='';
    if (isset($data[$name]) && in_array($value,$data[$name])){
        $attribute .='checked';
    }
    return '<input type="radio" name="'.$name.'[]" value="'.$value.'" '.$attribute.'>';
}

function Answer(string $name, string $value, array $data):string
{
    $attribute ='';
    if (isset($data[$name]) && in_array($value,$data[$name])){
        $attribute .='checked';
    }
    return '<input type="radio" name="'.$name.'[]" value="'.$value.'" '.$attribute.'>';
}

function GameQuestion(string $name, string $tran=null , string $img=null ): string
{
  $image=null;
  $pass=null;
  if (isset($img)){
    $image='<img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="'.$img.'" role="img" >';
  }
  if (isset($tran)){
    $pass='<p>'.$tran.'</p>';
  }
  return '<div class="col-md-6 mt-4">
    <div class="card">
        <div class="body-card container">
        <h5 class="card-title"> Question </h5>
            '.$pass.'
            <p> <h6>'.$name.' </h6> </p>
            '.$image.'

        </div>
        <p></p>
        <p></p>
    </div>
  </div>';
}

function GameAnswer(string $A1, string $A2, string $A3=null, string $Q):string
{
  $m=null;
if (isset($A3)){
  $m='<h6> 3 <input type="radio"  name="Answer1" Value="'.$Q.'A3" required> '.$A3.'</h6>';
}
return '<div class="col-md-6 mt-4"">
    <form action="" method="POST">
        <div class="card h-100">
            <div class="body-card container">
                <h5 class="card-title"></h5>
                    <div class="form-group ">
                        <label >
                                <h6> 1 <input type="radio"  name="Answer1" Value="'.$Q.'A1" required> '.$A1.'</h6>
                                <br>
                                <h6> 2 <input type="radio" " name="Answer1" Value="'.$Q.'A2" required> '.$A2.'</h6> 
                                <br>
                                '.$m.'
                        </label>
                        <p></p><br>
                        <p></p><br>
                        <p></p>  
                    </div>
            </div>
        </div>
        <div class="row  p-4 ">
          <button type="submit" class="btn btn-success col-md-12">Sumbit</button>
        </div>
    </form>
</div>';

      
}
function GameCalcul(string $Q, string $name, int $check): string
{
  return '<div class="col-md-6 mt-4">
  <form action="" method="POST" ">
          <div class="card">
              <div class="body-card container">
                  <div class="col p-2">
                      <p>
                        '.$name.'
                      </p>
                  </div>  
              </div>
              <div class="input-group p-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                  <span class="input-group-text">0.00</span>
                </div>
                <input type="text" name="Calcul1" class="form-control" required>
                <input type="hidden" name="check" value='.$check.'>
                <input type="hidden" name="Answer1" value='.$Q.'>
              </div>
          </div>
          <div class="row  p-4 ">
              <button type="submit"  class="form-control col-md-12 btn btn-success">Submit</button>
          </div>
  </form>
</div>';
}    



?>

