<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<?php $this->load->view('resume/head');?>
<style type="text/css">
    .main{
        box-shadow: 3px 6px 3px 6px #888888;
    }
    .main img{
      width: 200px;
      height: 200px;
      margin-top: 30px;
    }
    .info
    {
      padding-left: 30px;
    }
    .detail{
      color: black;
      height: 220px;
      margin-top: 30px;
      padding-left: 40px;
    }
    .detail p{
      font-size: 18px;
    }
    .work h3{ 
      padding-left: 30px;
      padding-top: 30px;
      color: black;
      font-weight: 900;
    }
    .work h4{
      color: black;
      padding-left: 30px;
      font-weight: 900;
    }
    .work h5{
       padding-left: 30px;
    }
    hr{
      border:1px solid black ;
      width: 100%;
    }
    .work i{
      color: black;
      padding-left: 30px;
    }
    .work ul li{
      font-size: 18px;
      font-weight: 600;
    }
    .organisation h3{
      padding-left: 30px;
      padding-top: 30px;
      color: black;
      font-weight: 900;
    }
    .organisation p{
      font-size: 18px;
      font-weight: 600;
      padding-left: 30px;
    }
    .education h3{
      padding-left: 30px;
      padding-top: 30px;
      color: black;
      font-weight: 900;
    }
    .education h4{
      color: black;
      padding-left: 30px;
      font-weight: 900;
    }
    .education h5{
       padding-left: 30px;
    }
    .education i{
      color: black;
      padding-left: 30px;
    }
    .far{
       color: black;
    }
    .side{
      padding-left: 5%;
      border-right:1px solid gray; 
    }
    .skills h3{
      padding-left: 60px;
      padding-top: 40px;
      color: black;
      font-weight: 900;
    }
    .contact{
      padding-top: 60px;
    }
    .contact p{
      font-weight: 600;
      font-size: 20px;
    }
    .skill h3{
       color: black;
       font-weight:900;
    }
    .p1 li{
      width:auto;
      color: black;
      list-style: none;
       font-weight: 600;
       font-size: 18px;
       margin-left: -20px;
    }
     .lag h3{
       color:black;
       font-weight:900;
    }
</style>
</head>
<body>  
   <div class="container">
      <div class="main">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-md-offset-1 side">
             <center><img class="img-circle" src="<?php echo base_url();?>frontend_assets/img/r1.jpg"></center>
             <div class="contact">
              <div class="skill">
             <h3>Contact</h3><hr>
            </div> 
             <p>jane.roe@gmail.com</p>
             <p>8766-8444-7344</p>
             <p>New York, USA</p>
            </div>  
            <div class="skill">
             <h3>SKILLS</h3><hr>
            </div> 
             <div class="p1">
               <ul>
                  <li>SEO</li>
               </ul>
               <ul>
                  <li>Public Speaking</li>
               </ul>
               <ul>
                  <li>Negotiation</li>
               </ul>
               <ul>
                  <li>Teamwork</li>
               </ul>
               <ul>
                  <li>Decision Making</li>
               </ul>
               <ul>
                  <li>Research & Strategy</li>
               </ul>
               <ul>
                  <li>Emotional Intelligence</li>
               </ul>
             </div> 
             <div class="lag">
             <h3>LANGUAGES</h3><hr>
                <ul class="p1">
                   <li>HINDI</li>
                </ul>
                <ul class="p1">
                   <li>ENGLISH</li>
                </ul>
            </div> 
           <div class="lag">
                <h3>HOBBIES</h3><hr>
                <ul class="p1">
                   <li>Music</li>
                </ul>
                <ul class="p1">
                   <li>Study</li>
                </ul>
            </div> 
        </div>
         <div class=" col-md-9 info">
          <div class="detail">
            <h1 style="padding-top: 30px;"><strong>Jane Rae</strong></h1>
            <h4>Bussiness Development Manager</h4>
            <p>Professional Bussiness Developer with more than four years of experiance in the bussiness development processes.Invovled in product Testing, Management and Development of new bussiness opportunities.</p>   
          </div>
          <div class="organisation">
            <h3>OBJECTIVE</h3><hr>
             <p>Professional Bussiness Developer with more than four years of experiance in the bussiness development processes.Invovled in product Testing, Management and Development of new bussiness opportunities</p>
          </div>
          <div class="work">
             <h3>WORK EXPERIANCE</h3><hr>
             <h4>Bussiness Development Manager</h4>
             <h5>AirState Solutions</h5>
             <i>09/2014 - 06/2017 <b style="float: right;padding-right: 30px;">New York, USA</b></i>
             <ul>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
             </ul>
             <h4>Bussiness Development Assistant</h4>
             <h5>AirState Solutions</h5>
             <i>08/2012 - 09/2014 <b style="float: right;padding-right: 30px;">Chicago, USA</b></i>
             <ul>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
                <li>Succesfully Managed $2-3, million budget projects and succesfully achieved the project scheduled goals. </li>
             </ul>
          </div>
          <div class="organisation">
            <h3>ORGANISATIONS</h3><hr>
             <p>American Managment Association (2015-Present)</p>
             <p>American Managment Association (2015-Present)</p>
             <p>American Managment Association (2015-Present)</p>
          </div>
          <div class="education">
            <h3>EDUCATION</h3><hr>
            <h4>MSc in Economics and Bussiness Administration</h4>
            <h5>The Univercity of Chicago</h5>
            <i>09/2008 - 06/2010</i>
            <h4>MSc in Economics and Bussiness Administration</h4>
            <h5>The Univercity of Chicago</h5>
            <i>09/2008 - 06/2010</i>
            <h4>MSc in Economics and Bussiness Administration</h4>
            <h5>The Univercity of Chicago</h5>
            <i>09/2008 - 06/2010</i>
            <h4>MSc in Economics and Bussiness Administration</h4>
            <h5>The Univercity of Chicago</h5>
            <i>09/2008 - 06/2010</i>
          </div>
          <div class="education">
            <h3>HONOURS AND AWARDS</h3><hr>
            <h5>Jury Member, Venture Cup Entrepreneureship Competition (2016)</h5>
            <i>Venture Cup, USA</i>
            <h5>Jury Member, Venture Cup Entrepreneureship Competition (2016)</h5>
            <i>AirState Bussiness Awards</i>
          </div>
          <div class="education">
            <h3>PERSONAL DETAILS</h3><hr>
            <ul  class="p1">
                   <li>Father's Name: Mr.Joe</li>
                   <p></p>
                </ul>
                <ul  class="p1">
                   <li>Mother's Name:Mrs.Joe</li>
                   <p></p>
                </ul>
                <ul  class="p1">
                   <li>Date of Birth: 04/04/1997</li>
                   <p></p>
                </ul>
                <ul  class="p1">
                   <li>Nationality:Indian</li>
                   <p></p>
                </ul>
                <ul  class="p1">
                   <li>Marital Status:Single</li>
                   <p></p>
                </ul>
          </div>
          <div class="education">
            <h3>REFERENCE</h3><hr>
            <ul style="font-weight:600 ;">
            <li>Prof B.N. Phadke, H.O.D of electrical and electronics engineering department.</li>
            <li>Mr. Rajeev Shukla, Director, CMG Department, IPS Academy.</li>
          </ul>
          </div>
          <div class="education">
            <h3>DECLRATION</h3><hr>
            <ul style="font-weight:600 ;">
            <p>
                 I hereby declare that the information given above is true to the best of my knowledge & belief.
             </p><br><br>
             <p>Date: 16/03/13<span style="float: right; margin-right: 40px;font-size: 28px;"><b> Jane Rae </b></span></p>
          </ul>
          </div>
         </div>
      </div>
   </div>
   <div>
</body>
</html>