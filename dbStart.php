<?php

// Note that these are for the local Docker container
$host = "localhost";
$port = "5432";
$database = "rjg8bkr";
$user = "rjg8bkr";
$password = "cJovhraI9WLF";

$dbHandle = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

if ($dbHandle) {
    echo "Success connecting to database";
} else {
    echo "An error occurred connecting to the database";
}


//$res  = pg_query($dbHandle, "create sequence user_seq;");

// Create tablse

//$res  = pg_query($dbHandle, "create table users (
//            id  int primary key default nextval('user_seq'),
//            name text,
//            email text,
//            password text);");

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

