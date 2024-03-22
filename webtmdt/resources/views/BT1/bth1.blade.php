<meta charset="utf-8">
<form action="{{url('upper')}}" method = "get">
Chuỗi ký tự in thường: <input type='text' name='chuoi_in_thuong'><br>
<input type='submit' value='Kết quả'>
{{ csrf_field() }}
</form>