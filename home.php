<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
body  {
  background-image: url("https://scx2.b-cdn.net/gfx/news/2022/farming-practices-good.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
.fcc-btn {
  color: white;
  padding: 15px 25px;
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.fcc-btn:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-fcc-btn{
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.fcc-btn:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
</style>
<body>
     
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a class="fcc-btn" href="index.html">Let's GO</a> <br><br>
     <a class="fcc-btn" href="logout.php">Logout</a> 
</p> 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

 