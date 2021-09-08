<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/prospero.css">
  <title>Prospero</title>
</head>

<body>

  <main>
    <section class="side_container">
      <?php include('sidebar.php'); ?>
    </section>
    <section class="main_container">
      
    
<header class="main_header ">
    <div class="main_header_left">
        <h1>Prospero settings</h1>
        <h2>Sed fringilla nisl magna. Curabitur in sapien at tortor volutpat sodales vel at ligula. Nam rutrum vestibulum dui at lobortis. Vivamus rhoncus erat pharetra, condimentum nisl eu, semper lectus. Sed pharetra magna pharetra, feugiat libero et, varius eros. Donec nec rhoncus sapien, non semper purus. Donec feugiat sem nec mattis vehicula. Nunc fermentum mattis efficitur. Nulla placerat finibus ligula a aliquet.</h2>
    </div>
    <div class="main_header_right">
        <div class="dropdown connection-panel">
    <div class="dropdown-toggle  head_link profil" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="img_container">
            <!--<img src="/media_site/assets/images/fake.png" class="rounded-circle" alt="">-->
            <img src="/media_site/users/thumbnails/anonymous_user.jpg" class="rounded-circle" alt="">
        </div>
        anonymous
    </div>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <form>
            <div class="form_item connection-panel-username" data-children-count="1">
                <label for="exampleInputEmail1" class="form-label txt_m">Email address</label>
                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" data-kwimpalastatus="alive" data-kwimpalaid="1631113119531-13">
                <div id="emailHelp" class="form-text txt_s">We'll never share your email with anyone else.</div>
            </div>
            <div class="form_item connection-panel-password" data-children-count="1">
                <label for="exampleInputPassword1" class="form-label txt_m">Password</label>
                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" data-kwimpalastatus="alive" data-kwimpalaid="1631113119531-4">
            </div>
            
            <button action-name="log" class="btn btn-primary" type="button">Submit</button>
        </form>
    </div>
</div>
    </div>
</header>



      <div class="main_content ">
    
      
<section class="row preferences-view">
			<div class="col screenHeight settings-general-menu">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="groups-and-users-tab" data-bs-toggle="tab" data-bs-target="#groups-and-users" type="button" role="tab" aria-controls="groups-and-users" aria-selected="true">
							Groups &amp; users
						</button>
					</li>
					<!--<li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button></li>-->
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="groups-and-users" role="tabpanel" aria-labelledby="groups-and-users-tab">
						<div class="users-panel">
	<header class="main_header card-header" style="height: auto; min-height: auto;">
		<div class="">
			<div class="search_container">
    <form class="search_form" data-children-count="1">
        <input class="search_input txt_15" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn">
            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 589 520" style="enable-background:new 0 0 589 520;" xml:space="preserve">
    <g>
        <path d="M248.9,360.7c-76.4,0-138.5-62.1-138.5-138.5c0-76.4,62.1-138.5,138.5-138.5c76.4,0,138.5,62.1,138.5,138.5
            C387.4,298.6,325.3,360.7,248.9,360.7z M248.9,133.7c-48.8,0-88.5,39.7-88.5,88.5c0,48.8,39.7,88.5,88.5,88.5s88.5-39.7,88.5-88.5
            C337.4,173.4,297.7,133.7,248.9,133.7z"></path>
    </g>
    <g>
        <rect x="318" y="329" transform="matrix(0.7071 0.7071 -0.7071 0.7071 364.9628 -167.3577)" width="133" height="55.7"></rect>
    </g>
</svg>

        </button>
    </form>
</div>

		</div>
		<div class="" style="width:2rem;">
			<div class="dropdown generic-menu">
    <a class="btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 164 550" style="enable-background:new 0 0 164 550;" xml:space="preserve">
            <circle cx="82" cy="75.3" r="60.3"></circle>
            <circle cx="82" cy="474.7" r="60.3"></circle>
            <circle cx="82" cy="275" r="60.3"></circle>
        </svg>
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a action-name="createUser" class="dropdown-item" href="#">Create user</a></li><li><a action-name="createGroup" class="dropdown-item" href="#">Create group</a></li><li><a action-name="edit" class="dropdown-item disabled" href="#">Edit</a></li><li><a action-name="delete" class="dropdown-item disabled" href="#">Delete</a></li></ul>
</div>
		</div>
	</header>
	<div class="card-body">
		<table class="table table-hover users-table">
			<thead>
				<tr>
					<th property-name="thumbnail"></th>
					<th property-name="username">User name</th>
					<th property-name="first_name">First name</th>
					<th property-name="last_name">Last Name</th>
				</tr>
			</thead>
			<tbody>
                <tr object-model="PUser" object-id="23"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/anonymous_user.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">anonymous</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="36"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_10.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group4</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="27"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_1.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test0@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="28"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_2.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test1@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="29"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_3.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test2@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="30"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_4.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test3@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="31"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_5.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test4@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PGroup" object-id="32"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_6.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group0</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="33"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_7.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group1</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="34"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_8.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group2</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="35"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_9.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group3</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="25"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Prospero</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="21"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/francis.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">francis@gmail.com</div></div></td><td>Francis</td><td>Chateauraynaud</td></tr>
<tr object-model="PGroup" object-id="26"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/groupPublic.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Public</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="24"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/gspr.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">GSPR</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="20"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/josquin.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">josquin@gmail.com</div></div></td><td>Josquin</td><td>Debaz</td></tr>
<tr object-model="PUser" object-id="22"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/orelie.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">orelie@gmail.com</div></div></td><td>Orélie</td><td>Desfriches-Doria</td></tr>
                   <tr object-model="PUser" object-id="23"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/anonymous_user.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">anonymous</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="36"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_10.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group4</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="27"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_1.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test0@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="28"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_2.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test1@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="29"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_3.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test2@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="30"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_4.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test3@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="31"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_5.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test4@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PGroup" object-id="32"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_6.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group0</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="33"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_7.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group1</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="34"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_8.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group2</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="35"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_9.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group3</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="25"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Prospero</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="21"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/francis.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">francis@gmail.com</div></div></td><td>Francis</td><td>Chateauraynaud</td></tr>
<tr object-model="PGroup" object-id="26"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/groupPublic.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Public</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="24"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/gspr.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">GSPR</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="20"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/josquin.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">josquin@gmail.com</div></div></td><td>Josquin</td><td>Debaz</td></tr>
<tr object-model="PUser" object-id="22"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/orelie.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">orelie@gmail.com</div></div></td><td>Orélie</td><td>Desfriches-Doria</td></tr>
                       <tr object-model="PUser" object-id="23"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/anonymous_user.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">anonymous</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="36"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_10.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group4</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="27"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_1.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test0@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="28"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_2.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test1@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="29"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_3.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test2@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="30"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_4.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test3@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PUser" object-id="31"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_5.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">test4@gmail.com</div></div></td><td>John</td><td>Doe</td></tr>
<tr object-model="PGroup" object-id="32"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_6.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group0</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="33"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_7.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group1</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="34"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_8.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group2</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="35"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail_9.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">group3</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="25"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/fake_thumbnail.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Prospero</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="21"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/francis.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">francis@gmail.com</div></div></td><td>Francis</td><td>Chateauraynaud</td></tr>
<tr object-model="PGroup" object-id="26"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/groupPublic.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">Public</div></div></td><td></td><td></td></tr>
<tr object-model="PGroup" object-id="24"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/gspr.png" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-group"></div><div class="user-name">GSPR</div></div></td><td></td><td></td></tr>
<tr object-model="PUser" object-id="20"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/josquin.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">josquin@gmail.com</div></div></td><td>Josquin</td><td>Debaz</td></tr>
<tr object-model="PUser" object-id="22"><td class="col-thumbnail"><div class="col-container"><div class="img_container"><img src="/media_site/users/thumbnails/orelie.jpg" class="rounded-circle" alt=""></div></div></td><td class="col-username"><div class="col-container"><div class="icon-user"></div><div class="user-name">orelie@gmail.com</div></div></td><td>Orélie</td><td>Desfriches-Doria</td></tr>
                
            </tbody>		</table>
	</div>
</div>

					</div>
					<!--<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>-->
				</div>
			</div>
		</section>


      </div>

    </section>
  </main>

  <script src="assets/js/prefixfree.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"> </script>
</body>

</html>