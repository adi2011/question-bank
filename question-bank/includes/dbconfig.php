<?php
    require __DIR__.'/vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    // $serviceAccount=ServiceAccount::fromJsonFile(__DIR__.'kohbee-library-firebase-adminsdk-3cd2l-572cde1d91.json');
    $firebase = (new Factory)->withServiceAccount(__DIR__.'/kohbee-library-firebase-adminsdk-3cd2l-521fbd4644.json');
    
    
    
    // (new Factory)
    //     ->withServiceAccount($serviceAccount)
    //     ->withDatabaseUri('https://kohbee-library.firebaseio.com')
    //     ->create();
    $database = $firebase->createDatabase();    
?>
