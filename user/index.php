<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/CSS/user.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head> 
<body>
   
<div class="title">
        <p class="para1">Student Job Network</p>
        </div>
    <div id="navigation">
  <div class="inline">
    <div id="menu" onclick="onClickMenu()">
      <div id="bar1" class="bar"></div>	
      <div id="bar2" class="bar"></div>
      <div id="bar3" class="bar"></div>
    </div>
    <ul class="nav" id="nav">
      <li><a href="/Home/index.php"><i home class="fa-solid fa-house"></i></a></li>
      <li><a href="/search-job/search.php"><i class="fa-solid fa-briefcase"></i></a></li>
      <li><a href="/Save-jobs/index.php"><i class="fa-solid fa-bookmark"></i></a></li>
      <li><a href="/Application/index.php"><i class="fa-solid fa-note-sticky"></i></a></li>
      <li><a href="/user/index.php"><i class="fa-solid fa-user"></i></a></li>
      <li><a href="/index.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
  </div>
</div>
  </div>
<div class="box">
  <div class="margins">
  <div class="inline-block">
<div class="container">
      <div class="flex1">
        <img class="imgs" src="/images/elmer.jpg" alt="img">
      </div>
      <div class="flex2">
        <h2 class="h1">Update a new photo</h2>
      </div>
    </div>
</div>
<button class="spaces">View</button>
  </div>

  <div class="box2">
  <p class="class">Change User Information here</p>
<div class="group">
  <p class="fill">Fullname*</p>
  <input class="fn" type="text" placeholder="Fullname">

  <p class="fill">Address*</p>
  <input class="fn" type="text" placeholder="Address">

  <p class="fill">City*</p>
  <input class="fn" type="text" placeholder="City">
</div>

<div class="group">
  <p class="fill">Email Address*</p>
  <input class="fn" type="text" placeholder="Email">

  <p class="fill">Password*</p>
  <input class="fn" type="password" placeholder="Password">

  <p class="fill">Province*</p>
  <input class="fn" type="text" placeholder="Province">
</div>
<button class="bt">Update Information</button>
</div>
  </div>
  
</body>
</html>
<script src="script.js"></script>