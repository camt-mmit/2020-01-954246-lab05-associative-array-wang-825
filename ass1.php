<?php
/*ID:602110191
  NAME:Wang Zexue
  Wechat name: Wang*/
 printf("Input Number of Data: ");
 fscanf(STDIN,"%d",$n);
 for($i=0;$i<$n;$i++){
     printf("Data %d \n",$i+1);
     printf("Name Prefix (0: Mr., 1: Miss.): ");
     fscanf(STDIN,"%d",$j);
     $prefix[$i]=$j;
     printf("First name:  ");
     fscanf(STDIN,"%s",$fname);
     $array1[]=$fname;
     printf("Last name :  ");
     fscanf(STDIN,"%s",$lname);
     $array2[]=$lname;
     printf("Gender (0: Male, 1: Female): ");
     fscanf(STDIN,"%d",$f);
     $gender[]=$f;
     printf("Phone number : "); 
     fscanf(STDIN,"%s",$e); 
     $phone[]=$e; 
 }
 printf("----------------------------------\n");
 for($i=0;$i<$n;$i++){
 if($prefix[$i]==0) echo"Mr.";
 else echo"Miss.";
 printf("%s %s\n",$array1[$i],$array2[$i]);
 if($gender[$i]==0)  echo"Gender:Male\n";
  else echo"Gender:Female\n";
  printf("phone number : %s \n",$phone[$i]);
  printf("----------------------------------\n");
 }
 
 
 