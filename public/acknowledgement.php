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
    <title>Regalestanch - Your request has been accepted!</title>
    <meta property="og:title" content="Regalestanch - Your request has been accepted!" />
    <meta property="og:image" content="logo.svg" />
    
    <meta property="og:description" content="Regalestanch - Your request has been accepted!" />
    <meta name="description" content="Regalestanch - Your request has been accepted!" />
    
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
    

    <link rel="shortcut icon" href="logo.svg" type="image/x-icon" />
    <style>
      body{
        direction: ltr;
        font-family: 'Jost', sans-serif !important;
        font-size: 17px;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        letter-spacing: 1px;
        line-height: 1.3;
        position: relative;
      }

      :root{
        --transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        --white: #fff;
        --black: #040807;
        --ch-1: #f56a6a;
        --ch-2: #f5c46a;
        --ch-3: #6ad7f5;
        --ch-4: #86f56a;
        --ch-5: #f56aee;
        --hover: var(--ch-4);
        --chover-1: #f5f6f7;
        --chover-2: #dce1e9;
        --chover-3: #deebea;
        --chover-4: #e4edf6;
        --chover-5: #dee6ed;
        --footer: var(--chover-4);
        --transition: 0.4s linear;
      }

      button{
        cursor: pointer;
      }

      a{
          text-decoration: none;
      }

      p {
        margin-bottom: 15px;
        font-size: 17px;
        line-height: 1.3;
      }

      ul, ol {
        margin-bottom: 15px;
        padding-left: 17px;
      }

      li {
        margin-bottom: 15px;
      }
 

      ul {
        list-style-type: disc;
      }

      ol {
        list-style-type: decimal;
      }

      img{
        width: 100%;
        display: block;
      }

      h5{
        font-size: inherit;
      }

      .wrapper{
        display: flex;
        flex-direction: column-reverse;
        position: relative;
      }

      .package{
        max-width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        padding-bottom: 59px;
      }

      .segment{
        padding-top: 59px;
        margin: 0 17px;
      }

      .bg-body{
        display: flex;
        flex-direction: column-reverse;
        min-height: 100vh;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
      }

      .white-bg{
        height: 100%;
        width: 100%;
      }

      .grey-bg{
        height: 100%;
        width: 100%;
      }

      .main{
        width: calc(100%);
      }

      .footer{
        background-color: var(--footer);
        width: 100%;
      }

      .wr-h{
        min-height: 100vh;
        height: 100%;
      }

      .site-title-box{
        padding: 19px 0;
        border-bottom: 5px solid var(--hover);
        position: relative;
        z-index: 1;
        margin: 0  17px;
      }

      .segment-btn > .package,
      .site-title-box > .package{
        padding-bottom: 0;
      }

      .segment-btn{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }

      .site-box{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        gap: 5px;
        transition: var(--transition);
      }

      .site-img{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
      }

      .site-img > img{
        width: 100%;
        height: 100%;
        object-fit: contain;
      }

      .site-title{
        color: var(--hover);
        font-weight: 700;
        font-size: 22px;
        text-transform: uppercase;
      }

      .site-box:hover,
      .site-box:focus{
        transform: scale(1.03);
      }

      .footer-box{
        display: flex;
        flex-direction: column;
      }

      .footer-link > a{
        transition: var(--transition);
        color: var(--black);
        width: 100%;
        display: inline-block;
        height: 100%;
        padding: 15px 0;
      }

      .footer-link:hover > a,
      .footer-link:focus > a{
        color: var(--hover);
      }

      .copyright > p{
        margin: 0;
      }

      .copyright{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        gap: 5px;
        align-items: center;
        justify-content: center;
        margin-bottom: 17px;
        border-top: 1px solid #ccc;
      }

      .footer > .col-reverse > .segment{
        padding-bottom: 0;
      }

      .contact-box{
        display: flex;
        word-break: break-all;
        flex-direction: column;
      }

      .contact-text,
      .contact-item > a{
        transition: var(--transition);
        color: var(--black);
        width: 100%;
        display: inline-block;
        height: 100%;
        padding: 15px 0;
      }

      .contact-item:hover > a,
      .contact-item:focus > a{
        color: var(--hover);
      }

      .map{
        height: 200px;
        margin: 15px 0;
      }

      .map > iframe{
        height: 100%;
        object-fit: cover;
      }

      .contact-text{
        text-align: center;
      }

      .col-reverse{
        display: flex;
        flex-direction: column;
      }

      .form{
        display: flex;
        flex-direction: column;
        gap:  10px;
        width: 100%;
      }

      .input-btn__panel_section,
      .textarea-btn__panel_section{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        outline: none;
        background-color: transparent;
      }

      .privacy{
        color: var(--black);
        transition: var(--transition);
        display: inline-block;
      }

      .privacy:hover,
      .privacy:focus{
        color: var(--hover);
      }
      .main-package{
        border-bottom: 2px solid #ccc;
      }

      .main-img{
        overflow: hidden;
        width: 100%;
        padding: 17px;
        float: none;
        margin: 0 auto;
        box-sizing: border-box;
      }

      .main-img > img{
        border-radius: 20px;
        width: 100%;
      }

      .main-title{
        font-size: 26px;
        font-weight: 700;
        line-height: 1.3;
        color: var(--black);
      }

      .cop-segment{
        padding-bottom: 0;
      }

      .itemBen-box{
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        gap: 17px;
        margin:  20px 0;
      }

      .itemBen-item{
        width: 100%;
      }

      .title{
        font-weight: 700;
        font-size: 22px;
        position: relative;
        margin-bottom: 26px;
        display: inline-block;
      }

      .title::after{
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: var(--hover);
        bottom: -10px;
      }

      .itemBen-icon-svg{
        color: var(--hover);
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .itemBen-icon-svg::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border: 1px solid #ccc;
        transform: rotate(45deg);
      }

      .itemBen-icon-svg > svg{
        width: 45px;
        height: 45px;
      }

      .itemBen-item{
        display: flex;
        align-items: center;
        box-sizing: border-box;
        justify-content: space-between;
        flex-direction: column;
        gap: 26px;
        padding: 17px;
      }

      .price{
        font-size:  22px;
        color: var(--hover);
        font-weight: 700;
      }

      .form-title{
        font-weight: 700;
        margin-bottom: 17px;
        font-size: 19px;
      }

      .art-box{
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction:  column;
        gap: 17px;
      }

      .art-item{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 17px;
      }

      .art-img{
        width: 100%;
        height:  104px;
        overflow: hidden;
        border-radius: 20px;
      }

      .art-img > img{
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .art-title{
        text-align: center;
        font-weight:700;
      }

      .itemBen-text{
        text-align: center;
      }

      .rabotnik-box{
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction:  column;
        gap: 17px;
      }

      .rabotnik-item{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        gap: 15px;
      }

      .rabotnik-img{
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 0%;
      }

      .rabotnik-img > img{
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .rabotnik-name{
        font-weight: 600;
      }

      .rabotnik-job{
        color: #ccc;
      }

      .how-work-box{
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction:  column;
        gap: 17px;
        padding: 33px 0
      }

      .how-work-item{
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 15px;
      }

      .how-work-img{
        width: 200px;
        height: 100px;
        overflow: hidden;
        border-radius: 20px;
      }

      .how-work-img > img{
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .how-work-text{
        text-align: center;
      }

      .pb{
        padding-top: 0;
        padding-bottom: 0;
      }

      .privacy-text{
        overflow: hidden;
        word-break: break-all;
        color: black;
      }
      .privacy-text  li {
      list-style: circle;
      margin: 0 17px;
      padding:  10px 0;
    }
    .privacy-text p {
      padding:  10px 0;
    }
      .btn{
        margin-top: 17px;
      }

      .com-form-checkbox{
        display: flex;
        flex-direction: row;
        align-items: baseline;
        gap: 7px;
      }

      @media (max-width: 575px){
        .main-img{
          padding-left: 0;
          padding-right: 0;
        }
      }

      @media (min-width: 576px) {
        .package {
          max-width: 540px;
        }

        .itemBen-item{
          flex-direction: row;
        }
      }

      @media (min-width: 768px){
        .package {
          max-width: 720px;
        }

        .itemBen-box{
          flex-direction: row;
        }

        .itemBen-item{
          width: calc(50% - (17px / 2));
          flex-direction: column;
        }

        .rabotnik-box{
          flex-direction: row;
        }

        .rabotnik-item{
          width: calc(50% - (17px / 2));
        }

        .how-work-box{
          flex-direction: row;
        }

        .how-work-item{
          width: calc((100% / 3) - 17px);
        }

        .rabotnik-img{
          width: 200px;
          height: 200px;
        }

        .how-work-img {
          width: 100%;
        }
      }

      @media (max-width: 991px){
        .contact-box,
        .footer-box{
          align-items: center;
        }

        .art-segment-f{
          display: none;
        }

        .wrapper-header{
          gap: 17px;
        }

        .footer-header{
          background-color: var(--white);
        }

        .spt{
          padding-top: 0;
        }
      }

      @media (min-width: 992px){
        .bg-body{
          flex-direction: row;
        }

        .wrapper{
          margin: 0 auto;
          flex-direction: row;
          max-width: 960px;
        }

        .main{
          width: calc(75%);
        }

        .footer{
          width: 25%;
        }

        .white-bg{
          width: 75%;
        }

        .grey-bg{
          width: 25%;
          background-color: var(--footer);
        }

        .contact-item,
        .footer-link{
          border-bottom: 1px solid #ccc;
        }

        .contact-text{
          text-align: start;
        }

        .main-img{
          width: 400px;
          float:  none;
        }

        .main-title{
          font-size: 50px;
        }

        .site-title{
          font-size: 32px;
        }
      }

      @media (min-width: 1200px){
        .wrapper {
          max-width: 1140px;
        }

        .white-bg{
          width: 75%;
        }

        .grey-bg{
          width: 25%;
        }

        .itemBen-item{
          flex-direction: row;
        }
      }

      @media (min-width: 2220px){
        .white-bg{
          width: 65%;
        }

        .grey-bg{
          width: 35%;
        }
      }
      @media (min-width: 3200px){
        .white-bg{
          width: 60%;
        }

        .grey-bg{
          width: 40%;
        }
      }
      @media (min-width: 5700px){
        .white-bg{
          width: 55%;
        }

        .grey-bg{
          width: 45%;
        }
      }

      .form-btn{
        margin: 0 auto;
      }

      .button-1 {
        color: #090909;
        padding: 0.7em 1.7em;
        font-size: 18px;
        border-radius: 0.5em;
        background: #e8e8e8;
        cursor: pointer;
        border: 1px solid #e8e8e8;
        transition: all 0.3s;
        box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
        display: inline-flex;
        text-align: center;
      }

      .button-1:hover {
        border: 1px solid white;
      }

      .button-1:active {
        box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #ffffff;
      }

      .button-2 {
        display: inline-block;
        transition: all 0.2s ease-in;
        position: relative;
        overflow: hidden;
        z-index: 1;
        color: #090909;
        padding: 0.7em;
        cursor: pointer;
        font-size: 18px;
        border-radius: 0.5em;
        background: #e8e8e8;
        border: 1px solid #e8e8e8;
        box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
        text-align: center;
      }

      .button-2:active {
        color: #666;
        box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
      }

      .button-2:before {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%) scaleY(1) scaleX(1.25);
        top: 100%;
        width: 140%;
        height: 180%;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
      }

      .button-2:after {
        content: "";
        position: absolute;
        left: 55%;
        transform: translateX(-50%) scaleY(1) scaleX(1.45);
        top: 180%;
        width: 160%;
        height: 190%;
        background-color: #009087;
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
      }

      .button-2:hover {
        color: #ffffff;
        border: 1px solid #009087;
      }

      .button-2:hover:before {
        top: -35%;
        background-color: #009087;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
      }

      .button-2:hover:after {
        top: -45%;
        background-color: #009087;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
      }

      .button-3 {
        transition: all 0.3s ease-in-out;
        font-family: "Dosis", sans-serif;
      }

      .button-3 {
        border-radius: 50px;
        background-image: linear-gradient(135deg, #feb692 0%, #ea5455 100%);
        box-shadow: 0 20px 30px -6px rgba(238, 103, 97, 0.5);
        outline: none;
        cursor: pointer;
        border: none;
        font-size: 16px;
        color: white;
        display: inline-flex;
        text-align: center;
        padding: 15px;
      }

      .button-3:hover {
        transform: translateY(3px);
        box-shadow: none;
      }

      .button-3:active {
        opacity: 0.5;
      }

      .button-4 > span {
        height: auto;
        float: left;
        transition: .5s linear;
        position: relative;
        display: block;
        overflow: hidden;
        padding: 15px;
        text-align: center;
        margin: 0 5px;
        background: transparent;
        text-transform: uppercase;
        font-weight: 600;
      }

      .button-4 > span:before {
        position: absolute;
        content: '';
        left: 0;
        bottom: 0;
        height: 4px;
        width: 100%;
        border-bottom: 4px solid transparent;
        border-left: 4px solid transparent;
        box-sizing: border-box;
        transform: translateX(100%);
      }

      .button-4 > span:after {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        border-top: 4px solid transparent;
        border-right: 4px solid transparent;
        box-sizing: border-box;
        transform: translateX(-100%);
      }

      .button-4 > span:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      }

      .button-4 > span:hover:before {
        border-color: #262626;
        height: 100%;
        transform: translateX(0);
        transition: .3s transform linear, .3s height linear .3s;
      }

      .button-4 > span:hover:after {
        border-color: #262626;
        height: 100%;
        transform: translateX(0);
        transition: .3s transform linear, .3s height linear .5s;
      }

      .button-4 {
        color: black;
        text-decoration: none;
        cursor: pointer;
        outline: none;
        border: none;
        background: #78787824;
        display: inline-flex;
      }

      .button-5 {
        --width: 200px;
        --timing: 2s;
        border: 0;
        width: var(--width);
        padding-block: 1em;
        color: #fff;
        font-weight: 600;
        font-size: 1em;
        background: rgb(64, 192, 87);
        transition: all 0.2s;
        border-radius: 3px;
        cursor: pointer;
        display: inline-flex;
        padding: 15px;
        text-align: center;
      }

      .button-5:hover {
        background-image: linear-gradient(
          to right,
          rgb(250, 82, 82),
          rgb(250, 82, 82) 16.65%,
          rgb(190, 75, 219) 16.65%,
          rgb(190, 75, 219) 33.3%,
          rgb(76, 110, 245) 33.3%,
          rgb(76, 110, 245) 49.95%,
          rgb(64, 192, 87) 49.95%,
          rgb(64, 192, 87) 66.6%,
          rgb(250, 176, 5) 66.6%,
          rgb(250, 176, 5) 83.25%,
          rgb(253, 126, 20) 83.25%,
          rgb(253, 126, 20) 100%,
          rgb(250, 82, 82) 100%
        );
        animation: var(--timing) linear dance6123 infinite;
        transform: scale(1.1) translateY(-1px);
      }

      @keyframes dance6123 {
        to {
          background-position: var(--width);
        }
      }
    </style>
    
  </head>

  <body>

    <link rel="stylesheet" type="text/css" href="cookie.css">
<div id="cookie-banner">
  <p>We use cookies to ensure you get the best experience on our website. <a href="cookie.html">Cookie Policy</a></p>
  <div class="buttons">
    <button id="accept-cookies">Accept</button>
    <button id="close-cookies">Close</button>
  </div>
</div>
<script src="cookie.js"></script>

    <div class="bg-body">
      <div class="grey-bg"></div>
      <div class="white-bg"></div>
    </div>
    <div class="wrapper wrapper-header">
      <div class="footer footer-header">
        <div class="segment-btn">
          <div class="package pb">
            
          </div>
        </div>
      </div>
      <div class="main">
        <div class="site-title-box">
          <div class="package pb">
            <a href="./" class="site-box">
              <div class="site-img">
                <img src="logo.svg" alt="" />
              </div>
              <div class="site-title">Regalestanch</div>
            </a>
          </div>
        </div>
      </div>
    </div>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-discountqr__tag{
		margin: 0px;
		padding: 0px;
		font-family: 'Arimo', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 273px 0px;
	}
	.bodyClass1-discountqr__tag{
		background: #f6f4ec;
		color: #ffffff;
	}
	.bodyClass2-discountqr__tag{
		background: #f6f7d4;
		color: #fff;
	}
	.bodyClass3-discountqr__tag{
		background: #fff;
		color: #111;
	}
	.wrapage-block-discountqr__tag{
		background-size: 100%;
		width: 100%;
	}
	.box_main-discountqr__tag{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-discountqr__tag h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-discountqr__tag p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-discountqr__tag{
		text-align: start;
	}
	.mainBlock-discountqr__tag ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-discountqr__tag ul>li span{
		font-weight: bold;
	}
	.mainBlock-discountqr__tag{
		max-width: 804px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-discountqr__tag .cBlock-discountqr__tag{
		text-align: start;
	}

	.bodyClass3-discountqr__tag .mainBlock-discountqr__tag{
		background: none;
		border-top: 2px dashed #f6f7d4;
		border-bottom: 2px dashed #f6f7d4;
	}
	.bodyClass2-discountqr__tag .mainBlock-discountqr__tag{
		background: #0C2233;
		color: #fff !important;
		box-shadow: 0px 0px 20px #0C2233;
	}
	.bodyClass2-discountqr__tag .mainBlock-discountqr__tag p{
		color: #fff !important;
	}
	.bodyClass1-discountqr__tag .mainBlock-discountqr__tag{
		background: #00ACB0;
		color: #ffffff;
		border-left: 1px solid #2F3032;
	}
	.bodyClass1-discountqr__tag .mainBlock-discountqr__tag p{
		color: #ffffff !important;
	}
	.order-discountqr__tag{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-discountqr__tag p{
			padding: 0px 15px;
		  }
		  .box_main-discountqr__tag h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-discountqr__tag{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-discountqr__tag{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-discountqr__tag" id="mainWrapp-discountqr__tag">


	<div class="wrapage-block-discountqr__tag">
		<div class="box_main-discountqr__tag">
			<div class="mainBlock-discountqr__tag">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-discountqr__tag">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



    <div class="wrapper wr-h">
      <div class="footer fot-h">
        
        <div class="segment art-segment-f">
          <div class="package pb">
            <div class="title">Latest News</div>
            <div class="art-box">
              <div class="art-item">
                <div class="art-img">
                  <img src="snapshot/pictures_gallery_6937d43da1f582.07380407.jpg" alt="" />
                </div>
                <div class="art-title">Vintage in the Interior</div>
              </div>
              <div class="art-item">
                <div class="art-img">
                  <img src="snapshot/depictions_gallery_6937d43da1f5a3.07252857.jpg" alt="" />
                </div>
                <div class="art-title">10 Ideas for Decorating an Apartment in Eco-Style</div>
              </div>
              <div class="art-item">
                <div class="art-img">
                  <img src="snapshot/visuals_gallery_6937d43da1f5c3.52383166.jpg" alt="" />
                </div>
                <div class="art-title">Choosing Wallpaper for the Hallway</div>
              </div>
              <div class="art-item">
                <div class="art-img">
                  <img src="snapshot/illustrations_gallery_6937d43da1f5e7.08795907.jpg" alt="" />
                </div>
                <div class="art-title">Which Wardrobe for the Balcony is Best?</div>
              </div>
            </div>
          </div>
        </div>
        

        <div class="col-reverse">
          <div class="segment spt">
            <div class="package pb">
              <div class="footer-box">
                <div class="footer-link">
                  <a href="privacyPolicy.html"> Privacy policy</a>
                </div>
                <div class="footer-link">
                  <a href="terms.html"> Terms & Conditions</a>
                </div>
                <div class="footer-link">
                  <a href="disclaimer.html"> Disclaimer</a>
                </div>
              </div>
            </div>
          </div>

          
        </div>
        <div class="segment cop-segment spt">
          <div class="package pb">
            <div class="copyright">
              <p>Copyright</p>
              <p>&#169;</p>
              <p>2025</p>
              <p>Regalestanch</p>
            </div>
          </div>
        </div>
      </div>
       

</body>
</html>
