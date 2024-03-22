
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
                    <td align='center'>Mã thể loại</td>
                    <td align='center'>Tên thể loại</td>
            </tr>
            @foreach($the_loai_sach as $row)
            <tr>
                    <td>{{$row->id}} </td>
                    <td>{{$row->ten_the_loai}} </td>
            </tr>
            @endforeach
            </table>
            </body>
            <html>