<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

    <title>Document</title>
    <style>
.print_container {
    width: 60%;
    margin: 0 auto;
    }
.exam_title {
    text-align: center;
}

.info_block {
    width: 50%;
    float: left;
    height: 50px;
    line-height: 50px;
    text-align: center;
}
.user_info_block {
    margin-top: 74px;
}
        </style>
</head>
<body>
    <div class="print_container  mt-5">

        <div class="exam_title">
        <h3>
            {{ $exam_title }}
        </h3>
    <p>Exam date: {{ date('M d, Y', strtotime($exam_date)) }}</p>
        </div>
        <div class="user_info_block">
            <div class="info_block">
            <label for="name">Name : {{ $student_info->name }}</label>
            </div>
            <div class="info_block">
                <label for="name">Email : {{ $student_info->email }}</label>
            </div>
            <div class="info_block">
                <label for="name">Phone Number : {{ $student_info->mobile_no }}</label>
            </div>
        </div>
        <br>
        <br>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="print_btn float-right">
                    <button class="btn btn-success" onclick="window.print()">Print</button>
                </div>
            </div>
        </div>


    </div>


</body>
</html>


