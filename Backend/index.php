<?php
    $myPDO = new PDO("sqlite:".__DIR__."/DB");
    $result = $myPDO->query("SELECT * FROM test");
    foreach($result as $row)
    {
        print $row['Field2'] . "\n";
    }