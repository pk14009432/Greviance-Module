<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Grievance System</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fxbody">
        <div class="container" style="width: 1200px; margin: auto;">
            <div class="header_part">
                <div class="header1">
                    <div class="header1_left">
                        
                        <div class="bmv_name_part mrgnl20">
                            <center><div class="bmv_name">
                                Grievance System
                            </div></center>
                            <center><div class="bmv_name_title">
                                Let our opportunities overshadow our grievance
                            </div></center>
                        </div>
                        
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="header2">
                    <ul id="nav">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#" class="">About us</a></li>
                        <li title="Complain Management System"><a href="complain.php" class="">CMS</a>
			   
			   </li>
                        <li><a href="#" class="">Contact us</a></li>
                        <li><a href="#" class="">FAQ</a></li>
                        <li><a href="#" class="">Account</a>
                        <ul>
                            <li> <a href="Login.php" class="">Login</a></li>
                            <li><a href="Login.php" class="">LogOut</a></li>
                        </ul></li>
                    </ul>
                </div>
            </div>
            <div class="content_part" style="background-color: rgba(255,255,255,0.7)">
                <div class="home_img">
                    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/dummy12345.svg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/dummy1234.svg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/dummy123.svg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
                </div>
                
                <div class="">
                    <div class="count_bx left" style="background-color: #F3983E;">
                        <div class="count txt1">1234+</div>
                        <div class="countbx_con round_wh">Total Complaint</div>
                    </div>
                    <div class="count_bx left" style="background-color: #F3B43E;">
                        <div class="count txt1">134+</div>
                        <div class="countbx_con round_wh">Complaint Resolved</div>
                    </div>
                    <div class="count_bx left" style="background-color: #F3D03E;">
                        <div class="count txt1">123+</div>
                        <div class="countbx_con round_wh">Complaint Pending</div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="">
                    <section class="module parallax parallax-2">
                        <div class="bgtb">
                            <div class="round_hdng3 con1_rw">About Us</div>
                            <div class="whcon">
                                Grievance systems are formal organizational procedures designed to address employee complaints. These employee complaints, hereafter referred to as grievances, can range from general disputes about organizational policies (e.g., disputes about interpreting the vacation policy), to specific disputes about how the employee was treated (e.g., conflict with coworkers), to disputes that have legal implications (e.g., racial discrimination).Grievance systems vary by organization. However, grievance systems typically have several (four to five) hierarchical steps that are used to address conflicts in the organization.
                            </div>
                        </div>
                    </section>
                </div>
                
                
                
                <div class="bpg" style="background: none;">
                    <div class="con_head">
                        <div class="con_head_txt">Awards & Recognition</div>
                    </div>
                </div>
                <div class="bpg">
                    
                    <div class="edb-arbx1 pad20">
                        <div class="edb-img-slider">
                            <div class="edb-hslider">
                                <div class="edb-xslider">
                                    <img src="images/awrd1.svg">
                                    <div class="edb-ft">
                                        <div class="left edb-fname">
                                            INDIA NGO award 2012-13, New Delhi
                                        </div>
                                        <div class="clr"></div>
                                    </div> 
                                </div>
                                <div class="edb-xslider">
                                    <img src="images/awrd1.svg">
                                    <div class="edb-ft">
                                        <div class="left edb-fname">
                                            INDIA NGO award 2012-13, New Delhi
                                        </div>
                                        <div class="clr"></div>
                                    </div> 
                                </div>
                                <div class="edb-xslider">
                                    <img src="images/awrd1.svg">
                                    <div class="edb-ft">
                                        <div class="left edb-fname">
                                            INDIA NGO award 2012-13, New Delhi
                                        </div>
                                        <div class="clr"></div>
                                    </div> 
                                </div>
                                <div class="edb-xslider">
                                    <img src="images/awrd1.svg">
                                    <div class="edb-ft">
                                        <div class="left edb-fname">
                                            INDIA NGO award 2012-13, New Delhi
                                        </div>
                                        <div class="clr"></div>
                                    </div> 
                                </div>
                                <div class="edb-xslider">
                                    <img src="images/awrd1.svg">
                                    <div class="edb-ft">
                                        <div class="left edb-fname">
                                            INDIA NGO award 2012-13, New Delhi
                                        </div>
                                        <div class="clr"></div>
                                    </div> 
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                    </div>
                    
                </div>
                
                <div class="bpg" style="background: none;">
                    <div class="con_head">
                        <div class="con_head_txt">Contact us</div>
                    </div>
                </div>   
                <div class="contact_bx bpg" style="margin-bottom: 0px;">
                    <div class="map"></div>
                    <div class="map_design"></div>
                    <div class="contact_form_bx">
                        <div class="cont_rw cont-txt">
                            Send us a Queries
                        </div>
                        <form>
                            <div class="cont_rw">
                                <input type="text" class="txtbox" placeholder="Name">
                            </div>
                            <div class="cont_rw">
                                <input type="text" class="txtbox" placeholder="Email">
                            </div>
                            <div class="cont_rw">
                                <input type="text" class="txtbox" placeholder="Phone">
                            </div>
                            <div class="cont_rw cont-txt" style="font-size: 18px;">
                                Preferred method of communication
                            </div>
                            <div class="cont_rw">
                                <div class="left" style="width: 200px;">
                                    <input type="radio" id="male" name="comm" value="email">
                                    <label for="email" class="cont-txt" style="font-size: 16px;">Email</label>
                                </div>
                                <div class="left" style="width: 200px;">
                                    <input type="radio" id="male" name="comm" value="phone">
                                    <label for="phone" class="cont-txt" style="font-size: 16px;">Phone</label>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="cont_rw">
                                <input type="text" class="txtbox" placeholder="Message">
                            </div>
                            <div class=""><button class="submit_btn">Submit</button></div>
                        </form>
                    </div>
                    <div class="cont_lft">
                        <div class="wtxt cont_txt1 cont_rw">CONTACT US</div>
                        <div class="cont_rw cont_txt2 wtxt">Feel like contacting us? Submit your queries here and we will get back to you as soon as possible.</div>
                        <div class="cont_rw">
                            <div class="cont_icon left eml"><img src="images/email.svg"></div>
                            <div class="left cont_txt2 wtxt">pk14009432@gmail.com</div>
                            <div class="clr"></div>
                        </div>
                        <div class="cont_rw">
                            <div class="cont_icon left eml"><img src="images/contact.svg"></div>
                            <div class="left cont_txt2 wtxt">+91-9876543210</div>
                            <div class="clr"></div>
                        </div>
                        <div class="cont_rw" style="margin: 70px 0px;">
                            <div class="cont_icon left"><img src="images/location.svg" height="50px" width="35px"></div>
                            <div class="addbx left ylwtxt">
                                Lovely Professional university, Phagwara, G.T Road, Punjab (144411)
                                <div class="arrw"></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                <div class="bpg" style="background: none;">
                    <div class="con_head">
                        <div class="con_head_txt">faq</div>
                    </div>
                </div>
                <div class="bpg">
                    <div class="faq_bx" id="faq">
                        <div class="faq_tab">
                            <div class="faq_rw">
                                <span class="left faq_ques">Q)What are the contact details of the Department of Administrative Reforms and Public Grievances? </span>
                                <div class="right tq_arw">
                                    <img src="images/tq_arw.svg" height="10px" width="20px">
                                </div>
                                <div class="clr"></div>
                            </div>
            
                            <div class="faq_ans">
                                A) Department of Administrative Reforms and Public Grievances, 5th floor, Sardar Patel Bhavan, Sansad Marg, New Delhi – 110001
Website:: www.grievance_system.com Tele fax : 6543210
                            </div>
                        </div>
                        <div class="faq_tab">
                            <div class="faq_rw">
                                <span class="left faq_ques">Q) What happens when I lodge the grievance?</span>
                                <div class="right tq_arw">
                                    <img src="images/tq_arw.svg" height="10px" width="20px">
                                </div>
                                <div class="clr"></div>
                            </div>
            
                            <div class="faq_ans">
                                A) The grievance is acknowledged online or by post. A unique registration number is given to each grievance.
                            </div>
                        </div>
                        <div class="faq_tab">
                            <div class="faq_rw">
                                <span class="left faq_ques">Q) How do I track my grievance? </span>
                                <div class="right tq_arw">
                                    <img src="images/tq_arw.svg" height="10px" width="20px">
                                </div>
                                <div class="clr"></div>
                            </div>
            
                            <div class="faq_ans">
                                A) It may be tracked on the portal using view status link and after providing unique registration number. 
                            </div>
                        </div>
                        <div class="faq_tab">
                            <div class="faq_rw">
                                <span class="left faq_ques">Q) What is the time limit for redress of grievance? </span>
                                <div class="right tq_arw">
                                    <img src="images/tq_arw.svg" height="10px" width="20px">
                                </div>
                                <div class="clr"></div>
                            </div>
            
                            <div class="faq_ans">
                                A) Sixty (60) days. In case of delay an interim reply with reasons for delay is required to be given.
                            </div>
                        </div>
                        <div class="faq_tab">
                            <div class="faq_rw">
                                <span class="left faq_ques">Q) What action can be taken by me in case of non-redress of my grievance within the prescribed time? </span>
                                <div class="right tq_arw">
                                    <img src="images/tq_arw.svg" height="10px" width="20px">
                                </div>
                                <div class="clr"></div>
                            </div>
            
                            <div class="faq_ans">
                                A) You may take up the matter with the Director of Public Grievances of the Ministry/Department concerned whose details are available on the portal.
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="clr"></div>
            </div>
            <div class="footer_part">
                <div class="ftr1">
                    <div class="ftr-col left">
                        <div class="ftr_hd ylwtxt cont_rw">Who are we?</div>
                        <div class="ftr_con cont_rw">
                            Grievance systems vary by organization. However, grievance systems typically have several (four to five) hierarchical steps that are used to address conflicts in the organization.
                            <a href="#" class="alink"><span class="">&nbsp;View Details</span></a>
                        </div>
                    </div>
                    <div class="ftr-col left" style="text-align: center;">
                        <div class="ftr_hd ylwtxt cont_rw">Quick links</div>
                        <div class="cont_rw">
                            <a href="#" class="alink ftr_hd">Home</a>
                        </div>
                        <div class="cont_rw">
                            <a href="#" class="alink ftr_hd">About us</a>
                        </div>
                        <div class="cont_rw">
                            <a href="#" class="alink ftr_hd">Contact us</a>
                        </div>
                        <div class="">
                            <a href="#" class="alink ftr_hd">Login</a>
                        </div>
                    </div>
                    <div class="ftr-col left">
                        <div class="ftr_hd ylwtxt cont_rw">Contact Us Details:</div>
                        <div class="cont_rw">
                            <div class="cont_icon left eml"><img src="images/location_ylw.svg"></div>
                            <div class="left cont_txt2 wtxt">Lovely Professional university, Phagwara, G.T Road, Punjab (144411)</div>
                            <div class="clr"></div>
                        </div>
                        <div class="cont_rw">
                            <div class="cont_icon left eml"><img src="images/email.svg"></div>
                            <div class="left cont_txt2 wtxt">pk14009432@gmail.com</div>
                            <div class="clr"></div>
                        </div>
                        <div class="cont_rw">
                            <div class="cont_icon left eml"><img src="images/contact.svg"></div>
                            <div class="left cont_txt2 wtxt">+91-9876543210</div>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="ftr2">
                    Copyright © Grievance System.2021 All right reserved.
                </div>
            </div>
        </div>
<script>
var coll = document.getElementsByClassName("faq_rw");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var faq_ans = this.nextElementSibling;
    if (faq_ans.style.display === "block") {
      faq_ans.style.display = "none";
    } else {
      faq_ans.style.display = "block";
    }
  });
}
</script>
    </body>
</html>
