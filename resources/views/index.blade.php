<!DOCTYPE html>
<html lang="en">

<head>
  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef" />
  <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALNOR</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


  <style>
    .hh {

      color: white;

    }
  </style>
  <link rel="stylesheet" href="{{'css1/style_index.css'}}">
  <link rel="stylesheet" href="{{'css1/card.css'}}">
  <link rel="stylesheet" href="{{'css1/c.css'}}">
  <link rel="stylesheet" href="{{'css1/foter_style.css'}}">
  <link rel="stylesheet" href="{{'css1/add.css'}}">

</head>

<body>

  <div class="header" id="header">
    <div class="container">
      <a href="#" class="logo">ALNOR</a>
      <ul class="main-nav">

        <li> <a href="/login" style="--i:1"> تسجيل دخول</a></li>
        <li> <a href="/post/create" style="--i:1"> اضافة اعمال</a></li>
        <li> <a href="#m" style="--i:1"> حجز </a></li>
        <li> <a href="#h" style="--i:1"> خدماتنا</a></li>
      </ul>
    </div>
  </div>
  </div>
  <!-- End Header -->
  <!-- Start Landing -->
  <div class="landing" dir="rtl">
    <div class="container">
      <h4> دقة واتقان بالعمل</h4>
      <div class="text" dir="rtl">
        <h1>ALNOR DENTAL CENTER </h1>
        <h4> المعاينة مجانية </h4>
        <h4> دقة واتقان بالعمل</h4>
        <h4> سرعة بانجاز العمل</h4>
        <h4> استخدام احدث الاجهزة</h4>
        <h4> اسعار خاصة لاهلنا المهجرين وحسومات تصل من 30% الى 50% على كافة المعالجات السنية</h4>
        <p>
          </h3>
          <a href="#m" class="btn">حجز موعد</a>
        </p>

      </div>
      <div class="image">
        <img src="image/Doctors-pana.png" alt="" />
      </div>
    </div>

  </div>


  <center>
    <h1 class="hh" id="h">خدماتنا</h1>




  </center>




  <div class="cards">
    <div class="content">
      <img src="image/f3.png" alt="" />
      <h3> استشارة</h3>


    </div>
    <div class="content">
      <img src="image/f4.png" alt="" />
      <h3> قلع اسنان</h3>

    </div>

    <div class="content">
      <img src="image/f5.png" alt="" />
      <h3> علاج عصب الاسنان</h3>

    </div>
    <div class="content">
      <img src="image/f6.png" alt="" />
      <h3> معالجات اطفال </h3>

    </div>
    <div class="content">
      <img src="image/f9.png" alt="" />
      <h3> تنظيف وعلاج اللثة</h3>

    </div>


  </div>


  <br> <br><br>

  <center>
    <h1 class="hh" id="job">اعمالنا</h1>

  </center>

  <div class="cards">

    @foreach($posts as $post)

    <div class="content">
      <img src="image/f2.png" alt="" />
      <h6> {{$post->title}}
        <h6>
    </div>

    @endforeach


    <div class="container contact-form" id="m">
      <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
      </div>
      <form action="{{route('AL_NOUR.insert')}}" method="post">
        <h3>حجز موعد</h3>
        <div class="row">
          <div class="col-md-12" id="fr">

            @csrf

            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="الاسم الثلاثي  *" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="age" class="form-control" placeholder="العمر  *" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="addres" class="form-control" placeholder="مكان الاقامة  *" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="hour" class="form-control" placeholder="رقم الواتس *" value="" />
            </div>

            <div class="form-group">
              <input type="text" name="day" class="form-control" placeholder=" اليوم *" value="" />
            </div>


            <div class="form-group">
              <input type="datetime-local" name="date_time" class="form-control" placeholder="Your date_time *" value="" />
            </div>


            <div class="form-group">

              <center>
                <input type="submit" name="submit" class="btnContact" value="Send " id="btn" />
              </center>

            </div>
          </div>

        </div>
      </form>




    </div>
  </div>



  <div class="footer" id="FOTER">
    <div class="container">
      <div class="box">
        <h3>ALNOR</h3>
        <ul class="social">
          <li>
            <a href="#" class="facebook">
              <i class="bx bxl-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#" class="twitter">
              <i class='bx bxl-twitter'></i>
            </a>
          </li>
          <li>
            <a href="#" class="instagram">
              <i class='bx bxl-instagram'></i>
            </a>
          </li>
        </ul>
        <p class="text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus
          nulla rem, dignissimos iste aspernatur
        </p>
      </div>
      <div class="box">
        <ul class="links">
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <li><a href="#">Website ALNOR DENTAL CENTER </a></li>
        </ul>
      </div>
      <div class="box">
        <div class="line">
          <i class="fas fa-map-marker-alt fa-fw"></i>
          <div class="info">Syria, Idlib</div>
        </div>
        <div class="line">
          <i class="far fa-clock fa-fw"></i>
          <div class="info">Business Hours: From 5:00 To 10:00</div>
        </div>
        <div class="line">
          <i class="fas fa-phone-volume fa-fw"></i>
          <div class="info">
            <span id="phone">+20123456789</span>

          </div>
        </div>
      </div>

    </div>
    <p class="copyright" id="name">
      Made :Hussen Najjar
    </p>
  </div>


  <script>
    @if(session('info'))
    toastr.options = {
      "progressBar": true,

    }

    toastr.success('{{ session('
      info ') }}');
    @endif
  </script>



  <script src="{{ asset('/sw.js') }}"></script>
  <script>
    if (!navigator.serviceWorker.controller) {
      navigator.serviceWorker.register("/sw.js").then(function(reg) {
        console.log("Service worker has been registered for scope: " + reg.scope);
      });
    }
  </script>

</body>

</html>