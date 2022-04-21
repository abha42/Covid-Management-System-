<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
*{
  margin:0;
    padding:0;
}
body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
    }
  a {
    color: #633c97;
    text-decoration: none;
  }
  a:hover {
    color: #633c97;
    text-decoration: none;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway", sans-serif;
  }
  .back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #a780c0;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    transition: all 0.4s;
  }
  .back-to-top i {
    font-size: 28px;
    color: #fff;
    line-height: 0;
  }
  .back-to-top:hover {
    background: #a47dcf;
    color: #fff;
  }
  .back-to-top.active {
    visibility: visible;
    opacity: 1;
  }
  /*------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
    background: #dbd2db;
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
    box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);
  }
  #header .logo {
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
  }
  #header .logo a {
    color: #ac5fcf;
  }
  #header .logo img {
    max-height: 40px;
  }
  .get-started-btn {
    margin-left: 22px;
    background: #ac5fcf;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
  }
  .get-started-btn:hover {
    background: #a63ac1;
    color: #fff;
  }
  @media (max-width: 768px) {
    .get-started-btn {
      margin: 0 15px 0 0;
      padding: 6px 18px;
    }
  }
  .navbar {
    padding: 0;
  }
  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  .navbar li {
    position: relative;
  }
  .navbar a, .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #37423b;
    white-space: nowrap;
    transition: 0.3s;
  }
  .navbar a i, .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }
  .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
    color: #a440cc;
  }
  /**
  * Mobile Navigation 
  */
  .mobile-nav-toggle {
    color: #37423b;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
  }
  .mobile-nav-toggle.bi-x {
    color: #fff;
  }
  @media (max-width: 991px) {
    .mobile-nav-toggle {
      display: block;
    }
  .navbar ul {
      display:none;
    }
  }
  .navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(32, 38, 34, 0.9);
    transition: 0.3s;
    z-index: 999;
  }
  .navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
  }
  .navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 6px;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
  }
  .navbar-mobile a, .navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #37423b;
  }
  .navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
    color: #5fcf80;
  }
  .navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
    margin: 15px;
  }
 #hero {
    width: 100%;
    height: 100vh;
    background:  top center;
    background-size: cover;
    position: relative;
    background-image:url('images/home-bg.jpg');
    text-align: center;
    padding-top: 3rem;
  }
  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }
  #hero .container {
    padding-top: 72px;
  }
  @media (max-width: 992px) {
    #hero .container {
      padding-top: 62px;
    }
  }
  #hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }
  #hero h2 {
    color: #eee;
    margin: 10px 0 0 0;
    font-size: 24px;
  }
  #hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 35px;
    border-radius: 50px;
    transition: 0.5s;
    margin-top: 30px;
    border: 2px solid #fff;
    color: #fff;
  }
  #hero .btn-get-started:hover {
    background: #5fcf80;
    border: 2px solid #5fcf80;
  }
  @media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }
  @media (max-width: 768px) {
    #hero {
      height: 100vh;
    }
    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }
    #hero h2 {
      font-size: 18px;
      line-height: 24px;
    }
  }
  /*..............................................................
  #Symptoms
  ................................................................*/
  .symptoms{
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding-top: 8rem;
}
.symptoms .column{
  display: flex;
    align-items: center;
    justify-content: center;
}
.symptoms .column .main-image img{
    width: 43vh;
}
.symptoms .column .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.symptoms .column .box-container .box{
    margin:1rem;
    text-align: center;
}
.symptoms .column .box-container .box img{
    width:20rem;
    padding:1rem;
}
.symptoms .column .box-container .box h3{
    font-size: 2rem;
    color:var(--blue);
}
.precautions{
  padding-top : 8rem;
  text-align : center;
}
.precautions .column{
  text-align : left;
  display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.precautions .column .box-container{
    margin:1.5rem;
    flex:1 1 50rem;
    border:.1rem solid rgba(0,0,0,.1);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    border-radius: .5rem;
}
.precautions .column .box-container .title{
    padding:1.5rem .5rem;
    text-align: center;
    font-size: 2.5rem;
    background:var(--blue);
    color:#fff;
}
.precautions .column .box-container:last-child .title{
    background:#ff3300;
}
.precautions .column .box-container .box{
    display: flex;
    justify-content: center;
    align-items: center;
    padding:1rem;
}
.precautions .column .box-container .box img{
    width:15rem;
    padding:1rem;
}
.precautions .column .box-container .box h3{
    font-size: 2rem;
    color:var(--blue);
}
.precautions .column .box-container .box p{
    font-size: 1.2rem;
    color:var(--dark-blue);
    padding:1rem 0;
}
  .vaccine {
    padding-top : 18rem;
  }
  /*--------------------------------------------------------------
  # Sections General
  --------------------------------------------------------------*/
  section {
    padding: 60px 0;
    overflow: hidden;
  }
  .section-bg {
    background-color: #f6f7f6;
     }
  .section-title {
    padding-bottom: 40px;
  }
  .section-title h2 {
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #aaaaaa;
    font-family: "Poppins", sans-serif;
  }
  .section-title h2::after {
    content: "";
    width: 120px;
    height: 1px;
    display: inline-block;
    background: #9ae1af;
    margin: 4px 10px;
  }
  .section-title p {
    margin: 0;
    margin: 0;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #37423b;
  }
 /*--------------------------------------------------------------
  # About
  --------------------------------------------------------------*/
  .about .content h3 {
    font-weight: 600;
    font-size: 26px;
  }
  .about .content ul {
    list-style: none;
    padding: 0;
  }
  .about .content ul li {
    padding-bottom: 10px;
  }
  .about .content ul i {
    font-size: 20px;
    padding-right: 4px;
    color: #5fcf80;
  }
  .about .content .learn-more-btn {
    background: #5fcf80;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px 9px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
  }
  .about .content .learn-more-btn:hover {
    background: #3ac162;
    color: #fff;
  }
  @media (max-width: 768px) {
    .about .content .learn-more-btn {
      margin: 0 48px 0 0;
      padding: 6px 18px;
    }
  }
  #reason {
    padding:3%;
    align-items: center;
    align-content: center;
  }
  .reason .counters span {
    font-size: 48px;
    display: block;
    color: #5fcf80;
    font-weight: 700;
}
  .reason .counters {
    padding-top:2%;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #37423b;
  }
  /*-
  # Contact
-*/
@-webkit-keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  /*--------------------------------------------------------------
  # Footer
  -*/
  #footer {
   text-align : center;
    color: #37423b;
    font-size: 14px;
    background: #eef0ef;
  }
  #footer .footer-top {
    padding: 60px 0 30px 0;
    background: #dbd2db;
background-size: cover;
    background-position: center;
    background-attachment: fixed
  }
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  #footer .footer-top .footer-contact h4 {
    font-size: 22px;
    margin: 0 0 30px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
  }
  #footer .footer-top .footer-contact p {
    text-align : center;
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Raleway", sans-serif;
    color: #777777;
  }
  #footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
  }
  #footer .footer-top .footer-links {
    margin-bottom: 30px;
    text-align: center;
  }
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  #footer .footer-top .footer-links ul i {
    color: #5fcf80;
    font-size: 18px;
    line-height: 1;
    padding-right: 0px;
  }
  #footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  #footer .footer-top .footer-links ul a {
    color: #b66a6a;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  #footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #ba9ce2;
  }
  #footer .credits h1{
      font-size: 18px;
  }
  #footer .credits {
    padding-top: 5px;
    font-size: 13px;
    }
  #footer .credits a {
    color: #ba9ce2;
    transition: 0.3s;
  }
  #footer .credits a:hover {
    color: #5fcf80;
  }
  #footer .social-links a {
    align-items: center;
    font-size: 15px;
    display: inline-block;
    background: #5fcf80;
    color: #fff;
    line-height: 1;
    padding: 0px 0;
    text-align: center;
    width: 36px;
    height: 36px;
  }
  #footer .social-links a:hover {
    background: #3ac162;
    color: #fff;
    text-decoration: none;
  }</style>
</head>
<body>
</body>
</html>