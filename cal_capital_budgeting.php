
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>capital budget</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<h1 style align="center">Capital Budget (mba 2 sem asp)</h1>
<body>
<div class="bs-example">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Year</th>
                <th>CI</th>
                 <?php
$dep_value_condition = "";
$scrap_value_condition = "";
$tax_value_condition ="";
$cap_val_condition = "";

                 if (!empty($_POST["Depreciation_check"])){
    $dep_value_condition = $_POST["Depreciation_check"];
}
if (!empty($_POST["scrape_check"])){
$scrap_value_condition = $_POST["scrape_check"];
}

if (!empty($_POST["tax_check"])){
    $tax_value_condition = $_POST["tax_check"];
}

if (!empty($_POST["capital_check"])){
    $cap_val_condition = $_POST["capital_check"];
}
               /* echo $dep_value_condition."<br>".
$scrap_value_condition ."<br>".
$tax_value_condition ."<br>".
$cap_val_condition ;*/
                 $cci_c = $dep_value_condition == "dep_not_given"  and $tax_value_condition =="tax_not_given" and $cap_val_condition == "capital_not_given";
                //echo $cci_c."here";
                    if($cci_c == 1){
                    echo "<th>CCI</th>";

                  $tax_value_condition ="";
                   if (!empty($_POST["tax_check"])){
                    $tax_value_condition = $_POST["tax_check"];
                        }

                        if($tax_value_condition =="tax_not_given"){
                             
                 }
                 }
                 elseif(!empty($_POST["tax_value"]) ){
                    echo "<th>CCI</th>";
                 } 
              ?>
                 
<?php
                  $tax_value_condition ="";
                  $dep_value_condition ="";

                    

                   if (!empty($_POST["tax_check"]) ){ $tax_value_condition = $_POST["tax_check"];
               }
               elseif( !empty($_POST["Depreciation_check"])){
                    $dep_value_condition = $_POST["Depreciation_check"];
                        }

                        if($tax_value_condition =="tax_not_given" ){}

                         elseif( $dep_value_condition =="dep_not_given" and $tax_value_condition != "tax_not_given" and isset($tax_value_condition)){
                            echo "  <th>Depreciation</th>";

                 }
                 elseif(!empty($_POST["dep_value"])){
                    echo "  <th>Depreciation</th>";
                 } 
              ?>
                

                 

                  <?php
                  $tax_value_condition ="";
                   if (!empty($_POST["tax_check"])){
                    $tax_value_condition = $_POST["tax_check"];
                        }

                        if($tax_value_condition =="tax_not_given"){
                 }elseif(!empty($_POST["tax_value"])){
                    echo "
                     <th>CIAD</th>
                    <th>TAX </th>
                    <th>CIATD </th>
                    ";
                 } 
              ?>
                  
                 <?php
                  $tax_value_condition ="";
                  $dep_value_condition ="";

                    

                   if (!empty($_POST["tax_check"]) ){ $tax_value_condition = $_POST["tax_check"];
               }
               elseif( !empty($_POST["Depreciation_check"])){
                    $dep_value_condition = $_POST["Depreciation_check"];
                        }

                        if($tax_value_condition =="tax_not_given" ){}

                         elseif( $dep_value_condition =="dep_not_given" and $tax_value_condition != "tax_not_given" and isset($tax_value_condition)){
                            echo "  <th>Depreciation</th>";

                 }
                 elseif(!empty($_POST["dep_value"])){
                    echo "  <th>Add Depreciation</th>";
                 } 
              ?>
               <?php
                  $tax_value_condition ="";
                   if (!empty($_POST["tax_check"])){
                    $tax_value_condition = $_POST["tax_check"];
                        }

                        if($tax_value_condition =="tax_not_given"){
                 }elseif(!empty($_POST["tax_value"])){
                    echo "
                         <th> CIATBD </th>
                    ";
                 } 
              ?>
                     
                  

                      <?php 
                      $cap_val_condition ="";
                      if (!empty($_POST["capital_check"])){
                        $cap_val_condition = $_POST["capital_check"];
                            }
                            if($cap_val_condition == "capital_not_given"){ }elseif(!empty($_POST["cap_val"]) and 
                                $cap_val_condition =="" ){
                     echo " <th> DF </th>";  }
                 ?>
                      <th> DCI </th>
            </tr>
        </thead>
        <tbody>
        </tbody>





<?php
/*
//style="border:groove #00FF99" border line
 echo "<br> Initial_value "; echo $_POST["Initial_value"]; echo"</br>" ;



  echo "<br> dep_value "; echo $_POST["dep_value"]; echo"</br>" ;
 echo "<br> dep_value "; echo $_POST["Depreciation_check"]; echo"</br>" ;
 echo "<br> dep_value "; echo $_POST["per_amt_dep"]; echo"</br>" ;

echo "<br> dep_value"; echo $_POST["method_dep"]; echo"</br>" ;


   echo "<br> scrap_value"; echo $_POST["scrap_value"]; echo"</br>" ;
    echo "<br> scrap_value "; echo $_POST["scrape_check"]; echo"</br>" ;
 echo "<br> scrap_value "; echo $_POST["per_amt_scrap"]; echo"</br>" ;


    echo "<br> tax_value"; echo $_POST["tax_value"]; echo"</br>" ;
 echo "<br> tax_value "; echo $_POST["tax_check"]; echo"</br>" ;
 echo "<br> tax_value "; echo $_POST["per_amt_tax"]; echo"</br>" ;


     echo "<br> cap_val"; echo $_POST["cap_val"]; echo"</br>" ;
 echo "<br> cap_val "; echo $_POST["capital_check"]; echo"</br>" ;
 echo "<br> cap_val "; echo $_POST["per_amt_cap"]; echo"</br>" ;

  echo "<br>  "; echo $_POST["dep_entry_check"]; echo"</br>" ;



*/
////////////////////////////////////////////
$tax_value_condition = "";
$scrap_value = 0;
$Initial_value = $_POST["Initial_value"];

$dep_value = $_POST["dep_value"];
if (!empty($_POST["Depreciation_check"])){
    $dep_value_condition = $_POST["Depreciation_check"];
}
if (!empty($_POST["scrape_check"])){
$scrap_value_condition = $_POST["scrape_check"];
}

if (!empty($_POST["tax_check"])){
    $tax_value_condition = $_POST["tax_check"];
}

if (!empty($_POST["capital_check"])){
    $cap_val_condition = $_POST["capital_check"];
}

if (!empty($_POST["dep_entry_check"])){
    $dep_entry_on = $_POST["dep_entry_check"];
}


$dep_value_per_amt = $_POST["per_amt_dep"];


$dep_method = $_POST["method_dep"];


if (!empty($_POST["scrap_value"])){
  $scrap_value = $_POST["scrap_value"];
}

$scrap_value_per_amt = $_POST["per_amt_scrap"];

$tax_value = $_POST["tax_value"];
$tax_value_per_amt = $_POST["per_amt_tax"];

$cap_val = $_POST["cap_val"];
$cap_val_per_amt=$_POST["per_amt_cap"];


//////////////////////////////////////////
#cci initialising #
$cci=0;
$cci_high = 0;
$cci_y = 0;
#____________#

#dep initialsing#
$dep = $_POST["Initial_value"];
//$dep_rate = $_POST["dep_value_per"];
$dr = 0;
$dep_remain= 0;
$k ="";
#_______________#

# ciad #
$ciad = 0;
#____#

#tax #
$tax_rate = $tax_value;
$tax =0;
  if($tax_value_condition =="tax_not_given"){
    $tax_rate = 0;
                 }
#______#

# ciabtdb #
$ciadtd = 0 ;
$total_ciatd = 0;
#_______#
# CIATBD #
$ciatbd = 0;
#__________#

# df #
$df = 0 ;
if(!empty($cap_val)){
   $df_rate = $cap_val ; 
}else{
    $df_rate = 0 ;
}

#___________#

# dci #
$dci = 0 ;
$dci_total = 0;
$dci_total_init = 0;
#________#

# spb #
$cci_high = 0;
$cifor_next = 0;
#______#

$year = 0;
$itemArr=$_POST['name'];

$total_year = 0 ;

 foreach($itemArr as $lista){

     if($lista!=''){
        $total_year++;
        //echo $total_year;
     }}

  foreach($itemArr as $list){

     if($list!=''){
           // print_r($list);
            //print_r(count($itemArr));
            if(trim($list) == null){
            }

            else{
                $year++;

                #cci adding #
                $cci = $cci + $list;
                if($cci<=$Initial_value){
                    $cci_high =$cci;
                    $cci_y = $year;
                }else if($cci_y+1 == $year){
                    $cifor_next = $list;
                }
                #___________#

                # depreciation #
                if ($dep_value_per_amt=="per_dep") {
                        $dep_rate = $dep_value;
                         if (!empty(trim($dep_rate)) and $dep_rate != "") {
                   if($dep_method=="RBM" and $dr==0){
                     $dep_remain = $Initial_value * $dep_rate / 100;
                     $dr = 1;
                }else if($dep_method=="RBM" ){
                    $dep =  $dep - $dep_remain ;
                    $dep_remain = $dep * $dep_rate / 100;
                }

                else if($dep_method=="SLM" ){
                    $dep_remain = $Initial_value * $dep_rate / 100;
                }
                }else if($dep_method=="SLM" ){
                   $k = "  <td></td>  <td></td>";
                    $dep_remain = ($Initial_value-$scrap_value) / $total_year ;
                }
                    }

                  



               
                
                ################
                $dep_remain_int  =intval($dep_remain);
                $dr_int = $dep_remain - $dep_remain_int ;
                if ($dr_int>0.5) {
                    $dep_remain_int = $dep_remain_int +1;
                }else if($dr_int < -0.5){
                    $dep_remain_int = $dep_remain_int - 1;
                }
                 #___________#

                # ciad #
                $ciad = $list - $dep_remain;

                $ciad_int = intval($ciad);
                $ci_i= $ciad - $ciad_int;
                if( $ci_i>0.5){
                    $ciad_int = $ciad_int+1;
                }elseif ($ci_i< -0.5) {
                    $ciad_int = $ciad_int-1;
                }

                #________#

                # tax #
                if(!empty($tax_rate)){
                     $tax = $ciad * $tax_rate / 100;
                
                $tax_int =intval($tax);
                $tax_i = $tax - $tax_int;
                if( $tax_i>0.5){
                    $tax_int = $tax_int+1;
                }elseif ($tax_i< -0.5) {
                    $tax_int = $tax_int-1;
                }

                }
               

                #_____#

                # ciatdb #
                $ciadtd = $ciad - $tax;
                

                $ciadtd_int =intval($ciadtd);
                $cid_i = $ciadtd - $ciadtd_int;
                if ($cid_i > 0.5) {
                   $ciadtd_int = $ciadtd_int + 1;
                }elseif($cid_i< -0.5){
                     $ciadtd_int = $ciadtd_int -1;
                }
                $total_ciatd = $ciadtd + $total_ciatd;
                #_______#

                # ciatdb #
                $ciatbd =  $ciadtd + $dep_remain;

                $ciatbd_int =intval($ciatbd);
                $ciatbd_i = $ciatbd - $ciatbd_int;
                if ($ciatbd_i > 0.5) {
                    $ciatbd_int = $ciatbd_int +1 ;

                }elseif($ciatbd_i< -0.5){
                    $ciatbd_int = $ciatbd_int -1;
                }


            
                # DF #
                $df =pow(1/(1+$df_rate/100),$year);
                $df_int = number_format($df, 3);

                #________#

                

                  if($tax_value_condition =="tax_not_given"){
                    # DCI #
                  $dci = $list  * $df;
                $dci = $ciatbd_int * $df_int;
                $dci_int =intval($dci);
                $dci_i = $dci - $dci_int ;
                if ($dci_i > 0.5) { 
                    $dci_int = $dci_int + 1;
                }elseif ($dci_i < - 0.5) {
                     $dci_int = $dci_int - 1;
                }
                 }else{
                    # DCI #
                  $dci = $ciatbd  * $df;
                $dci = $ciatbd_int * $df_int;
                $dci_int =intval($dci);
                $dci_i = $dci - $dci_int ;
                if ($dci_i > 0.5) { 
                    $dci_int = $dci_int + 1;
                }elseif ($dci_i < - 0.5) {
                     $dci_int = $dci_int - 1;
                }
                 }

                # DCI total #
                $dci_total = $dci + $dci_total ;
                 $dci_total_init = $dci_int + $dci_total_init;

                 #______________#

                 # SPB  #
                  if($cci<=$Initial_value){
                    $cci_high =$cci;
                    $cci_y = $year;
                }else if($cci_y+1 == $year){
                    $cifor_next = $list;
                }
                #______________#


                echo "<tr>
                <td>$year</td>
                <td>$list</td>
                ";

$dep_value_condition = "";
$scrap_value_condition = "";
$tax_value_condition ="";
$cap_val_condition = "";

                 if (!empty($_POST["Depreciation_check"])){
    $dep_value_condition = $_POST["Depreciation_check"];
}
if (!empty($_POST["scrape_check"])){
$scrap_value_condition = $_POST["scrape_check"];
}

if (!empty($_POST["tax_check"])){
    $tax_value_condition = $_POST["tax_check"];
}

if (!empty($_POST["capital_check"])){
    $cap_val_condition = $_POST["capital_check"];
}

                 $cci_c = $dep_value_condition != "dep_not_given"  and $tax_value_condition !="tax_not_given" and$cap_val_condition != "capital_not_given";

                if($tax_value_condition =="tax_not_given"){
                    if($cci_c != 1){
                    echo"  <td>$cci </td>";
                 }}
                 elseif(!empty($tax_rate) ){
                    echo"  <td>$cci </td>";
                 } 
                
                 if($tax_value_condition =="tax_not_given"){ }elseif($dep_value_condition =="dep_not_given" and $tax_value_condition != "tax_not_given" and isset($tax_value_condition)){
                    echo " <td> $dep_remain_int ($dep_remain)  </td>";
                 }
                elseif(!empty($dep_value) ){
                echo " <td> $dep_remain_int ($dep_remain)  </td>";}
              


                if($tax_value_condition =="tax_not_given"){
                 }
                 elseif(!empty($tax_rate)){
                    echo "<td>$tax_int ($tax)</td><td>$ciad_int ($ciad )</td><td>$ciadtd_int ($ciadtd)</td>";
                 } 


                   
 if($tax_value_condition =="tax_not_given"){ }elseif($dep_value_condition =="dep_not_given" and $tax_value_condition != "tax_not_given" and isset($tax_value_condition)){
    echo " <td> $dep_remain_int ($dep_remain)  </td>";
                 }
                elseif(!empty($dep_value) ){
                echo " <td> $dep_remain_int ($dep_remain)  </td>";}
                
                 


                if($tax_value_condition =="tax_not_given"){
                 }
                 elseif(!empty($tax_rate)){
                    
                 } 
                 if($tax_value_condition =="tax_not_given"){
                 }
                 elseif(!empty($tax_rate)){
                    echo "<td>$ciatbd_int  ($ciatbd) </td>";
                 } 
                    

                                      
                    if($cap_val_condition == "capital_not_given"){ }
                        elseif(!empty($cap_val)){              
                         echo "<td>$df_int ($df)</td> ";  }
                     
                     echo" <td>$dci_int ($dci)</td>";
        }
       
    }
}
echo"<tr>
                <td></td>
               
                <td> </td>
                <td>   </td>
        
              <td> </td>
                <td></td>";
               

          


                if($tax_value_condition =="tax_not_given" ){
                 }
                elseif(!empty($tax_rate) ){
                echo "<td></td><td></td><td></td>";}

                 if($cap_val_condition == "capital_not_given"){ }
                        elseif(!empty($cap_val)){              
                         echo "  <td></td> $k 
                         ";  }

                   echo" 
                <td>Total DCI</td>
                <td>$dci_total_init ($dci_total)  </td>
           
            </tr>";
            echo" </tbody>";
    echo "</table></div>";


echo"<h4>Total DCI  $dci_total_init ($dci_total) </h4>";
   //__________ SPB __________________//


    echo '<div style="border:groove #00FF99" ><h3>SPB = A + [B/D] x C </h3>'  ; 
error_reporting(E_ALL ^ E_WARNING);
   $cci_high  = $Initial_value - $cci_high;

        $pi = ($cci_high / $cifor_next) * 12;
        echo "<h3>$cci_y years +[$cci_high/$cifor_next]x12 Months";
       $pi1 = intval($pi);
        echo "<h3 >$cci_y years $pi1 months( $pi)</h3></div>";
//____________________________________//     
echo "<br>";

   //__________ pat __________________//
 echo '<div style="border:groove #00FF99"><h3>Average PAT = Total CIATD/No Of Years </h3>' ; 
       $pat = $total_ciatd/$total_year;
        $pat1=intval($pat);
        echo "<h3 >$pat1 : ($pat)</h3>";

        echo "<h3>ARR = [Average Pat/Inital Investment] x 100 </h3>"  ; 
       $arr = ($pat/$Initial_value)*100;
        $arr1=intval($arr);
        echo "<h3 > $arr1 : ($arr)</h3></div>";
        echo "<br>";
//____________________________________//

   //__________ NPV __________________//
    echo '<div style="border:groove #00FF99"> <h3>NPV = DCI - Initial Investment </h3>'  ; 

   
   echo"<br>";
    $npv =  $dci_total - $Initial_value ;
    $npv1 = $dci_total_init - $Initial_value ;
    echo "<h3>$dci_total_init - $Initial_value  ($dci_total - $Initial_value)</h3>";
        echo "<h3>$npv1 ($npv)</h3></div>"  ;
echo "<br>";
   //__________ --------- __________________//

   //__________ PI __________________//
    echo '<div style="border:groove #00FF99"> <h3>PI = DCI /  Initial Investment </h3>'  ;  
        echo "<h3> $dci_total / $Initial_value ($dci_total / $Initial_value) </h3>"  ;
        $pi = $dci_total / $Initial_value;
         $pi1 = $dci_total_init / $Initial_value;
        echo "<h3>$pi1 ($pi)</h3></div>"  ;
        echo "<br>";
   //__________ -------- __________________//

 echo '<div style="border:groove #00FF99"> '  ;  
  echo "<h3>IRR Home Work</h3>"  ;
        echo "<h3> IRR = A+[B/C-D] x E </h3>"  ;
        echo "<h3> A = Positive Npv Rate</h3>";
        echo "<h3> B = Positive Npv Value</h3>";
        echo "<h3> C = Total Dci </h3>";
        echo "<h3> D = Total (Dci - rough calcutaion)</h3>";
        echo "<h3> E = Difference between Position Npv Rate</h3>";
        echo "<h3> and Negative Npv Rate</h3></div>";

echo "<br>";
    echo"</body></html>";
?>
