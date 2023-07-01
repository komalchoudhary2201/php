<?php
    //  $fileopen = fopen("file1.txt","r"); //for file open 
        // $data =fread($fileopen,15); // for file read & read charcter by character
        // $data = fgets($fileopen); //for read line by line
        // $data = file_get_contents("file1.txt");//for read all the contect without openin file using fopen()
        // $data = file("file1.txt");// read as an array
        // foreach($data as $dt);// read as normal content
            //  print_r($dt);
        $data = readfile("file1.txt");//it will count the lenght of the content & print the data of file  
        print_r($data);

    

?> 