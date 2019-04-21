<?php
/*
    Run checks defined in endpoints.json
    Save results to endpoints_result.json
*/

require("../vendor/autoload.php");

$file = fopen("./endpoints.json","r");
$checks = fread($file, filesize("./endpoints.json"));
fclose($file);

$checks = json_decode($checks);
$results = array();

$MineCraftQueryCheck = new \PCN\NetworkStatus\cron\checks\MinecraftQueryCheck();

for($i=0; $i<count($checks); $i=$i+1){
    $tests = $checks[$i]->tests;
    foreach($tests as $test){
        if($test->type == "icmp_ping"){

        }elseif($test->type == "minecraft_ping"){

            $MinecraftServer =
                new \PCN\NetworkStatus\cron\servers\MinecraftServer(
                    $checks[$i]->name,
                    $checks[$i]->node,
                    $checks[$i]->ip,
                    $test->port
                );
            $MineCraftQueryCheck->addTarget($MinecraftServer);

        }elseif($test->type == "mysql_ping"){

        }elseif($test->type == "linux_load"){

        }else{
            exit("You're an idiot " . $test->type . " is not a valid type");
        }
    }
}

$results["timestamp"] = time();

$MineCraftQueryCheck->run();
$results["Minecraft"] = $MineCraftQueryCheck->getResults();


$file = fopen("../web/template/endpoints_result.json", "w");
fwrite($file, json_encode($results));
fclose($file);
?>
