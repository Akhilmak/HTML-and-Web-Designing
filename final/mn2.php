<!DOCTYPE html>
<html>
    <title>CUTM.erp.LOGIN</title>
    <head> 
        <style>
            .h3{
                margin-left: 36%;
                margin-right:10%;
                cursor: not-allowed;
                color:crimson;
                
            }
            .h2{
             margin-left: 40%;
             margin-right: 35%;
             color:crimson;
             cursor: not-allowed;
            }
            .im{
             background: scroll;
            width: 95px;
             height: 96px;
             margin-left: 47%;
             margin-right: 30%;
             border-radius: 15%;
            }
           .z{
            margin-left: 44%;
            margin-right: 37%;
            font-style: bold;
           color:crimson;
           cursor: not-allowed;
            
           }
           .li{
         height: 10px;
         background-color:darkblue ;
           }
           .a{
            height: 70px;
        margin-left: 75px;
          margin-right: 75px;
          border-radius: 50%;
          
           }
           .b{
            height: 70px;
            margin-left: 75px;
            margin-right: 75px;
            border-radius: 50%;
    
           }
            .c{
                height: 70px;
                margin-left: 75px;
                margin-right: 75px;
                border-radius: 50%;
                background-color:rgb(210, 20, 166);
            }
           .d{
            height: 70px;
                margin-left: 75px;
                margin-right: 75px;
                background-color:darkgoldenrod;
                
           }
           .e{
            height: 70px;
                margin-left: 105px;
                margin-right: 75px;
                border-radius: 50%;
                
           }
           .f{
            height: 70px;
                margin-left: 110px;
                margin-right: 75px;
                border-radius: 50%;
           }
           .g{
            height: 70px;
                margin-left: 75px;
                margin-right:75px ;
                margin-top: 100px;
                border-radius: 50%;
           }
            .h{
                height: 70px;
                margin-left: 75px;
                margin-right:75px ;
                margin-top: 100px;
                border-radius: 60%  
            }
            .i{
                height: 70px;
                margin-left: 75px;
                margin-right:75px ;
                margin-top: 100px;
                border-radius: 60%;  
                
            }
            .j{
                height: 70px;
                margin-left: 84px;
                margin-right:75px ;
                margin-top: 100px;
                border-radius: 60%;  
            }
            .k{
                height: 70px;
                margin-left: 110px;
                margin-right:80px ;
                margin-top: 100px;
                border-radius: 60%;  
            }
            .l{
                height: 70px;
                margin-left: 95px;
                margin-right:80px ;
                margin-top: 100px;
                border-radius: 60%;
                  
            }
            .m{
                height: 70px;
                margin-left: 75px;
                margin-right:115px ;
                margin-top: 100px;
                border-radius: 60%;  
          } 
          .n{
            height: 70px;
                margin-left: 35px;
                margin-right:11px ;
                margin-top: 100px;
                border-radius: 60%;  
          }
          .o{
            height: 70px;
                margin-left: 135px;
                margin-right:40px ;
                margin-top: 100px;
                border-radius: 60%;  
          }
          .p{
            height: 70px;
                margin-left:121px;
                margin-right:50px ;
                margin-top: 100px;
                border-radius: 60%;  
          }
          .q{
            height: 70px;
                margin-left: 135px;
                margin-right:40px ;
                margin-top: 100px;
                border-radius: 60%;  
          }
          .r{
            height: 70px;
                margin-left: 135px;
                margin-right:40px ;
                margin-top: 100px;
                border-radius: 60%;
          }
          .na{
            color: white;
            cursor:pointer;
            color: cornflowerblue;
          }
          .nb{
          color:white ;
          cursor: pointer;
          color: cornflowerblue;
      
          }
          .nc{
            color: white;
            cursor: pointer;
            color: cornflowerblue;
          }
          .all{
            cursor: pointer;
          }
          
           
           
          .bvr img {
  transition: all 0.3s ease-in-out;
}

.bvr img:hover {
  
  transform: scale(1.1);
}
     
          
          


        </style>
        
    </head>   
    
    
    <body class="body">
    
      <script>
    
    

        
    
   
       
            
                 var hour=00;
    var min=00;
    var sec=00;
    function sleep(ms) {
         return new Promise(resolve => setTimeout(resolve, ms));
    }
    async function mad()
    {
    while (true)
    {
           if(sec<60)
           {
              
              sec++; 
           }
            if(sec==59)
           {
               min++;
               sec=00;
           }
           if(min>59)
           {
               hour++;
               min=00;
               sec=00;
           }
           await sleep(1000);
           document.getElementById('time').innerHTML=+hour+":"+min+":"+sec;
          
       }
    }
    mad()
             
                 
             </script>
      <h2 class="h2"> CENTURION UNIVERSITY </h2>
        <h3 class="h3" >SCHOOL OF ENGINEERING & TECHNOLOGY,VZM</h3>
<img align="center" class="im" src="http://localhost/test/images/cutm_logo.png">
<p class="z">CENTURION UNIVERSITY</p>
<div class="bvr">
<hr class="li">
<div class="all">
<a href="student.html"><img onclick="student()" class="a" src="https://cdn-icons-png.flaticon.com/128/2302/2302834.png" title="Student"></a>
<a href="assignment.html"><img  onclick="assignment()" class="b"  src="https://cdn-icons-png.flaticon.com/128/5842/5842026.png" title="Assignment"></a>
<a href="http://localhost/test/atten/2.html"><img  onclick="attendance()" class="c" src="https://cdn-icons-png.flaticon.com/128/2436/2436683.png" title="Attendance" ></a>
<a href="course.html"><img  onclick="course()" class="d" src="https://cdn-icons-png.flaticon.com/128/2436/2436874.png" title="Course" ></a>
<a href="employee.html"><img  onclick="employee()" class="e" src="https://cdn-icons-png.flaticon.com/128/2405/2405283.png" title="Employee" ></a>
<a href="exam.html"><img  onclick="examination()" class="f" src="https://cdn-icons-png.flaticon.com/128/4344/4344952.png" title="Examination"></a>
  <br>


<div class="na">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStudent
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Assignment
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Attendance
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Courses
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Employee
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExam
</div>

<br></a>
<a href="greivance.html"><img  onclick="greivance()" class="g" src="https://cdn-icons-png.flaticon.com/128/1253/1253778.png" title="Grievance Complaint"></a>
<a href="leave.html"><img  onclick="leave()" class="h" src="https://cdn-icons-png.flaticon.com/128/3387/3387188.png" title="Leave Management" ></a>
<a href="online.html"><img class="i"  onclick="exam()" src="https://cdn-icons-png.flaticon.com/128/5352/5352159.png" title="Online Exam"></a>
<a href="payroll.html"><img class="j"  onclick="payroll()" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2HfkuwO-uWB80y5EslgUkvCyEPrEbyE9f1w&usqp=CAU" title="Payroll"></a>
<a href="performance.html"><img class="k"  onclick="performance()" src="https://cdn-icons-png.flaticon.com/128/9912/9912458.png" title="Performances"></a>
<a href="proctor.html"><img class="l"  onclick="proctor()" src="data:image/jpeg;base64,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" title="proctor"><br></a>

<div class="nb">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Grievance Complaint
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Leave Management
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Online Exam
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Payroll
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Performances
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Proctor
</div>
<br>
<a href="question.html" target="_blank"><img  onclick="question()" class="m" src="https://static.vecteezy.com/system/resources/thumbnails/007/695/677/small/checklist-and-pencil-free-vector.jpg" title="Question Bank"></a>
<a href="report.html"><img class="n"  onclick="report()" src="https://cdn-icons-png.flaticon.com/128/3540/3540926.png" title="Reports"></a>
<a href="settings.html"><img class="o"  onclick="settings()" src="https://cdn-icons-png.flaticon.com/128/9597/9597333.png" title="Settings"></a>
<a href="feedback.html"><img class="p"  onclick="feedback()" src="https://cdn-icons-png.flaticon.com/128/1087/1087804.png" title="Student Feedback"></a>
<a href="survey.html"><img class="q"  onclick="survey()" src="https://cdn-icons-png.flaticon.com/128/5435/5435781.png" title="Survey"></a>
<a href="time.html"><img class="r"  onclick="time()" src="https://www.shutterstock.com/image-vector/timetable-color-line-icon-calendar-260nw-1923052247.jpg" title="Time Table"><br></a>

<div class="nc">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Question Bank
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Report
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Settings
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Student Feedback
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Survey
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Time Table
</div>
</div>

<br><br>
</div>

 
  <form action="http://localhost/test/logout.php" method="post">
  <button class="a" href="http://localhost/test/login.php">logout</button>
  
  </form>
  
  <a href="http://localhost/test/vikas.php"><button  href="http://localhost/test/vikas.php">report</button></a>
  

</body>
</html>
