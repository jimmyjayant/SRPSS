/* The code below is used to style the active or current link in navbar */
document.addEventListener("DOMContentLoaded", function() {
   const x = document.getElementsByClassName("navbar")[0];
   const y = x.getElementsByTagName("a");
   const z = Array.from(y);
   let linkfound = 0;

   z.forEach((link) => {

      if(window.location.href == link.href) 
      {
         linkfound = 1;
         link.classList.add('active');
      }
   });

   if(linkfound == 0)
   {
      z[1].classList.add("active");
   }
});

//viewpapersadmin  admin.php javascript
function viewPapersAdmin() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
        var viewPapersAdmin = document.getElementById("viewpapersadmin");
          if(viewPapersAdmin)
          {
           viewPapersAdmin.innerHTML = this.responseText;
          }
         
      }
   };
   xmlhttp.open("GET", "getpapersdataforadmin", true);
   xmlhttp.send();
 }

if(window.location.pathname.includes("admin"))
{
   document.addEventListener("DOMContentLoaded", function() {
   viewPapersAdmin();
});
}

// astronomy.php

//feedback.php
function showFeedbackData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFeedbackData = document.getElementById("feedback");
         if(showFeedbackData)
         {
            showFeedbackData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfeedbackdata", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showFeedbackData();
});
}


//admin.php
var class1 = document.getElementsByClassName("class1");
var class2 = document.getElementsByClassName("class2");
var class3 = document.getElementsByClassName("class3");
var class4 = document.getElementsByClassName("class4");
var class5 = document.getElementsByClassName("class5");
var class6 = document.getElementsByClassName("class6");
var class7 = document.getElementsByClassName("class7");
var class8 = document.getElementsByClassName("class8");
var class9 = document.getElementsByClassName("class9");
var class10 = document.getElementsByClassName("class10");
var class11 = document.getElementsByClassName("class11");
var class12 = document.getElementsByClassName("class12");
var class13 = document.getElementsByClassName("class13");
var class14 = document.getElementsByClassName("class14");

function adminnavbar1() {
   class1[0].style.display="block";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar2() {
   class1[0].style.display="none";
   class2[0].style.display="block";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar3() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="block";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar4() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="block";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar5() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="block";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar6() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="block";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar7() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="block";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar8() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="block";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar9() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="block";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar10() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="block";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar11() {
   class11[0].style.display="block";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar12() {
   class12[0].style.display="block";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function adminnavbar13() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="block";
   class14[0].style.display="none";
}

function adminnavbar14() {
   class1[0].style.display="none";
   class2[0].style.display="none";
   class3[0].style.display="none";
   class4[0].style.display="none";
   class5[0].style.display="none";
   class6[0].style.display="none";
   class7[0].style.display="none";
   class8[0].style.display="none";
   class9[0].style.display="none";
   class10[0].style.display="none";
   class11[0].style.display="none";
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="block";
}

// Users notifications in admin navbar
function showAllRegUsersData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAllRegUsersData = document.getElementById("allregisteredusers");
         if(showAllRegUsersData)
         {
            showAllRegUsersData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "showallregusers", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAllRegUsersData();
});
}


// dashboard.php
var class20 = document.getElementsByClassName("class20");
var class21 = document.getElementsByClassName("class21");
var class22 = document.getElementsByClassName("class22");

function usernavbar1()
{
   class20[0].style.display="block";
   class21[0].style.display="none";
   class22[0].style.display="none";
}

function usernavbar2()
{
   class20[0].style.display="none";
   class21[0].style.display="block";
   class22[0].style.display="none";
}

function usernavbar3()
{
   class20[0].style.display="none";
   class21[0].style.display="none";
   class22[0].style.display="block";
}

// User notifications in dashboard.php
function showUserNotificationsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUserNotificationsData = document.getElementById("usernotifications");
         if(showUserNotificationsData)
         {
            showUserNotificationsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getusernotifications", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUserNotificationsData();
});
}


// Submitted Research Papers in dashboard.php 
function showSubmittedResearchPapersData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSubmittedResearchPapersData = document.getElementById("papersubmittedbyuser");
         if(showSubmittedResearchPapersData)
         {
            showSubmittedResearchPapersData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsubmittedpapersdata", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("dashboard"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSubmittedResearchPapersData();
});
}


// Submitted Feedback by User in dashboard.php 
function showSubmittedFeedbackData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSubmittedFeedbackData = document.getElementById("feedbackbyuser");
         if(showSubmittedFeedbackData)
         {
            showSubmittedFeedbackData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsubmittedfeedbackdata", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("dashboard"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSubmittedFeedbackData();
});
}


function checklogin()
{
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         if(this.responseText == "logout")
         {
            window.location.href = "logout";
         }
      }
   };
   xmlhttp.open("GET", "checklogin", true);
   xmlhttp.send();
}


// logout
function logout()
{
   clearInterval(x);
   clearInterval(y);
   localStorage.clear();
   window.location.href="logout";
}
