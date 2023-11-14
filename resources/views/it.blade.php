<h1> create new</h1>
<h1> my name is HERO</h1>

<!--          خدني على صفحة insert    -->
<FORM action="{{route('AL_NOUR.insert')}}" method="post" >
@csrf
<input type="text" name ="name" placeholder="name">
<input type="text" name ="age" placeholder="age">
<input type="text" name ="addres" placeholder="addres">
<input type="text" name ="day" placeholder="day">
<input type="text" name ="hour" placeholder="hour">
<input type="date" name ="date_time" placeholder="date_time">

<button type="submit"> save</button>
</FORM>
