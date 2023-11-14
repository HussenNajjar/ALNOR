
<link rel="stylesheet" href="{'css11/aaaa.css'}">


<style>
body{
    background-color: #0c1022;
}
  .cards {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 130px 0;
    color: white;
  }

  .cards .content {
    width: 20%;
    margin: 15px;
    box-sizing: border-box;
    background-color: #0c1022;
    float: left;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    transition: 0.4s;
  }

  @media (max-width: 1150px) {
    .content {
      min-width: 40%;
    }
  }

  @media (max-width: 768px) {
    .cards {
      margin: 20px 0;
    }

    .content {
      min-width: 80%;
    }
  }

  .cards .content:hover {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    transform: translate(0px, -8px);
    background:linear-gradient(  #0f1a4b,#171f3f);

  }

  .cards .content img {
    width: 200px;
    height: 200px;
    text-align: center;
    margin: 0 auto;
    display: block;
  }

  .cards .content h3 {
    text-align: center;
    font-size: 30px;
    margin: 0;
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .cards .content a {
    display: inline-block;
    text-decoration: none;
    text-align: center;
    width: 110px;
    outline: none;
    padding: 10px;
    border-radius: 5px;
    background-color: rgb(11, 122, 76);
    font-size: 15px;
    color: #f2f2f2;
    font-weight: bold;
    margin-bottom: 10px;
    cursor: grab;
  }

</style>

<body>

@foreach( $show as $t)

<div class="cards">
<div class="content">

<label for="">name</label> :  {{$t->name}}<h3></h3>
<label for="">age</label> :  {{$t->age}}<h3></h3>
<label for="">addres</label> :   {{$t->addres}}<h3></h3>
<label for="">today</label> :   {{$t->day}}<h3></h3>
<label for="">phone</label> :  {{$t->hour}}<h3></h3>
<label for="">data_time</label> :   {{$t->date_time}}<h3></h3>
<a href="{{route('AL_NOUR.edit',$t->id)}}"> edit</a>
<a href="{{route('AL_NOUR.delete',$t->id)}}"> delete</a>



</div>

@endforeach


</body>







