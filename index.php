<html>
<head>
	<title>Pet shopping</title>
	<link rel="stylesheet" href="index_style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #130f40;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  cursor: pointer;
}

#myBtn:hover {
  background-color: #e67e22;
}
</style>
</head>

		<body>
		
				
			
				
				
				
				<?php 
				include("header_index.php");
				include("mainbody.php");
				
				?>
				
			
				<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
				
				<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> Eldo Pets <span> Eldoret, Kenya </span> | all rights reserved! </div>

</section>
<style>
.footer{
    color: black;
    position: relative;
    background-position: center;
    background-size: center;
    padding-top: 10rem;
    padding-bottom: 2rem;
    
  }
  .footer img {
  position: absolute;
  top: 0;
  left: 0;
  height: 10rem;
  width: 100%;
}
  .footer .share {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1.5rem;
}
.footer .share a {
  color: black;
  border-color: #130f40;
}

.footer .share a:hover {
  color: #130f40;
}

.footer .share a::before {
  background: #fff;
}

.footer .share a i {
  padding-right: .5rem;
}
.footer .credit {
  text-align: center;
  color: #130f40;
  font-size: 2rem;
  padding: 2rem 1rem;
  margin-top: 2.5rem;
}

.footer .credit span {
  color: #e67e22;
}
</style>
				<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

}
</script>

		</body>

</html>
