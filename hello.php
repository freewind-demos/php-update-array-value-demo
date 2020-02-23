<?php

$obj = array(
    "aaa" => array(
        "required" => true
    )
);

foreach ($obj as $key => $value) {
    $aaa[$key]['required'] = false;
}

print(json_encode($obj));
?>
