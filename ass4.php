<?php
/*ID:602110191
  NAME:Wang Zexue
  Wechat name: Wang*/

/*ID:602110191
  NAME:Wang Zexue
  Wechat name: Wang*/
/*
Try to use some structure like:

$gradeData = [
    'A' => [
        'score' => 4,
        'students' => [],
    ],
    'B' => [
        'score' => 3,
        'students' => [],
    ],
    'C' => [
        'score' => 2,
        'students' => [],
    ],
    'D' => [
        'score' => 1,
        'students' => [],
    ],
    'F' => [
        'score' => 0,
        'students' => [],
    ],
];

Then you can check the valid grade with:

if(array_key_exists($data, $gradeData))
    printf("Please input A, B, C, D or F for grade!!!\n");

Add assign student name to specified grade with:

$gradeDate[$data]['students'][] = $name;

And for average grade:

$score = 0;
$nstudent = 0;
foreach($gradeData as $grade => $data) {
    printf("%s (%2d): %s\n", $grade, count($data['students']), implode(', ', $data['students']));
    $score += $data['score'] * count($data['students']);
    $nstudent = count($data['students']);
}
$avgGrade = $score / $nstudent;

*/


  $arrayA=[];
  $arrayB=[];
  $arrayC=[];
  $arrayD=[];
  $arrayE=[];
  for($i=0;;$i++){
    printf("Student %d: (name grade, enter for end of data): ",$i+1);
    $name=null;
    $data=null;
    fscanf(STDIN,"%s %s",$name,$data);
    if($name==null) break;
    else{
      if($data!='A'&& $data!='B'&& $data!='C' && $data!='D'&& $data!='F')
      printf("Please input A, B, C, D or F for grade!!!\n");
    }
     if($data=='A') $arrayA[]=$name;
     else if($data=='B') $arrayB[]=$name; 
     else  if($data=='C') $arrayC[]=$name; 
     else if($data=='D') $arrayD[]=$name; 
     else if($data=='F') $arrayF[]=$name; 
  }
  printf("A(%d): ",count($arrayA));
  for($j=0;$j<count($arrayA);$j++){
  $c="";
  if($j>0) echo $c=",";
  echo "$arrayA[$j]";
  }
  printf("\n");
  printf("B(%d): ",count($arrayB));
  for($j=0;$j<count($arrayB);$j++){
  $c="";
  if($j>0) echo $c=",";
  echo "$arrayB[$j]";
  }
  printf("\n");
  printf("C(%d): ",count($arrayC));
  for($j=0;$j<count($arrayC);$j++){
  $c="";
  if($j>0) echo $c=",";
  echo "$arrayC[$j]";
  } 
  printf("\n");
  printf("D(%d): ",count($arrayD));
  for($j=0;$j<count($arrayD);$j++){
  $c="";
  if($j>0) echo $c=",";
  echo "$arrayD[$j]";
  } 
  printf("\n");
   printf("F(%d): ",count($arrayF));
  for($j=0;$j<count($arrayF);$j++){
  $c="";
  if($j>0) echo $c=",";
  echo "$arrayF[$j]";
  }
  printf("\n");
  $A=4;$B=3;$C=2;$D=1;$F=0;
  $total=$A*count($arrayA)+$B*count($arrayB)+$C*count($arrayC)+$D*count($arrayD)+$F*count($arrayF);
 $Average=$total/(count($arrayA)+count($arrayB)+count($arrayC)+count($arrayD)+count($arrayF));
  printf("Average Grade Point: %.2f",$Average);

  