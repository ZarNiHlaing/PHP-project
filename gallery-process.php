<?php
echo "<pre>";
$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

$error = false;
foreach ($_FILES["upload"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFileName = $saveFolder . "/" . uniqid() . "." . $ext;
    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {
        $error = true;
    }
}

if ($error === false) {
    header("Location:gallary-result.php");
}
// print_r($_FILES);

// -------end--------


// Explannation and documentation
// <?php
// echo "<pre>";

// photos folder shi ma shi sit.....0777 permission pay
// $saveFolder = "photos";
// if (!is_dir($saveFolder)) {
//     mkdir(($saveFolder), 0777);
// }

// // extension htoke phoe first way
// $arr = explode(".",$_FILES["upload"]["name"]);
// echo end($arr);

// extension htoke phoe second way
// print_r(pathinfo($_FILES["upload"]["name"])["extension"]);


// $arr= pathinfo($_FILES["upload"]["name"])["extension"];
// $saveFileName = $saveFolder."/".uniqid().".".$arr;

// // file thein phoe file name loe .....upload array in name array
// // $saveFileName = $saveFolder."/".uniqid()."_".$_FILES["upload"]["name"];

// // file ta gae thein...from / to naku loe.....true contion so yin origin file ko go
// if(move_uploaded_file($_FILES["upload"]["tmp_name"],$saveFileName)){
//     // header("Location:gallery.php");
// } Ta ku chin


// $error = false;
// // loop
// foreach ($_FILES["upload"]["name"] as $key => $name) {
//     $arr = pathinfo($name)["extension"];
//     $saveFileName = $saveFolder . "/" . uniqid() . "." . $arr;
//     if (move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {
//         $error = true;
//     }
// }

// if ($error === false) {
//     header("Location:gallery.php");
// }
// print_r($_FILES);
