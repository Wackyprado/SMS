<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <style type="text/css">
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
                  
                    <!-- <strong>Mark Anthony Canal</strong> -->
                </td>
                <td class="text-center" colspan="2">
                    Student No.
                </td>
                <td class="text-center" colspan="2" id="id">
                 
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
    
                </td>
                <td class="text-center" colspan="2">
                    Sem/Year
                </td>
                <td class="text-center" colspan="2" id="sem-year">
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
            <tr>
                <td class="text-center">
                    BSIT101
                </td>
                <td class="text-center">
                    CPR2
                </td>
                <td class="text-center"colspan="2">
                    Capstone Project and Research 2
                </td>
                <td class="text-center" colspan="2">
                    
                </td>
                <td class="text-center" >
                    3
                </td>
                <td class="text-center">
                    3
                </td>
                <td class="text-center">
                    
                </td>
                <td class="text-center">
                    3
                </td>
            </tr>
        <tbody>
        <tfoot>
            
        </tfoot>
    </table>

</div>



</script>
</body>
</html>