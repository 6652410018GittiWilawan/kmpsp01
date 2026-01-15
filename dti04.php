<?php
    $dataA = [10,20,30,40,50];
    $dataB = [11,22,33,44,55];
    $dataC = array_merge($dataA, $dataB);

    echo $dataA[3] , " ";
    echo $dataA[1] , " ";
    echo $dataA[4] , " ";

    $faculty = ["as"=>"สถาปัตย์","en"=>"วิศวะ","it"=>"ไอที","sc"=>"วิทย์"];
    $subject = ["as"=>["AR","CE","IN"],"en"=>["CI","ME","EE"],"it"=>["CS","SE","DS"],"sc"=>["PH","CH","BI"]];

    echo "<br/>สาขา: ", $faculty["it"];
    echo "<br/>วิชา: ", $subject["it"][0];
    echo "<br/>วิชา: ", $subject["it"][2];