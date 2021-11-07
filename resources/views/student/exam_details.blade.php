<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #eb5858;
      color: white;
    }
    </style>
<body>
    <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="text-align: center;">
            <img style="width: 100px;" src="{{ public_path('/backend/img/greylogo.png') }}" alt=""><br>
            
            <h2>Lionsfield English School</h2>
        <p><strong>Address:</strong></p>
        <p>Arquímedes 130, Piso 5. Col. Polanco V Sección<br>
            CDMX, C.P. 11560</p>
        <p><strong>Email:</strong> atencion@lionsfield.mx </p>
        <p><strong>Student Details</strong></p>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-2">
                &nbsp;
              </div>
            <div class="col-sm-8">

              <div class="card mt-4">
                <div class="card-body">
                    <h2>Basic Information</h2>
                    <table class="table" id="customers">
                        <tr>
                            <td>Name:</td>
                            <td>{{ $result_info->userRelation->name }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{  $result_info->userRelation->email }}</td>
                        </tr>
                        <tr>
                            <td>Exam Name:</td>
                            <td>{{ ($result_info->examMasterRelation->title !=Null) ? $result_info->examMasterRelation->title : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Exam Date:</td>
                            <td>{{ ($result_info->examMasterRelation->exam_date !=Null) ? $result_info->examMasterRelation->exam_date : "No Data Available Yet." }}</td>
                        </tr>
                    </table>
                    <h2>Exam Result Information</h2>
                    <table class="table" id="customers">
                        <tr>
                            <td>Number Correct</td>
                            <td>{{ (!empty($result_info->yes_ans)) ? $result_info->yes_ans : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Number Incorrect</td>
                            <td>{{ (!empty($result_info->no_ans) || is_numeric($result_info->no_ans) ) ?$result_info->no_ans : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            
                            <td>{{ (!empty($result_info->no_ans) || is_numeric($result_info->no_ans)) ?$result_info->result : "No data available yet." }} %</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

  </div>
  <!-- /.content-wrapper -->
</body>
</html>



