<html>
        <head>
            <style>
                .table
                {
                    border-collapse:collapse;
                }
                .table tr td 
                {
                    border:1px solid #000;
                    padding: 5px;
                }
            </style>
        </head>
        <body>
            <table class='table'>
            <tr>
                    <td align='center'>Mã sinh viên</td>
                    <td align='center'>Mã sinh viên</td>
            </tr>
            @foreach($list_sv as $sv)
            <tr>
                    <td>{{$sv[0]}} </td>
                    <td>{{$sv[1]}} </td>
            </tr>
            @endforeach
            </table>
            </body>
            <html>