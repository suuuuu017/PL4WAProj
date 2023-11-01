<?php

// Note that these are for the local Docker container
$host = "db";
$port = "5432";
$database = "example";
$user = "localuser";
$password = "cs4640LocalUser!";

$dbHandle = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

if ($dbHandle) {
    echo "Success connecting to database";
}
else{
    echo "An error occurred connecting to the database";
}


//$res = pg_query($dbHandle, "insert into users (name, email, password) values
//        ('test', 'test@test.com', 'test');");
//if ($res) {
//    echo "Success writing";
//} else {
//    echo "An error occurred writing";
//}


$res = pg_query($dbHandle, "select * from users;");
if ($res) {
    echo "Success reading";
} else {
    echo "An error occurred reading";
}

//$res = pg_fetch_all($res);

if(empty($res)){
    echo "not found";
}

while ($row = pg_fetch_row($res)) {
    echo "<br />\n";
    echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7]";
    echo "<br />\n";
}

$res = pg_query($dbHandle, "select * from posts;");
if ($res) {
    echo "Success reading";
} else {
    echo "An error occurred reading";
}

//$res = pg_fetch_all($res);

if(empty($res)){
    echo "not found";
}

while ($row = pg_fetch_row($res)) {
    echo "<br />\n";
    echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7]";
    echo "<br />\n";
}

$res = pg_query($dbHandle, "select * from userpost;");
if ($res) {
    echo "Success reading";
} else {
    echo "An error occurred reading";
}

//$res = pg_fetch_all($res);

if(empty($res)){
    echo "not found";
}

while ($row = pg_fetch_row($res)) {
    echo "<br />\n";
    echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7]";
    echo "<br />\n";
}

//$res  = pg_query($dbHandle, "drop table users;");
//$res  = pg_query($dbHandle, "drop table posts;");
//
//$res  = pg_query($dbHandle, "create sequence user_seq;");
//
//// Create tablse
//
//$res  = pg_query($dbHandle, "create table users (
//            id  int primary key default nextval('user_seq'),
//            name text,
//            email text,
//            password text,
//            description text);");
//
//$res  = pg_query($dbHandle, "create sequence post_seq;");
//
//$res  = pg_query($dbHandle, "create table posts (
//            id  int primary key default nextval('post_seq'),
//            title text,
//            description text,
//            pic text,
//            date DATE,
//            time TIME,
//            parNum int,
//            postTime TIMESTAMP,
//            currenPar int);");
//
//$res  = pg_query($dbHandle, "create sequence userpost_seq;");
//
//// Create tablse
//
//$res  = pg_query($dbHandle, "create table userpost (
//            id  int primary key default nextval('userpost_seq'),
//            email text,
//            title text);");

//$res = pg_prepare($dbHandle, "myinsert", "insert into users (name, email, password) values
//    ($1, $2, $3);");
//
//$res = pg_execute($dbHandle, "myinsert", ["test", "test@test.com", "test"]);
//
//if ($res) {
//    echo "Success adding";
//} else {
//    echo "An error occurred ";
//}




