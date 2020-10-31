<?php
/*ID:602110191
  NAME:Wang Zexue
  Wechat name: Wang*/
for($i=0;;$i++){
     printf("Data %d \n",$i+1);
     $j=null;
     printf("Name Prefix (0: Mr., 1: Miss., 2: Mrs.): ");
     fscanf(STDIN,"%s",$j);
     $prefix[$i]=$j;
     if($j==null) break;
     else{
         printf("First name:  "); 
         fscanf(STDIN,"%s",$fname);
         $array1[$i]=$fname;
         printf("Last name :  ");
         fscanf(STDIN,"%s",$lname);
         $array2[$i]=$lname;
         printf("Gender (0: Male, 1: Female,2: Transgender ): ");
         fscanf(STDIN,"%d",$f);
         $array3[$i]=$f;
         $phone[$i]=[];
         for($l=0;;$l++){
         $e=null;
         printf("Phone number %d : ",$l+1); 
         fscanf(STDIN,"%s",$e); 
         if($e==null) break; 
         else $phone[$i][$l]=$e;
         }    
     }
     $array4[]=$l;
 }
  printf("----------------------------------\n"); 
  for($i=0;$i<count($prefix);$i++){
       if($prefix[$i]==null) echo"";
       else{
         if($prefix[$i]==0) echo"Mr.";
         if($prefix[$i]==1) echo"Miss.";
         if($prefix[$i]==2) echo"Mrs.";
         echo "$array1[$i]  $array2[$i]\n"; 
         if($array3[$i]==0) echo"Gender: Male\n";
         if($array3[$i]==1) echo"Gender: Female\n";
         if($array3[$i]==2) echo"Gender: Transgender\n";
         printf("phone number: ");
        for($l=0;$l<$array4[$i];$l++){
         $q="";
         if($l>0) echo $q=",";
         echo $phone[$i][$l];
        } 
    
  printf("\n");
  printf("----------------------------------\n");
    }
  }

        
   


