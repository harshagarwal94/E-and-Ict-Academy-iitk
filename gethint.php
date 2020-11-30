
<?php
// Array with names
$a[] = "Deepak";
$a[] = "Rajesh";
$a[] = "Ramesh";
$a[] = "Dinesh";
$a[] = "Suresh";
$a[] = "Mahesh";
$a[] = "Raju";
$a[] = "Himesh";
$a[] = "Raman";
$a[] = "Kirti";
$a[] = "Sanjay";
$a[] = "Vijay";
$a[] = "Naman";
$a[] = "Aman";
$a[] = "Punita";
$a[] = "Suraj";
$a[] = "Rakesh";
$a[] = "Vishal";
$a[] = "Vikash";
$a[] = "Ojash";
$a[] = "Yash";
$a[] = "Salman";
$a[] = "Tiger";
$a[] = "Unnati";
$a[] = "Vicky";
$a[] = "Kajal";
$a[] = "Kamal";
$a[] = "Ellen";
$a[] = "Love";
$a[] = "Vinod";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 