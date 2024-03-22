
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
                    <td align='center'>Tên thể loại</td>
                    <td align='center'>Số lượng cuốn sách</td>
            </tr>
            @foreach($so_sach as $row)
                <tr>
                <td>{{$row->ten_the_loai}}</td>
                <td>{{$row->sl}}</td>
                </tr>
            @endforeach
            </table>
            </body>
            <html>