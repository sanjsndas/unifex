<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unifexregn - Your request has been accepted!</title>
    <meta property="og:description" content="Unifexregn - Your request has been accepted!" />
    <meta name="description" content="Unifexregn - Your request has been accepted!" />
    <meta property="og:title" content="Unifexregn - Your request has been accepted!" />
    <meta property="og:image" content="site-logo.png" />
    

    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet" />
    

    <link rel="shortcut icon" href="site-logo.png" type="image/x-icon" />
   

    
  </head>

  <body>

     

    <div class="header-lay">
      <div class="container-block">
        <header class="header promoqi-overlay ">
          <a href="./" class="logo">Unifexregn</a>
          <input class="menu-btn" type="checkbox" id="menu-btn" />
          <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
          <ul class="menu">
            <li><a href="./#about">About us</a></li>
            <li><a href="./#benef">Our Advantages</a></li>
            
          </ul>
        </header>
      </div>
    </div>

    <div class="header-content-stick">
      <div class="header-content-lay">
        <video autoplay muted loop playsinline id="video-bg" preload="metadata">
          <source src="assets/images/background_2026-07-25_21-00-370.mp4" type="video/mp4" />
        </video>
        <div class="container-block">
          <div class="header-content">
            <div class="logoImg"><img src="site-logo.png" alt="" /></div>
            <h2>Welcome to Unifexregn, your trusted partner for premium furniture solutions. We combine innovative design with high-quality materials to create pieces that transform your living and working spaces. Explore our exclusive collections and custom options tailored to your unique taste and needs. Experience comfort, style, and durability all in one place with Unifexregn.</h2>
            
          </div>
        </div>
        <img src="assets/images/main_q900.jpg" alt="" class="img-bg-one" />
        <img src="assets/images/main_q901.jpg" alt="" class="img-bg-two" />
      </div>
    </div>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-inventoryiz__icon{
		margin: 0px;
		padding: 0px;
		font-family: 'Signika', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 283px 0px;
	}
	.bodyClass1-inventoryiz__icon{
		background: #f6f4ec;
		color: #ffffff;
	}
	.bodyClass2-inventoryiz__icon{
		background: #f8f1f1;
		color: #fff;
	}
	.bodyClass3-inventoryiz__icon{
		background: #fff;
		color: #111;
	}
	.wrapage-block-inventoryiz__icon{
		background-size: 100%;
		width: 100%;
	}
	.box_main-inventoryiz__icon{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-inventoryiz__icon h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-inventoryiz__icon p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-inventoryiz__icon{
		text-align: start;
	}
	.mainBlock-inventoryiz__icon ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-inventoryiz__icon ul>li span{
		font-weight: bold;
	}
	.mainBlock-inventoryiz__icon{
		max-width: 922px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-inventoryiz__icon .cBlock-inventoryiz__icon{
		text-align: start;
	}

	.bodyClass3-inventoryiz__icon .mainBlock-inventoryiz__icon{
		background: none;
		border-top: 2px solid #f8f1f1;
		border-bottom: 2px solid #f8f1f1;
	}
	.bodyClass2-inventoryiz__icon .mainBlock-inventoryiz__icon{
		background: #0A043C;
		color: #fff !important;
		box-shadow: 0px 0px 15px #0A043C;
	}
	.bodyClass2-inventoryiz__icon .mainBlock-inventoryiz__icon p{
		color: #fff !important;
	}
	.bodyClass1-inventoryiz__icon .mainBlock-inventoryiz__icon{
		background: #160651;
		color: #ffffff;
		border-left: 5px solid #1B1B2F;
	}
	.bodyClass1-inventoryiz__icon .mainBlock-inventoryiz__icon p{
		color: #ffffff !important;
	}
	.order-inventoryiz__icon{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-inventoryiz__icon p{
			padding: 0px 15px;
		  }
		  .box_main-inventoryiz__icon h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-inventoryiz__icon{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-inventoryiz__icon{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-inventoryiz__icon" id="mainWrapp-inventoryiz__icon">


	<div class="wrapage-block-inventoryiz__icon">
		<div class="box_main-inventoryiz__icon">
			<div class="mainBlock-inventoryiz__icon">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-inventoryiz__icon">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>




    <div class="footer-lay">
      <div class="container-block">
        <div class="footer">
          <div class="footer-contact" id="contact">
            
          </div>
          <div class="footer-privacy">
            <div class="privacy">
              <a href="privacy.html">Privacy policy</a>
              <a href="terms.html">Terms & Conditions</a>
              <a href="disclaimer.html">Disclaimer</a>
            </div>
            <p>&#169; 2026 Unifexregn</p>
          </div>
        </div>
      </div>
    </div>

   
    
    <style>

      body{
      	direction: ltr;
      	font-family: 'Cormorant', sans-serif !important;
      	font-size: 18px;
      	margin: 0;
      	padding: 0px;
      	line-height: 1.2;
        overflow: auto;
      }

      html {
      	scroll-behavior: smooth;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      p{
      	padding: 0;
      	margin: 0;
      }

      p, li{
        padding: 5px 0;
        line-height: 1.2;
      }

      a{
      	text-decoration: none;
      	color: inherit;
      	cursor: pointer;
      }

      img{
      	display: block;
      	max-width: 100%;
      	max-height: 100%;
      }

      ul{
      	margin: 0;
      	padding: 0;
      }

      .page-privacy{
        color: #fff;
        word-break: break-all;
        overflow: hidden;
        text-align: justify;
        background-color: #180707bf;
        padding: 109px 0px;
        width: 100%;
      }

      .page-privacy a{
        color: #fff;
      }

      .page-privacy a:hover{
        color: #fff;
        opacity: 0.5;
      }

      .page-privacy ul{
        list-style: inside;
      }
      .x981m3 {
        z-index: 999;
      }
      .container-block{
        width: auto;
        padding-right: 21px;
        padding-left: 21px;
        margin-right: auto;
        margin-left: auto;
        position: relative;
      }

      @media screen and (min-width: 480px) {
        .container-block{
        max-width: 450px;
        }
      }
      @media screen and (min-width: 575px){
        .container-block{
          max-width: 540px;
        }
      }
      @media screen and (min-width: 768px) {
        .container-block{
        max-width: 730px;
        }
      }
      @media screen and (min-width: 992px) {
        .container-block{
          max-width: 960px;
        }
      }

      @media screen and (min-width: 1200px){
        .container-block{
          max-width: 1170px;
          }
      }

      @media (min-width: 1400px){
        .container-block{
          max-width: 1274px;
        }
      }

      .header-lay{
        background-color: #000;
        box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
        position: fixed;
        width: 100%;
        z-index: 14;
      }

      .header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;
      }

      .header ul {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
        background-color: #000;
      }

      .header li a {
        display: block;
        padding: 20px 20px;
        border-right: 1px solid #f4f4f4;
        text-decoration: none;
        color: #fff;
      }

      .header li a:hover,
      .header .menu-btn:hover {
        color: #000;
        background-color: #f4f4f4;
      }

      .header .logo {
        color: #fff;
        transition: 0.3s ease;
        display: block;
        float: left;
        font-size: 22px;
        padding: 5px 18px;
        text-decoration: none;
      }

      .header .logo:hover{
        color: #828080;
        opacity: 0.5;
      }

      .header .menu {
        clear: both;
        max-height: 0;
        transition: max-height .2s ease-out;
      }

      .header .menu-icon {
        cursor: pointer;
        float: right;
        padding: 22px 18px;
        position: relative;
        user-select: none;
      }

      .header .menu-icon .nav-icon {
        background: #fff;
        display: block;
        height: 2px;
        position: relative;
        transition: background .2s ease-out;
        width: 18px;
      }

      .header .menu-icon .nav-icon:before,
      .header .menu-icon .nav-icon:after {
        background: #fff;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all .2s ease-out;
        width: 100%;
      }

      .header .menu-icon .nav-icon:before {
        top: 5px;
      }

      .header .menu-icon .nav-icon:after {
        top: -5px;
      }

      .header .menu-btn {
        display: none;
      }

      .header .menu-btn:checked ~ .menu {
        max-height: 240px;
      }

      .header .menu-btn:checked ~ .menu-icon .nav-icon {
        background: transparent;
      }

      .header .menu-btn:checked ~ .menu-icon .nav-icon:before {
        transform: rotate(-45deg);
        top:0;
      }

      .header .menu-btn:checked ~ .menu-icon .nav-icon:after {
        transform: rotate(45deg);
        top:0;
      }

      @media (min-width: 767px) {
        .header li {
          float: left;
        }
        .header li a {
          padding: 18px;
        }
        .header .menu {
          clear: none;
          float: right;
          max-height: none;
        }
        .header .menu-icon {
          display: none;
        }
      }

      .header-content-stick{
        position: relative;
        z-index: 13;
      }

      .header-content-lay{
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        position: relative;
        background-color: #180707bf;
      }

      #video-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
      }

      .header-content{
        filter: drop-shadow(2px 4px 6px black);
        position: relative;
        z-index: 3;
        padding: 50px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 25px;
      }

      @keyframes slideIn {
        0% {
          opacity: 0;
          transform: translateY(100%);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .header-content h2{
        font-size: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        opacity: 0;
        animation: slideIn 1s ease 2s forwards;
        text-align: center;
        color: #fff;
      }

      .header-content a{
        opacity: 0;
        animation: slideIn 1s ease 3s forwards;
        text-align: center;
      }

      .logoImg{
        opacity: 0;
        animation: slideIn 1s ease 1s forwards;
        max-width: 109px;
      }

      .logoImg img{
        width: 100%;
        height: 100%;
      }

      .img-bg-one{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 50%;
        position: absolute;
        top: 141px;
        left: 141px;
        object-fit: cover;
        z-index: 1;
        opacity: 0;
        width: 336px;
        height: 336px;
        animation: topAndBottom 5s ease infinite;
      }

      @keyframes topAndBottom {
        0% {
          opacity: 0.8;
          transform: translateY(0);
        }
        50% {
          opacity: 0;
          transform: translateY(40%);
        }
        100% {
          opacity: 0.8;
          transform: translateY(0);
        }
      }

      .img-bg-two{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 50%;
        position: absolute;
        bottom: 141px;
        right: 141px;
        z-index: 1;
        object-fit: cover;
        opacity: 0;
        width: 336px;
        height: 336px;
        animation: bottomAndTop 5s ease infinite;
      }

      @keyframes bottomAndTop {
        0% {
          opacity: 0.8;
          transform: translateY(40%);
        }
        50% {
          opacity: 0;
          transform: translateY(0);
        }
        100% {
          opacity: 0.8;
          transform: translateY(40%);
        }
      }

      .about-us-lay{
        position: sticky;
        bottom: 0;
        z-index: 12;
        width: 100%;
        padding: 50px 0;
        background-color: #180707;
      }

      .about-us{
        width: 50%;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
        margin: 0 auto;
        border: 2px solid #fff;
        padding: 25px;
      }

      .about-us h2{
        text-transform: uppercase;
        border-bottom: 1px solid #fff;
        padding-bottom: 25px;
        letter-spacing: 5px;
        text-align: center;
        color: #fff;
        position: relative;
        z-index: 1;
        margin-bottom: 42px;
      }

      .about-us-box{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .about-us-box p{
        position: relative;
        z-index: 1;
        text-align: center;
        color: #fff;
        font-size: 18px;
      }

      .img-block-lay{
        position: sticky;
        bottom: 0;
        z-index: 11;
      }

      .img-block{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
        height: 50vh;
        background-position: center;
        background-size: cover;
        background-color: #180707bf;
      }

      .img-block::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(assets/images/section-bg_86A20.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
      }

      .img-block img{
        animation: sway 4s ease-in-out infinite;
        width: 40%;
        object-fit: cover;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
      }

      @keyframes sway {
        0%, 100% {
          transform:  rotate(1deg);
        }
        50% {
          transform:  rotate(-1deg);
        }
      }

      .art-page-lay{
        position: relative;
        top: 0;
        z-index: 10;
        width: 100%;
        background-color: #180707;
      }

      .art-content{
        padding: 50px 0;
      }

      .art-content h2{
        text-transform: uppercase;
        letter-spacing: 5px;
        text-align: center;
        color: #fff;
        position: relative;
        z-index: 1;
        margin-bottom: 42px;
      }

      .art-block{
        overflow: hidden;
        position: relative;
      }

      .art-block-images {
        animation: sway 4s ease-in-out infinite;
        border-radius: 15px;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
        float: left;
        width: 40%;
        margin: 42px;
        margin-top: 0;
        margin-left: 0;
      }

      .art-block-content {
        color: #fff;
        opacity: 0.8;
        font-size: 16px;
      }

      .art-block-content ul{
        list-style: inside;
      }

      .price-text {
        display: flex;
        flex-direction: row;
        align-items: center;
        color: #fff;
        gap: 8px;
        justify-content: center;
        font-size: 22px;
        font-weight: bold;
      }

      .price-title-textBox {
        color: #fff;
        margin-right: 5px;
      }

      .currency-textBox {
        color: #fff;
        font-size: 15px;
      }

      .price-value{
        color: #fff;
      }

      .img-two-block-lay{
        position: sticky;
        bottom: 0;
        z-index: 9;
      }

      .img-two-block{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
        height: 50vh;
        background-position: center;
        background-size: cover;
        background-color: #180707bf;
      }

      .img-two-block::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(assets/images/section-bg_86A21.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
      }

      .img-two-block img{
        animation: sway 4s ease-in-out infinite;
        width: 40%;
        object-fit: cover;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
      }

      .reasons-lay{
        position: relative;
        bottom: 0;
        z-index: 8;
        width: 100%;
        background-color: #180707;
      }

      .reasons{
        padding: 50px 0;
      }

      .reasons h2{
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 5px;
        text-align: center;
        color: #fff;
        position: relative;
        z-index: 1;
        margin-bottom: 42px;
      }

      .reasons-box{
        position: relative;
        top: 0;
      }

      .reasons-card-box{
        position: sticky;
        bottom: 50px;
        display: grid;
        gap: 50px;
        grid-template-columns: repeat(3, 1fr);
      }

      .reasons-card{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 18px;
      }

      .reasons-card img{
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
        object-fit: cover;
        width: 100%;
        height: 336px;
      }

      .reasons-card p{
        border: 2px solid #fff;
        padding: 12px;
        text-align: center;
        color: #fff;
        font-size: 22px;
      }

      .img-three-block-lay{
        position: sticky;
        bottom: 0;
        z-index: 7;
      }

      .img-three-block{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
        height: 50vh;
        background-position: center;
        background-size: cover;
        background-color: #180707bf;
      }

      .img-three-block::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(assets/images/section-bg_86A22.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
      }

      .img-three-block img{
        animation: sway 4s ease-in-out infinite;
        width: 40%;
        object-fit: cover;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
      }

      .preim-lay{
        position: relative;
        bottom: 0;
        z-index: 6;
        width: 100%;
        background-color: #180707;
      }

      .benefit{
        padding: 50px 0;
      }

      .benefit h2{
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 5px;
        text-align: center;
        color: #fff;
        margin-bottom: 42px;
      }

      .preim-box{
        display: flex;
        justify-content: space-between;
        flex-direction: column-reverse;
      }

      .preim-card{
        padding: 18px 0;
        display: flex;
        align-items: center;
        border-bottom: 2px solid #fff;
        gap: 18px;
        flex-direction: row-reverse;
      }

      .preim-card img{
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
        animation: sway 4s ease-in-out infinite;
        object-fit: cover;
        height: 69px;
        width: 336px;
      }

      .preim-card p{
        color: #fff;
      }

      .img-four-block-lay{
        position: sticky;
        bottom: 0;
        z-index: 5;
      }

      .img-four-block{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
        height: 50vh;
        background-position: center;
        background-size: cover;
        background-color: #180707bf;
      }

      .img-four-block::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(assets/images/section-bg_86A23.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
      }

      .img-four-block img{
        animation: sway 4s ease-in-out infinite;
        width: 40%;
        object-fit: cover;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
      }

      .otzivItems-lay{
        position: relative;
        bottom: 0;
        z-index: 4;
        width: 100%;
        background-color: #180707;
      }

      .comments{
        padding: 50px 0;
      }

      .comments h2{
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 5px;
        text-align: center;
        color: #fff;
        margin-bottom: 42px;
      }

      .otzivItems-box{
        display: flex;
        justify-content: space-between;
        flex-direction: column-reverse;
      }

      .otzivItems-card{
        padding: 18px 0;
        display: flex;
        border-bottom: 2px solid #fff;
        gap: 18px;
        flex-direction: column-reverse;
      }

      .otzivItems-card h5{
        font-weight: bold;
        color: #fff;
      }

      .otzivItems-card-box{
        display: flex;
        align-items: center;
        gap: 18px;
        flex-direction: row;
      }

      .otzivItems-card svg{
        width: 22px;
        height: 22px;
        color: #fefdf8;
      }

      .otzivItems-card p{
        color: #fff;
      }

      .img-five-block-lay{
        position: sticky;
        bottom: 0;
        z-index: 3;
      }

      .img-five-block{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
        height: 50vh;
        background-position: center;
        background-size: cover;
        background-color: #180707bf;
      }

      .img-five-block::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(assets/images/section-bg_86A24.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
      }

      .img-five-block img{
        animation: sway 4s ease-in-out infinite;
        width: 40%;
        object-fit: cover;
        box-shadow: rgba(255,255,255,0.4) 0px 5px 15px;
      }

      .form-lay{
        position: relative;
        bottom: 0;
        z-index: 2;
        width: 100%;
        background-color: #180707;
        padding: 50px 0;
      }

      .osn-form {
        width: 50%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
      }

      .title-container{
        margin-bottom: 42px;
        text-align: center;
      }

      .title-container h3{
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 5px;
        color: #fff;
      }

      .input-container {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .input-container label{
        color: #fff;
      }

      .input-container .input-groupbox-element, .input-container .textarea-groupbox-element, .form button {
        outline: none;
        margin: 8px 0;
      }

      .input-container .input-groupbox-element {
        color: rgba(255,255,255,0.8);
        background-color: transparent;
        padding: 1rem;
        border: 2px solid rgba(255,255,255,0.8);
        font-size: 0.875rem;
        line-height: 1.25rem;
      }

      .input-container .textarea-groupbox-element {
        color: rgba(255,255,255,0.8);
        background-color: transparent;
        padding: 1rem;
        border: 2px solid rgba(255,255,255,0.8);
        font-size: 0.875rem;
        line-height: 1.25rem;
        resize: vertical;
        min-height: 42px;
        max-height: 141px;
      }

      .input-container .input-groupbox-element:focus, .input-container .textarea-groupbox-element:focus{
        border: 2px solid #93329e;
      }

      .input-container .input-groupbox-element::placeholder, .input-container .textarea-groupbox-element::placeholder{
        color: #fff;
      }

      .check{
        color: #fff;
      }

      .check:hover{
        opacity: 0.5;
        color: #fff;
      }

      .form-check {
        color: #fff;
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: flex-start;
        padding: 15px 0;
      }

      .form-check .form-check-input{
        margin: 0;
      }

      .submit-form {
        margin: 0 auto !important;
      }

      .ui-checkbox {
        --primary-color: #1677ff;
        --secondary-color: #fff;
        --primary-hover-color: #4096ff;
        --checkbox-diameter: 20px;
        --checkbox-border-radius: 5px;
        --checkbox-border-color: #d9d9d9;
        --checkbox-border-width: 1px;
        --checkbox-border-style: solid;
        --checkmark-size: 1.2;
      }

      .ui-checkbox,
      .ui-checkbox *,
      .ui-checkbox *::before,
      .ui-checkbox *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      .ui-checkbox {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: var(--checkbox-diameter);
        height: var(--checkbox-diameter);
        border-radius: var(--checkbox-border-radius);
        background: var(--secondary-color);
        border: var(--checkbox-border-width) var(--checkbox-border-style) var(--checkbox-border-color);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        cursor: pointer;
        position: relative;
      }

      .ui-checkbox::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        border-radius: inherit;
        opacity: 0;
        -webkit-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        -o-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
      }

      .ui-checkbox::before {
        top: 40%;
        left: 50%;
        content: "";
        position: absolute;
        width: 4px;
        height: 7px;
        border-right: 2px solid var(--secondary-color);
        border-bottom: 2px solid var(--secondary-color);
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        transform: translate(-50%, -50%) rotate(45deg) scale(0);
        opacity: 0;
        -webkit-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        -o-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
      }

      .ui-checkbox:hover {
        border-color: var(--primary-color);
      }

      .ui-checkbox:checked {
        background: var(--primary-color);
        border-color: transparent;
      }

      .ui-checkbox:checked::before {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -webkit-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        -o-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
      }

      .ui-checkbox:active:not(:checked)::after {
        -webkit-transition: none;
        -o-transition: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        transition: none;
        opacity: 1;
      }

      .map-block{
        position: sticky;
        bottom: 0;
        z-index: 1;
      }

      .footer-lay{
        position: relative;
        width: 100%;
        background-color: #180707;
      }

      .footer{
        padding: 42px 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 42px;
      }

      .footer-contact{
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 2px solid #ffffffbf;
        padding-bottom: 42px;
        gap: 42px;
        flex-direction: row-reverse;
      }

      .contact-box{
        display: flex;
        text-align: center;
        align-items: center;
        gap: 22px;
        flex-direction: column-reverse;
      }

      .contact-box a h5{
        transition: 0.3s ease;
        color: #fff;
        font-size: 18px;
      }

      .contact-box a h5:hover{
        color: #fff;
        opacity: 0.5;
      }

      .contact-box h5{
        color: #fff;
        font-size: 18px;
      }

      .footer-privacy{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 22px;
      }

      .footer-privacy p{
        color: #fff;
        font-size: 18px;
      }

      .privacy{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        flex-direction: row-reverse;
      }

      .privacy a{
        transition: 0.3s ease;
        color: #fff;
        font-size: 18px;
      }

      .privacy a:hover{
        color: #fff;
        opacity: 0.5;
      }

      .but,
      button {
        outline: none;
        border: none;
        background: inherit;
        padding: 10px;
        box-sizing: border-box !important;
      }
      .button-1 {
        background-color: #ea4c89;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: 500;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
      }

      .button-1:hover,
      .button-1:focus {
        background-color: #f082ac;
        color: #fff;
      }

      .button-2 {
        font-size: 15px;
        font-weight: bold;
        border: 0px;
        color: white;
        background-color: #1877f2;
        padding: 15px 20px;
        border-radius: 15px;
        cursor: pointer;
      }

      .button-2:hover {
        background-image: linear-gradient(90deg, #a597c4 0%, #acbcff 50%, #aee2ff 75%, #e6fffd 100%);
        color: black;
        animation: slide 10s linear infinite;
      }

      @keyframes slide {
        100% {
          background-position: 50rem;
        }
      }

      .button-3 {
        font-size: 15px;
        --bg: #000;
        --hover-bg: #e7143f;
        --hover-text: #000;
        color: #fff;
        border: 1px solid var(--bg);
        border-radius: 4px;
        padding: 1em 2em;
        background: lightsalmon;
        transition: 0.2s;
      }

      .button-3:hover {
        color: var(--hover-text);
        transform: translate(-0.25rem, -0.25rem);
        background: var(--hover-bg);
        box-shadow: 0.25rem 0.25rem var(--bg);
      }

      .button-3:active {
        transform: translate(0);
        box-shadow: none;
      }
      .button-4 {
        margin: 10px;
        padding: 15px 30px;
        text-align: center;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        border-radius: 10px;
        display: block;
        border: 0px;
        font-weight: 700;
        box-shadow: 0px 0px 14px -7px #f09819;
        background-image: linear-gradient(45deg, #ff512f 0%, #f09819 51%, #ff512f 100%);
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
      }

      .button-4:hover {
        background-position: right center;
        color: #fff;
        text-decoration: none;
      }

      .button-4:active {
        transform: scale(0.95);
      }
      .button-5 {
        padding: 5px;
        align-items: center;
        background-color: #0a66c2;
        border: 0;
        border-radius: 100px;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        display: inline-flex;
        font-size: 16px;
        font-weight: 600;
        justify-content: center;
        line-height: 20px;
        max-width: 480px;
        min-height: 40px;
        min-width: 0px;
        overflow: hidden;
        padding: 0px;
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        touch-action: manipulation;
        transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s,
          box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
      }

      .button-5:hover,
      .button-5:focus {
        background-color: #16437e;
        color: #ffffff;
      }

      .button-5:active {
        background: #09223b;
        color: rgb(255, 255, 255, 0.7);
      }

      .button-5:disabled {
        cursor: not-allowed;
        background: rgba(0, 0, 0, 0.08);
        color: rgba(0, 0, 0, 0.3);
      }
      .gdpr-popup {
        z-index: 999;
      }
      @media (max-width: 991px) {
        .header-content h2{
          font-size: 22px;
        }

        .img-bg-one{
          width: 109px;
          height: 109px;
        }

        .img-bg-two{
          width: 109px;
          height: 109px;
        }

        .about-us{
          width: auto;
        }

        .reasons-card-box{
          position: relative !important;
          bottom: 0;
          gap: 25px;
          grid-template-columns: repeat(1, 1fr);
        }

        .logoImg{
          max-width: 50px;
        }

        .osn-form{
          width: 100%;
        }

        .img-block{
          height: 100%;
        }

        .img-two-block{
          height: 100%;
        }

        .img-three-block{
          height: 100%;
        }

        .img-four-block{
          height: 100%;
        }

        .img-five-block{
          height: 100%;
        }

        .art-content h2{
          font-size: 22px;
        }

        .about-us h2{
          font-size: 22px;
        }

        .reasons h2{
          font-size: 22px;
        }

        .benefit h2{
          font-size: 22px;
        }

        .comments h2{
          font-size: 22px;
        }

        .title-container h3{
          font-size: 22px;
        }

        .about-us h2{
          margin-bottom: 25px;
        }


      }

      @media (max-width: 767px) {
        .header{
          display: block;
        }

        .art-block-images{
          width: 100%;
          margin-right: 0;
          padding: 0;
        }

        .otzivItems-card-box{
          flex-direction: column-reverse;
          align-items: start;
        }

        html{
          overflow-x: hidden;
        }

        .img-block::before{
          background-attachment: unset;
        }

        .img-two-block::before{
          background-attachment: unset;
        }

        .img-three-block::before{
          background-attachment: unset;
        }

        .img-four-block::before{
          background-attachment: unset;
        }

        .img-five-block::before{
          background-attachment: unset;
        }

        .reasons-card img{
          height: 198px;
        }

        .header-content h2{
          font-size: 18px;
        }
      }

      @media (max-width: 575px) {
        .header .logo {
          max-width: 80%;
        }

        .preim-card{
          text-align: center;
          flex-direction: column;
        }

        .preim-card:nth-child(2){
          flex-direction: column-reverse;
        }

        .preim-card:nth-child(4){
          flex-direction: column-reverse;
        }

        .preim-card img{
          width: 100%;
          height: 198px;
        }

        .img-block img{
          width: 50%;
        }

        .img-two-block img{
          width: 50%;
        }

        .img-three-block img{
          width: 50%;
        }

        .img-four-block img{
          width: 50%;
        }

        .img-five-block img{
          width: 50%;
        }
        .contact-box a {
          font-size: 14px;
        }
      }
    </style>

    

</body>
</html>
