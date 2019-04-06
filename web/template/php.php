<?php
//http://mywebsite.com/asdfasdfasdfasdfsdf.php?athing=athing&anyothing=anothher
if($_GET["num"] == 1){
    echoOne("one");
}elseif($_GET["num"] == 2){
    echoOne("two");
}else{
    echoOne("Not one or two");
}

function echoOne(string $string){
    echo "<h1>" . $string . "</h1>"; //=> <h1>one</h1>
}
?>
