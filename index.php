<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>capital budget!</title>
  </head>
  <body>
    <h1 style align="center">Hello, Capiatal Budget </h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

<!------------form Started -->

<form action="cal_capital_budgeting.php" method="post" class="row g-3" style="padding-left:5px ;padding-right:5px ;">

  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Initial Amount</label>

    <input type="float" class="form-control is-valid" id="validationServer01" name="Initial_value" required>
    <div class="valid-feedback">
      Initial Amount Required!
    </div>
  </div>

  

  <div class="col-md-5">
    <label for="validationServer04" class="form-label">Depreciation</label>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="Depreciation_check" value="dep_not_given" >

  <label class="form-check-label" for="flexSwitchCheckDefault">Depreciation Not Given</label>

</div>
   
   <span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="per_amt_dep" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected  value="per_dep">%</option>
     <!-- <option  value="amt_dep">Amt</option>-->
    </select>
  </div>
    <!--dep value-->
    <label for="validationServer03" class="form-label"> </label>
    <input type="float" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Depreciation value" name="dep_value">
    
    </span>
  </div>


  <div class="col-md-2">
    <label for="validationServer04" class="form-label"><br></br></label><label for="validationServer04" class="form-label"><br></br></label>
    <label for="validationServer04" class="form-label">Depreciation Method</label>
 <span class="input-group-text" id="inputGroupPrepend">



    <select name="method_dep" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option  value="RBM">RBM</option>
      <option selected value="SLM">SLM</option>
    </select>
   </span>
  </div>




<!-- scrap value -->

<div class="col-md-4">
    <label for="validationServer04" class="form-label">Scrape Value</label>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="scrape_check" value="scap_not_given" >

  <label class="form-check-label" for="flexSwitchCheckDefault">Scrape Value Not Given</label>

</div>
   
   <span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="per_amt_scrap" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <!--<option selected  value="per_scrap">%</option>-->
      <option value="amt_scrap">Amt</option>
    </select>
  </div>
    
    <label for="validationServer03" class="form-label"> </label>
    <input name="scrap_value" type="float" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Scrape Value"
    >
    
    </span>
  </div>


<!-- Tax value -->
  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Tax Rate</label>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="tax_check" value="tax_not_given" >

  <label class="form-check-label" for="flexSwitchCheckDefault">Tax Rate Not Given</label>

</div>
   
   <span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="per_amt_tax" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected  value="per_tax">%</option>
     <!-- <option value="amt_tax">Amt</option>-->
    </select>
  </div>
    
    <label for="validationServer03" class="form-label"> </label>
    <input name="tax_value" type="float" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Tax Value">
    
    </span>
  </div>

<!-- cost of capital  -->
  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Cost of Capital [DF]</label>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="capital_check" value="capital_not_given" >

  <label class="form-check-label" for="flexSwitchCheckDefault">Cost of capital Not Given</label>

</div>
   
   <span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="per_amt_cap" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected  value="per_cap">%</option>
     <!-- <option value="amt_cap">Amt</option>-->
    </select>
  </div>
    
    <label for="validationServer03" class="form-label"> </label>
    <input name="cap_val" type="float" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Cost of Capital">
    
    </span>
  </div>

 
 

<!-- cash flows  -->
<style>
#wrap{width:100%;}
.my_box{width:100%; padding-bottom:40px;}
.field_box{float:right;width:100%;}
.button_box{float:right;width:100%;}
</style>
<script src="jquery-1.4.1.min.js"></script>
<script>
function add_more(){
  var box_count=jQuery("#box_count").val();
  box_count++;
  jQuery("#box_count").val(box_count);
  jQuery("#wrap").append('<div class="my_box" id="box_loop_'+box_count+'"><div class="field_box"><input class="form-control" type="float" name="name[]" id="name" required></div>  <label for="validationServer04" class="form-label"><br></br></label><label for="validationServer04" class="form-label"><br></br></label>    <div class="button_box"><input type="button" style="color:wheat;background-color:red" name="submit" id="submit" value="Remove" onclick=remove_more("'+box_count+'")></div></div>');
}
function remove_more(box_count){
  jQuery("#box_loop_"+box_count).remove();
  var box_count=jQuery("#box_count").val();
  box_count--;
  jQuery("#box_count").val(box_count);
}
</script>

<div class="col-md-4">
    <label for="validationServer01" class="form-label">Enter Cash Inflow (before tax)[year auto detect]</label>

    <input type="float" class="form-control" id="validationServer01" name="name[]" id="name" required>
    <div class="valid-feedback">
      Enter Cash Inflow  Required!
    </div>
  



<tr>

<td class="auto-style5">
<div id="wrap">
<label for="validationServer04" class="form-label"></label> 
    <div class="my_box">
     
      <div class="button_box"><input type="button" name="add_btn" value="Add More" style="color:wheat;background-color:black" onclick="add_more()"></div>
    </div>
  </div>
  <!--<input type="submit" value="Add Record" name="submit">-->
  <input type="hidden" id="box_count" value="1">
</tr>
<tr>
<td></td>


</tr>
</td>
</tr>
</div>



 <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox"  id="invalidCheck3" aria-describedby="invalidCheck3Feedback" name="dep_entry_check" value="dep_entry_on" checked>

      <label class="form-check-label" for="invalidCheck3">
        Depreciation entry !
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        did you want  Depreciation entry  if want tick
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Calculate</button>
  </div>
</form>




  </body>
</html>