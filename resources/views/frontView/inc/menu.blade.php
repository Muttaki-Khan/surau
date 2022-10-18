
<div class="soft-ban-top {{$theme}} {{$font}} "  id="themeID">
	<div class="container" >
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid" >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed {{$textcolor}}" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1" >
				  <ul class="nav navbar-nav menu__list">
					
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link {{$textcolor}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENGENAI KAMI <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<!-- <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="{{ asset('frontEnd') }}/images/m1.jpg" alt=" "/></a>
									</div> -->
									<div class="col-sm-3 multi-gd-img" style="width:100%">
										<ul class="multi-column-dropdown" >
											<li><a href="introduction">Information</a></li>
											<li><a href="goals">History</a></li>
											<li><a href="staff">Surau Committee</a></li>
											<li><a href="contact">Contact</a></li>
											
											
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>

					<li class="menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/')}}">UTAMA <span class="sr-only">(current)</span></a></li>

					<!-- <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link {{$textcolor}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">

											<li><a href="item">All items</a></li>
											<li><a href="item">Kendi</a></li>
											<li><a href="item">Other</a></li>
											@foreach($categories as $category)    
                                            <option href="{{$category->id}}" value='{{$category->id}}'>{{$category->categoryName}}</option>
                                            @endforeach
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="{{ asset('frontEnd') }}/images/m2.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li> -->
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/item')}}">AKTIVITI</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/video')}}">VIDEO KULIAH</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/donation')}}">SUMBANGAN DAN BANTUAN</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/contact')}}">HUBUNGI KAMI</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/member')}}">MEMBER</a></li>


				  </ul>
				</div>
			  </div>
			</nav>	
		</div>

		<div class="clearfix"></div>
	</div>
</div>

<script>
	window.onload = function() {
	// document.getElementById("themeID").classList.add('<?php echo $theme; ?>');
	//console.log('{{$logo}}');
	document.getElementById("logoID").src='{{$logo}}';

};
</script>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTables-example");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    columns = tr[i].getElementsByTagName("td");
    for ( j = 0; j<columns.length ; j++){
      td = tr[i].getElementsByTagName("td")[j];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        } else {
          tr[i].style.display = "none";
        }
      } 
    }      
  }
}
</script>

<script>
	function myFunction2() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('target');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>