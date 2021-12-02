<?php
$q = $_REQUEST['q'];
$req = json_decode($q, true);
print_r($req)