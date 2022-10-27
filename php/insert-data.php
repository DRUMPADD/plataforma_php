<?php
    include 'connection.php';

    $fecha_sol = $_POST["fecha_sol"] ?? null;
    $fecha_ini = $_POST["fecha_ini"] ?? null;
    $fecha_cie = $_POST["fecha_cie"] ?? null;
    $empresa = $_POST["empresa"] ?? null;
    $sup_comp = $_POST["sup_comp"] ?? null;
    $clase_perm = $_POST["clase_perm"] ?? null;
    $folio_pptr = $_POST["folio_pptr"] ?? null;
    $tr = $_POST["tr"] ?? null;
    $sit_tr = $_POST["sit_tr"] ?? null;
    $cat_tr = $_POST["cat_tr"] ?? null;
    $desc_tr = $_POST["desc_tr"] ?? null;
    $enc_sit = $_POST["enc_sit"] ?? null;
    $enc_area = $_POST["enc_area"] ?? null;

    echo $fecha_sol;
    echo $fecha_ini;
    echo $fecha_cie;
    echo $empresa;
    echo $sup_comp;
    echo $clase_perm;
    echo $folio_pptr;
    echo $tr;
    echo $sit_tr;
    echo $cat_tr;
    echo $desc_tr;
    echo $enc_sit;
    echo $enc_area;
    
    $arr_ans = array(
        'a' => $fecha_sol,
        'b' => $fecha_ini,
        'c' => $fecha_cie,
        'd' => $empresa,
        'e' => $sup_comp,
        'f' => $clase_perm,
        'g' => $folio_pptr,
        'h' => $tr,
        'i' => $sit_tr,
        'j' => $cat_tr,
        'k' => $desc_tr,
        'l' => $enc_sit,
        'm' => $enc_area,
    );

    echo json_encode($arr_ans);
?>