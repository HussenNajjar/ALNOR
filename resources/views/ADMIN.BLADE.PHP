

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <link rel="stylesheet" href="{{'css1/style.css'}}">
        <title>ALNOR</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    </head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">ALNOR</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<!--<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text"> </span> -->
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
				<a href="#" class="logout">
                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit(); " >
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
            </form>

		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="image/Doctors-pana.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>عدد المرضى</p>
					</span>
				</li>

			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>بيانات المرضى </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>الرقم</th>
								<th>الاسم </th>
								<th>العمر</th>
								<th>مكان الاقامة</th>
								<th>اليوم </th>
								<th>الساعة</th>
								<th>التاريخ</th>
							</tr>
						</thead>
						<tbody>

							<tr>



            @foreach( $show1 as $t)

                    <td>  {{$t->id}}  </td>
                    <td>  {{$t->name}}  </td>
                    <td>  {{$t->age}}  </td>
                    <td>  {{$t->addres}}  </td>
                    <td>  {{$t->day}}  </td>
                    <td>  {{$t->hour}}  </td>
                    <td>  {{$t->date_time}}  </td>



                <td><span class="status completed"><a href="{{route('AL_NOUR.edit',$t->id)}}"> edit</a></span></td>
                <td><span class="status completed"><a href="{{route('AL_NOUR.delete',$t->id)}}"> delete</a></span></td>



							</tr>
                            @endforeach


						</tbody>
					</table>
				</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{'js1/script.js'}}"></script>


    <script>
@if(session('info'))
toastr.options={
        "progressBar":true,

    }

    toastr.success('{{ session('info') }}');
@endif
</script>
</body>
</html>




