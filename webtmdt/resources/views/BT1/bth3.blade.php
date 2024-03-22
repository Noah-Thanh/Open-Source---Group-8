<form action="{{url('chanle')}}" method = "get">
Dãy số nguyên: <input type='text' name='day_so'><br>
<input type='submit' value='Kết quả'>
{{ csrf_field() }}
</form>