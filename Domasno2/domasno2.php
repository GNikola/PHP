<?php 

function translate($str){
    $cyrillic = array('њ','љ','ѕ','ж','ѓ','ќ','ч','џ','ш','а','б','в','г','д','е','з','и','j','к','л','м','н','o','п','р','с','т','у','ф','х','ц');
    
    $latin = array('nj','lj','dz','zh','gj','kj','ch','dj','sh','a','b','v','g','d','e','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','c');

        return str_replace($latin ,$cyrillic, $str);

}

$translated = '';
    if(isset($_POST['form_sub'])){
        $translated = translate($_POST['latin']);
}


       

  ?>
  

<form  method="POST">
    <input type="text" name="latin">
    <input type="text" name="translated" value="<?php print $translated; ?>" />
    <input type="submit" name="form_sub" value="Translate">
</form>