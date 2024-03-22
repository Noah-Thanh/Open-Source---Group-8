<form action="{{url('inthongtinsv')}}" method = "post">
Thông tin sinh viên: <input type='text' name='thong_tin_sv'size='35'><br>
<input type='submit' value='In thông tin'>
{{ csrf_field() }}
</form>
