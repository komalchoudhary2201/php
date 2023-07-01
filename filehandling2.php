<?php
//1.    write 5 para-- done
        // $fp = fopen("para.txt","r");
            //echo fread($fp,filesize("para.txt"));
                // $name = "komal kumari";
                    //echo "<br><br>",$name;

//2.    count how many char(with & without space)
    // $fp = fopen("para.txt", "r");
        // $file_data = fread($fp, filesize("para.txt"));
            // print_r($file_data);
            // $x = explode(" ", $file_data);
                // print_r($x);
                // print_r(count($x));
    
        //  word count using file() method of file handling
        /*
            $data = file("para.txt");
            $arr=[];
            $str = "";
                foreach($data as $x){
                    $str = $str.$x." ";
                }        

            $m = explode(" ",$str);
            print_r(count($m)-1);
        */

        # 2nd way to count words
            // $data = fgets($fp);
            // $count = 0;
            // while($data=fgets($fp)){
            //     $arr = explode(" ", $data);
            //     $arrCount = count($arr);
            //     $count = $count+$arrCount;
            // }
            //     echo $count;
    
//3.    how many vowels
                // $fp = fopen("para.txt","r");
                // $data = fread($fp, filesize("para.txt"));
                // // echo $data;
                // $pattern = '/[aeiou]/';
                // preg_match_all( $pattern, $data, $arr);  
                // print_r(count($arr[0]));
                                
//4.    how many consonent
            // $fp = fopen("para.txt","r");
            // $data = fread($fp, filesize("para.txt"));
            // // echo $data;
            // $pattern = '/[^aeiou\s]/';
            // preg_match_all( $pattern, $data, $arr);  
            // print_r(count($arr[0]));

//5.    how many line in whole file
            // $fp = fopen("para.txt","r");
            // $data = fread($fp, filesize("para.txt"));
            //     // echo $data;
            //     if( $x = preg_match_all( '/\r\n|\r|\n/', $data ) ) {
            //         print_r($x);
            //     }   
//6.    how many line in para
        //example : para 1 : _lines
            $fp = fopen("para.txt","r");
            
            // while($data = fgets($fp)){
            //     $arr = explode(".", $data);
            //     $line = count($arr);

            //     echo "para"
            // }

            for($i=1; $data = fgets($fp); $i++){
                $arr = explode(".", $data);
                $line = count($arr)-1;

                echo $i ." para have ".$line." Lines","<br>";
            }
//7.    count "the" keyword in file
            // $fp = fopen("para.txt","r");
                    //     $data = fread($fp, filesize("para.txt"));
            //         // echo $data;
            //     $pattern="/(the)/";
            //     $x = preg_match_all($pattern,$data);
            //     print_r($x);

//8.    count how many digits in file
            // $fp = fopen("para.txt","r");
            // $data = fread($fp, filesize("para.txt"));
            //     // echo $data;
            //     if( $x = preg_match_all( '/[0-9]/', $data ) ) {
            //         print_r($x);
            //     }    

//9.    which is most frequent word in file  & how many time it comes.
            // $fp = fopen("para.txt","r");
            //     $data = fread($fp, filesize("para.txt"));
            //     // echo $data;
            //     $strtoarr = explode(" ",$data);
            //     $occurance = array_count_values($strtoarr);
            //         $max = 0;
            //         $min = 0;
            //         foreach($occurance as $key =>$val){
            //             if($val > 1){
            //                 $newarr[$key] = $val;
            //             }
            //         }
            //         foreach($newarr as $key=>$val){
            //             if($val > $max){
            //                 $max = $val;
            //                 $data = $key;
            //             }
            //         }
            //             echo $max,"\t";
            //             echo $data;



    // $data = "Komal kumari choudhary";
    // $data = fread($fp, filesize("para.txt"));
    // $pattern = "/[ \n]/";
    // $x = preg_match_all($pattern, $data, $arr);
    // print_r($x);
    // print_r($arr);

//     $data = fgets($fp);
//     // print_r($data);
//     $arr = explode(" ", $data);
//     // print_r($arr);

//     $x = array_count_values($arr);
//     $y = array_keys($x);
//     $count = array_values($x);
//     for($i=0; $i<count($count); $i++){
//         for($j=$i+1; $j<count($count); $j++){
//             if($count[$i] > $count[$j]){
//                 $mx = $count[$i];
//                 $val = $y[$i];
//             }
//         }
//     }
//     // print_r($val);
//     // print_r($mx);        
//     // print_r($val);        
//     // print_r($y);
 ?>