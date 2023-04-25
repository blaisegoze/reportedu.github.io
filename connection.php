
<?php
$hostnames = array('localhost', 'localhost', 'localhost');
$users = array('root', 'root', 'root');
$passwords = array('Doke1102', '@2002', '4060');
$dbnames = array('ReportEDU', 'ReportEDU', 'ReportEDU');

foreach ($hostnames as $hostname) {
    foreach ($users as $user) {
        foreach ($passwords as $password) {
            foreach ($dbnames as $dbname) {
                $mysqli = new mysqli($hostname, $user, $password, $dbname);

                if ($mysqli->connect_errno) {
                    continue; // try the next combination
                } else {
                    echo "Successfully connected to MySQL on $hostname using user $user, password $password, and database $dbname";
                    // do something with the connection
                    break 4; // stop trying more combinations
                }
            }
        }
    }
}

if (!$mysqli) {
    echo "Failed to connect to any MySQL server";
}
?>