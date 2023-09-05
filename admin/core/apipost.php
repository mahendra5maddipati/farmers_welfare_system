<?php
require_once('../core/Database.php');
$db = Database::getInstance();
$con = $db->getConnection();
if (isset($_REQUEST['url'])) {
    if ($_REQUEST['url'] === "crop") {
        echo insertCrop($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "market") {
        echo insertMarketPrice($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "seed") {
        echo insertSeed($_REQUEST, $_FILES) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "pesticide") {
        echo insertPesticides($_REQUEST, $_FILES) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "fertilizer") {
        echo insertFertilizer($_REQUEST, $_FILES) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "soilfertility") {
        echo insertSoilFertility($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "area") {
        echo insertArea($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "weather") {
        echo insertWeather($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "scheme") {
        echo insertScheme($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "fund") {
        echo insertFund($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "loan") {
        echo insertLoan($_REQUEST) ? "true" : "false";
    }
    elseif ($_REQUEST['url'] == "equipment") {
        echo insertEquipment($_REQUEST) ? "true" : "false";
    }
} else {
    return false;
}

function insertCrop($crop) {
    global $con;
    $name_en = $crop['name_en'];
    $comments_en = $crop['comments_en'];
    $name_te = $crop['name_te'];
    $comments_te = $crop['comments_te'];
    $insertEnglish = "INSERT INTO crop_en VALUES(NULL, '$name_en', '$comments_en')";
    $insertTelugu = "INSERT INTO crop_te VALUES(NULL, '$name_te', '$comments_te')";
    if ($con->query($insertEnglish) && $con->query($insertTelugu)) {
        return true;
    } else {
        return false;
    }
}

function insertMarketPrice($marketprice) {
    global $con;
    $cropprice = $marketprice['cropprice'];
    $cropname_en = $marketprice['cropname_en'];
    $district_en = $marketprice['district_en'];
    $comments_en = $marketprice['comments_en'];
    $cropname_te = $marketprice['cropname_te'];
    $district_te = $marketprice['district_te'];
    $comments_te = $marketprice['comments_te'];
    $insertEnglish = "INSERT INTO marketprice_en VALUES(NULL, '$cropname_en', '$cropprice', '$district_en', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO marketprice_te VALUES(NULL, '$cropname_te', '$cropprice', '$district_te', '$comments_te', NOW())";
    if ($con->query($insertEnglish) && $con->query($insertTelugu)) {
        return true;
    } else {
        return false;
    }
}

function insertSeed($seed, $files) {
    global $con;
    $id = uniqid("IMG_");
    $cropname_en = $seed['cropname_en'];
    $cropname_te = $seed['cropname_te'];
    $seedname_en = $seed['seedname_en'];
    $seedname_te = $seed['seedname_te'];
    $seedprice = $seed['seedprice'];
    $comments_en = $seed['comments_en'];
    $comments_te = $seed['comments_te'];
    $extension = pathinfo($files['file']['name'], PATHINFO_EXTENSION);
    $filePath = $id . "." . $extension;
    if (move_uploaded_file($files['file']['tmp_name'], "../../posts/" . $filePath)) {
        $insertEnglish = "INSERT INTO seeds_en VALUES(NULL, '$cropname_en', '$seedname_en', '$seedprice', '$filePath', '$comments_en', NOW())";
        $insertTelugu = "INSERT INTO seeds_te VALUES(NULL, '$cropname_te', '$seedname_te', '$seedprice', '$filePath', '$comments_te', NOW())";
        if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}

function insertPesticides($pesticide, $files) {
    global $con;
    $id = uniqid("IMG_");
    $pesticidename_en = $pesticide['pesticidename_en'];
    $pesticidetype_en = $pesticide['pesticidetype_en'];
    $pesticidename_te = $pesticide['pesticidename_te'];
    $pesticidetype_te = $pesticide['pesticidetype_te'];
    $pesticideprice = $pesticide['pesticideprice'];
    $comments_en = $pesticide['comments_en'];
    $comments_te = $pesticide['comments_te'];
    $extension = pathinfo($files['file']['name'], PATHINFO_EXTENSION);
    $filePath = $id . "." . $extension;
    if (move_uploaded_file($files['file']['tmp_name'], "../../posts/" . $filePath)) {
        $insertEnglish = "INSERT INTO pesticides_en VALUES(NULL, '$pesticidename_en', '$pesticidetype_en', '$pesticideprice', '$filePath', '$comments_en', NOW())";
        $insertTelugu = "INSERT INTO pesticides_te VALUES(NULL, '$pesticidename_te', '$pesticidetype_te', '$pesticideprice', '$filePath', '$comments_te', NOW())";
        if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}

function insertFertilizer($fertilizer, $files) {
    global $con;
    $id = uniqid("IMG_");
    $fertilizername_en = $fertilizer['fertilizername_en'];
    $fertilizername_te = $fertilizer['fertilizername_te'];
    $fertilizertype_en = $fertilizer['fertilizertype_en'];
    $fertilizertype_te = $fertilizer['fertilizertype_te'];
    $fertilizerprice = $fertilizer['fertilizerprice'];
    $comments_en = $fertilizer['comments_en'];
    $comments_te = $fertilizer['comments_te'];
    $extension = pathinfo($files['file']['name'], PATHINFO_EXTENSION);
    $filePath = $id . "." . $extension;
    if (move_uploaded_file($files['file']['tmp_name'], "../../posts/" . $filePath)) {
        $insertEnglish = "INSERT INTO fertilizer_en VALUES(NULL, '$fertilizername_en', '$fertilizertype_en', '$fertilizerprice', '$filePath', '$comments_en', NOW())";
        $insertTelugu = "INSERT INTO fertilizer_te VALUES(NULL, '$fertilizername_te', '$fertilizertype_te', '$fertilizerprice', '$filePath', '$comments_te', NOW())";
        if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}

function insertSoilFertility($soilfertility) {
    global $con;
    $district_en = $soilfertility['district_en'];
    $district_te = $soilfertility['district_te'];
    $soiltype_en = $soilfertility['soiltype_en'];
    $soiltype_te = $soilfertility['soiltype_te'];
    $fertilepercentage = $soilfertility['fertilepercentage'];
    $comments_en = $soilfertility['comments_en'];
    $comments_te = $soilfertility['comments_te'];
    $insertEnglish = "INSERT INTO soilfertility_en VALUES(NULL, '$district_en', '$soiltype_en', '$fertilepercentage', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO soilfertility_te VALUES(NULL, '$district_te', '$soiltype_te', '$fertilepercentage', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertArea($area) {
    global $con;
    $district_en = $area['district_en'];
    $district_te = $area['district_te'];
    $irrigated = $area['irrigated'];
    $unirrigated = $area['unirrigated'];
    $comments_en = $area['comments_en'];
    $comments_te = $area['comments_te'];
    $insertEnglish = "INSERT INTO areas_en VALUES(NULL, '$district_en', '$irrigated', '$unirrigated', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO areas_te VALUES(NULL, '$district_te', '$irrigated', '$unirrigated', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertWeather($weather) {
    global $con;
    $district_en = $weather['district_en'];
    $district_te = $weather['district_te'];
    $rainfall = $weather['rainfall'];
    $temperature = $weather['temparature'];
    $humidity = $weather['humidity'];
    $wind = $weather['wind'];
    $comments_en = $weather['comments_en'];
    $comments_te = $weather['comments_te'];
    $insertEnglish = "INSERT INTO cropweather_en VALUES(NULL, '$district_en', '$rainfall', '$temperature', '$humidity', '$wind', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO cropweather_te VALUES(NULL, '$district_te', '$rainfall', '$temperature', '$humidity', '$wind', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertScheme($scheme) {
    global $con;
    $schemename_en = $scheme['schemename_en'];
    $schemename_te = $scheme['schemename_te'];
    $comments_en = $scheme['comments_en'];
    $comments_te = $scheme['comments_te'];
    $insertEnglish = "INSERT INTO scheme_en VALUES(NULL, '$schemename_en', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO scheme_te VALUES(NULL, '$schemename_te', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertFund($fund) {
    global $con;
    $fundname_en = $fund['fundname_en'];
    $fundname_te = $fund['fundname_te'];
    $comments_en = $fund['comments_en'];
    $comments_te = $fund['comments_te'];
    $insertEnglish = "INSERT INTO fund_en VALUES(NULL, '$fundname_en', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO fund_te VALUES(NULL, '$fundname_te', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertLoan($loan) {
    global $con;
    $loanname_en = $loan['loanname_en'];
    $loanname_te = $loan['loanname_te'];
    $comments_en = $loan['comments_en'];
    $comments_te = $loan['comments_te'];
    $insertEnglish = "INSERT INTO loan_en VALUES(NULL, '$loanname_en', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO loan_te VALUES(NULL, '$loanname_te', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}

function insertEquipment($equipment) {
    global $con;
    $name_en = $equipment['name_en'];
    $name_te = $equipment['name_te'];
    $comments_en = $equipment['comments_en'];
    $comments_te = $equipment['comments_te'];
    $price = $equipment['price'];
    $insertEnglish = "INSERT INTO equipment_en VALUES(NULL, '$name_en', '$price', '$comments_en', NOW())";
    $insertTelugu = "INSERT INTO equipment_te VALUES(NULL, '$name_te', '$price', '$comments_te', NOW())";
    if ($con->query($insertTelugu) && $con->query($insertEnglish)) {
        return true;
    }
    else {
        return false;
    }
}
?>
