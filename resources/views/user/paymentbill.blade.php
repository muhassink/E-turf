<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
    h2 {
        color: darkslategrey;
    }

    div {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        border-style: groove;
        border-width: 5px;
        border-left-width: 5px;
        border-right-width: 5px;
        border-top-width: 5px;
        border-bottom-width: 5px;
        border-color: black;
       
    }

    table {
        padding: 200px;
        margin: 100px;
    }
</style>

<body>
    <center>
        
        @foreach($result as $value)
        <div id="tblCustomers">
        <h1>Reciept</h1>
            <table>
                <tr>
                    <td>
                        <h3>Name :{{$value->name_on_card}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Turf name:{{$value->nameturf}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Location :{{$value->location}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Date :{{$value->date}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Time :{{$value->time}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Price :{{$value->price}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Status :{{$value->status}}</h3>
                    </td>
                </tr>
            </table>
        </div>
        
        <button class="btn btn-info" id="btnExport">Download</button>
        @endforeach
    </center>
</body>


</html>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("bill.pdf");
                }
            });
        });
    </script>