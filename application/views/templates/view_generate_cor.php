<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <style type="text/css">

        .no_left_bottom{
            border: 0;
            /*border-left: 0;*/
            /*border-bottom: 0 ;*/
            font-size: 12px;
        }

        .border_right{
            border: 0;
            border-left: 1px solid black;
            font-size: 12px;
        }
        .rigt{
            border-right: 1px solid black;
        }
        .top{
            border-top:1px solid black;
        }

        .bottom{
            border-bottom:1px solid black ;
        }
        table td,th {
            border: 1px solid black;
            /*border-spacing: 0;*/
            text-align: center;
        }
/*        td,th{
            font-size: 12px;
        }*/
        table {
            border-collapse: separate;
            border-spacing: 0;
        }
        tr {
            margin: 0;
            padding: 0;
            /*border: solid;*/
            font-size: 15px;
        }
        h4,h3,h6 {
            margin: 0;
            padding: 0;
        }


    </style>
</head>
<body>
<!-- <h1 class="text-center bg-info">Generate PDF from View using DomPDF</h1> -->
<?php 
// echo $json;
$data = json_decode($json);

$fullname = $data[0]->first_name . ' ' . $data[0]->last_name;
$id = $data[0]->id;
$year_level = $data[0]->year_level;
$course = $data[0]->course_avr;
$school_year = $data[0]->school_year;
$school_term = $data[0]->school_term;

$total = 0;
for ($i=0; $i < count($data) ; $i++) { 
      $row = $data[$i];

      $total = $total + $row->units;
}

$tuition_fee = 418;

$discount = 0;

$misc = 2974;
$total_fee = $tuition_fee * $total;
$dis = ($discount * $total_fee)/100;
$total_discount = $total_fee - $dis; 
$lab_fee = 500;
$lab_units = 0;
$lab_total = $lab_fee * $lab_units;

$nstp_fee = 500;
$nstp_unit = 0;
$nstp_total = $nstp_unit * $nstp_fee;
$id_fee = 500;
$id_unit = 0;
$id_total = $nstp_unit * $nstp_fee;
$insurance = 0;
$other_total = $misc + $lab_total + $nstp_total + $id_total + $insurance;
$grand_total = $total_discount + $other_total;

$payment_schedule = $grand_total / 5;
?>
<div class="d-flex justify-content-center">
    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr >
                <th colspan="10" class="text-center"><h4><strong>SYSTEMS PLUS COMPUTER COLLEGE</strong><h4><br>
                    <h6>Quezon City Campus</h6><br>
                    <h3><strong>Registration Form</strong></h3>
                </th>
            </tr>
            <tr>
                <td class="text-center" colspan="2">
                    Name :
                </td>
                <td class="text-center" colspan="2" id="name">
                    <strong><?=$fullname;?></strong>
                  
                    <!-- <strong>Mark Anthony Canal</strong> -->
                </td>
                <td class="text-center" colspan="2">
                    Student No.
                </td>
                <td class="text-center" colspan="2" id="id">
                   <strong><?=$id;?></strong>
                </td>
                <td class="text-center" >
                    Date:
                </td>
                <td class="text-center">
                    <strong>02/03/2022</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center" colspan="2">
                    Course/Year :
                </td>
                <td class="text-center" colspan="2" id="course-year">
                    <strong><?=$course;?> / <?=$year_level;?></strong>
                    
                </td>
                <td class="text-center" colspan="2">
                    Sem/Year
                </td>
                <td class="text-center" colspan="2" id="sem-year">
                    <strong><?=$school_term;?> Sem / <?=$school_year;?></strong>
                </td>
                <td class="text-center" colspan="2">
            
                </td>
            </tr>
            <tr>
                <td colspan="10" style="background-color: grey;">
                    
                </td>
            </tr>
            <tr>
                <td class="text-center" rowspan="2">
                    Section
                </td>
                <td class="text-center" rowspan="2">
                    Subject Code
                </td>
                <td class="text-center" rowspan="2" colspan="2">
                    Description
                </td>
                <td class="text-center" rowspan="2" colspan="2">
                    Schedule
                </td>
                <td class="text-center" rowspan="2">
                    Credit Units
                </td>
                <td class="text-center" colspan="3">
                    Pay Units
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    Lec
                </td>
                <td class="text-center">
                    lab
                </td>
                <td class="text-center">
                    Total
                </td>
            </tr>
          </thead>
        <tbody>
            <?php
                for ($i = 0 ; $i < count($data); $i++){
                    $row = $data[$i];

                    ?>
                    <tr>
                        <td> </td>
                         <td><?php echo $row->code; ?></td>
                         <td colspan="2"><?php echo $row->description?></td>
                         <td colspan="2"> </td>
                        <td><?php echo $row->units; ?></td>
                        <td><?php echo $row->units; ?></td>
                        <td></td>
                        <td><?php echo $row->units; ?></td>

                    </tr>
             <?php
                
                }

            ?>

              <?php
                

            ?>

            <tr>
                <td colspan="4">
                    
                </td>
                <td colspan="2">
                    <strong>Total</strong>
                </td>
                <td>
                    <strong><?=$total;?></strong>
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                      <strong><?=$total;?></strong>
                </td>
            </tr>
            <tr>
                <td colspan="10" style="background-color: grey;">
                    
                </td>
            </tr>
        <tbody>
        <tfoot>

            <tr>
                <td colspan="3" rowspan="13">
                    
                </td>
                <td rowspan="13">
                    
                </td>
                <td colspan="6">
                    Installment Basis
                </td>
            </tr>

            <tr >
               
        
                <td colspan="4 " class="no_left_bottom">
                    
                </td>
                <td colspan="2">
                    Payment Schedule
                </td>
            </tr>

            <tr >
                
            
                <td class="no_left_bottom">
                     Tuition Fee
                </td>
                <td class="no_left_bottom">
                   <?=$tuition_fee;?>
                </td>
                <td class="no_left_bottom">
                    <?=$total?>
                </td>
                <td class="no_left_bottom">

                     <?=$total_fee;?>
                </td>
                <td class="border_right">
                    Downpayment
                </td>
                <td class="no_left_bottom rigt">
                    <?=$payment_schedule;?>
                </td>
            </tr>

            <tr >
                
                
                <td class="no_left_bottom">
                    Discount
                </td>
                <td colspan="2" class="no_left_bottom">
                   <?=$discount;?> %
                </td>

                <td class="no_left_bottom">

                     <?=$dis;?>
                </td>
                <td class="border_right">
                    March
                </td>
                <td class="no_left_bottom rigt">
                    <?=$payment_schedule;?>
                </td>
            </tr>

            <tr >
                
                
                <td class="no_left_bottom top">
                    Sub total
                </td>
                <td colspan="2" class="no_left_bottom top">
                   
                </td>

                <td class="no_left_bottom top">

                     <?=$total_discount;?>
                </td>
                <td class="border_right">
                    April
                </td>
                <td class="no_left_bottom rigt">
                    <?=$payment_schedule;?>
                </td>
            </tr>

            <tr >
                
               
                <td colspan="4" class="no_left_bottom bottom top">
                   Other
                </td>
                <td class="border_right">
                    May
                </td>
                <td class="no_left_bottom rigt">
                    <?=$payment_schedule;?>
                </td>
            </tr>

            <tr >
               
                <td class="no_left_bottom">
                    Misc
                </td>
                <td colspan="2" class="no_left_bottom">
                   
                </td>

                <td class="no_left_bottom">

                     <?=$misc;?>
                </td>
                <td class="border_right">
                    June
                </td>
                <td class="no_left_bottom rigt">
                    <?=$payment_schedule;?>
                </td>
            </tr>

            <tr >
               
             
                <td class="no_left_bottom">
                    Lab
                </td>
                <td class="no_left_bottom">
                   <?=$lab_fee;?>
                </td >
                <td class="no_left_bottom">
                    <?=$lab_units;?>
                </td>
                <td class="no_left_bottom">
                     <?=$lab_total;?>
                </td>
                <td class="border_right top">
                    <strong>Total</strong>
                </td>
                <td class="no_left_bottom top rigt">
                    <strong><?=$grand_total;?></strong>
                </td>
            </tr>
            <tr >
                
              
                <td class="no_left_bottom">
                   NSTP
                </td>
                <td class="no_left_bottom">
                   <?=$nstp_fee;?>
                </td>
                <td class="no_left_bottom">
                    <?=$nstp_unit;?>
                </td>
                <td class="no_left_bottom">
                    <?=$nstp_total;?>
                </td>
                <td class="border_right">
                    
                </td >
                <td class="no_left_bottom rigt">
                    
                </td>
            </tr>
             <tr >
                
              
                <td class="no_left_bottom">
                   ID Card
                </td>
                <?php 
                   
                ?>
                <td class="no_left_bottom">
                     <?=$id_fee;?>
                </td>
                <td class="no_left_bottom">
                      <?=$id_unit;?>
                </td>
                <td class="no_left_bottom">
                      <?=$id_total;?>
                </td>
                <td class="border_right">
                    
                </td>
                <td class="no_left_bottom rigt">
                    
                </td>
            </tr>
             <tr >
            
               
                <td class="no_left_bottom">
                   Insurance
                </td>
                <?php
                    
                ?>
                <td  class="no_left_bottom">
                   
                </td>
                <td class="no_left_bottom">
                    
                </td>
                <td class="no_left_bottom">
                    <?=$insurance;?>
                </td>
                <td class="border_right">
                    
                </td>
                <td class="no_left_bottom rigt">
                    
                </td>
            </tr>
            <tr >
            
               
                <td class="no_left_bottom bottom top">
                   Sub total
                </td>
                <td  class="no_left_bottom bottom top">
                   
                </td>
                <td class="no_left_bottom bottom top">
                    
                </td>
                <?php 
                   
                ?>
                <td class="no_left_bottom bottom top">
                    <?=$other_total;?>
                    
                </td>
                <td class="border_right">
                    
                </td>
                <td class="no_left_bottom rigt">
                    
                </td>
            </tr>
            <tr >
            
            
                <td colspan="3" class="no_left_bottom">
                  <strong>Grand Total</strong> 
                </td>

                <?php 
                 
                ?>
                <td class="no_left_bottom">
                    <strong><?=$grand_total;?></strong>
                    
                </td>
                <td class="border_right">
                    
                </td>
                <td class="no_left_bottom rigt">
                    
                </td>
            </tr>
            <tr>
                <td colspan="10" style="background-color:grey;"></td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: 12px;">Sctudent Signature:</span>
                </td>
                <td>
                    
                </td>
                <td>
                    <span style="font-size: 12px;">Prepared by:</span>
                </td>
                <td>
                    
                </td>
                <td>
                   <span style="font-size: 12px;"> Registrar:</span>
                </td>
                <td colspan="2">
                    
                </td>
                
                <td>
                  <span style="font-size: 12px;"> Approved by: </span>
                </td>
                <td colspan="2">
                    
                </td>
               
                
            </tr>
            



            
        </tfoot>
    </table>

</div>
</body>
</html>