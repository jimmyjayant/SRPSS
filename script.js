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


// index.php javascript 
function CreateData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCreateDataStatus = document.getElementById("CreateDataStatus");
         if(showCreateDataStatus)
         {
           showCreateDataStatus.innerHTML = this.responseText;
         }
      }
    };
    xmlhttp.open("GET", "createdata.php", true);
    xmlhttp.send();
    }

CreateData();


// researchsites.php javascript
function showResearchSitesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showResearchSitesData = document.getElementById("researchsites");
          if(showResearchSitesData)
          {
            showResearchSitesData.innerHTML = this.responseText;
          }
       }
    };
    xmlhttp.open("GET", "getresearchsitedata.php", true);
    xmlhttp.send();
  }

if(window.location.pathname.includes("researchsites.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showResearchSitesData();
});
}


//showResearchSitesData();


// view.php javascript
function viewPapers() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var viewPapers = document.getElementById("viewpapers");
           if(viewPapers)
           {
            viewPapers.innerHTML = this.responseText;
           }
          
       }
    };
    xmlhttp.open("GET", "getpapersdata.php", true);
    xmlhttp.send();
  }

if(window.location.pathname.includes("view.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   viewPapers();
});
}
  


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
   xmlhttp.open("GET", "getpapersdataforadmin.php", true);
   xmlhttp.send();
 }

if(window.location.pathname.includes("admin.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   viewPapersAdmin();
});
}





// magazines.php javascript
function showMagazinesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showMagazinesData = document.getElementById("magazines");
         if(showMagazinesData)
         {
            showMagazinesData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getmagazinedata.php", true);
    xmlhttp.send();
  }

if(window.location.pathname.includes("magazines.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMagazinesData();
});
}


  //showMagazinesData();

  function showJournalsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showJournalsData = document.getElementById("journals");
         if(showJournalsData)
         {
            showJournalsData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getjournaldata.php", true);
    xmlhttp.send();
  }

  if(window.location.pathname.includes("magazines.php"))
  {
     document.addEventListener("DOMContentLoaded", function() {
      showJournalsData();
      });
  }


  //showJournalsData();


// newspapers.php javascript
function showNewspapersData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showNewspapersData = document.getElementById("newspapers");
         if(showNewspapersData)
         {
            showNewspapersData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getnewspaperdata.php", true);
    xmlhttp.send();
  }

    if(window.location.pathname.includes("newspapers.php"))
    {
        document.addEventListener("DOMContentLoaded", function() {
         showNewspapersData();
         });
    }


  //showNewspapersData();


// conferences.php javascript
function showConferencesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showConferencesData = document.getElementById("conferences");
         if(showConferencesData)
         {
            showConferencesData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getconferencedata.php", true);
    xmlhttp.send();
  }

   if(window.location.pathname.includes("conferences.php"))
   {
      document.addEventListener("DOMContentLoaded", function() {
      showConferencesData();
      });
   }
  

  //showConferencesData();


// channel.php javascript
function showYouTubeChannelsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showYouTubeChannelsData = document.getElementById("ytchannels");
         if(showYouTubeChannelsData)
         {
            showYouTubeChannelsData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getytchanneldata.php", true);
    xmlhttp.send();
  }

  if(window.location.pathname.includes("channel.php"))
  {
      document.addEventListener("DOMContentLoaded", function() {
      showYouTubeChannelsData();
      });
  }
  

//showYouTubeChannelsData();



// scientist.php javascript
function showScientistsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showScientistsData = document.getElementById("scientists");
         if(showScientistsData)
         {
            showScientistsData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp.open("GET", "getscientistdata.php", true);
    xmlhttp.send();
  }

  if(window.location.pathname.includes("scientist.php"))
  {
   document.addEventListener("DOMContentLoaded", function() {
   showScientistsData();
   });
  }


//showScientistsData();



// movies.php javascript
function showMoviesData() {
    var xmlhttp1 = new XMLHttpRequest();
    xmlhttp1.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showMoviesData = document.getElementById("movies");
         if(showMoviesData) 
         {
            showMoviesData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp1.open("GET", "getmoviedata.php", true);
    xmlhttp1.send();
  }

  if(window.location.pathname.includes("movies.php"))
  {
   document.addEventListener("DOMContentLoaded", function() {
   showMoviesData();
   });
  }
  

//showMoviesData();

  function showWebSeriesData() {
    var xmlhttp2 = new XMLHttpRequest();
    xmlhttp2.onload = function() {
       if(this.readyState == 4 && this.status == 200) {
         var showWebSeriesData = document.getElementById("webseries");
         if(showWebSeriesData)
         {
            showWebSeriesData.innerHTML = this.responseText;
         }
          
       }
    };
    xmlhttp2.open("GET", "getwebseriesdata.php", true);
    xmlhttp2.send();
  }

  if(window.location.pathname.includes("movies.php"))
  {
   document.addEventListener("DOMContentLoaded", function() {
   showWebSeriesData();
   });
  }
  

// awards.php
function showAwardsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAwardsData = document.getElementById("awards");
         if(showAwardsData)
         {
            showAwardsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getawards.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("awards.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAwardsData();
});
}


// observatories.php
function showObservatoryData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showObservatoryData = document.getElementById("observatory");
         if(showObservatoryData)
         {
            showObservatoryData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getobservatories.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("observatories.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showObservatoryData();
});
}


// astronomy.php

// telescopemaking.php
function showTelescopeWorkshopData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTelescopeWorkshopData = document.getElementById("telescopeworkshop");
         if(showTelescopeWorkshopData)
         {
            showTelescopeWorkshopData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettelescopeworkshop.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("astronomy.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTelescopeWorkshopData();
});
}


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
   xmlhttp.open("GET", "getfeedbackdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin.php"))
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
   xmlhttp.open("GET", "showallregusers.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin.php"))
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
   xmlhttp.open("GET", "getusernotifications.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("admin.php"))
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
   xmlhttp.open("GET", "getsubmittedpapersdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("dashboard.php"))
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
   xmlhttp.open("GET", "getsubmittedfeedbackdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("dashboard.php"))
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
            window.location.href = "logout.php";
         }
      }
   };
   xmlhttp.open("GET", "checklogin.php", true);
   xmlhttp.send();
}


// logout
function logout()
{
   clearInterval(x);
   clearInterval(y);
   localStorage.clear();
   window.location.href="logout.php";
}

//world.php

// Afghanistan Data 
function showAfghanistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAfghanistanData = document.getElementById("science_in_Afghanistan");
         if(showAfghanistanData)
         {
            showAfghanistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getafghanistandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAfghanistanData();
});
}


// Albania Data 
function showAlbaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAlbaniaData = document.getElementById("science_in_Albania");
         if(showAlbaniaData)
         {
            showAlbaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getalbaniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAlbaniaData();
});
}


// Algeria Data 
function showAlgeriaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAlgeriaData = document.getElementById("science_in_Algeria");
         if(showAlgeriaData)
         {
            showAlgeriaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getalgeriadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAlgeriaData();
});
}


// Andorra Data 
function showAndorraData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAndorraData = document.getElementById("science_in_Andorra");
         if(showAndorraData)
         {
            showAndorraData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getandorradata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAndorraData();
});
}


// Angola Data 
function showAngolaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAngolaData = document.getElementById("science_in_Angola");
         if(showAngolaData)
         {
            showAngolaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getangoladata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAngolaData();
});
}


// Antigua_and_Barbuda Data 
function showAntigua_and_BarbudaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAntigua_and_BarbudaData = document.getElementById("science_in_Antigua_and_Barbuda");
         if(showAntigua_and_BarbudaData)
         {
            showAntigua_and_BarbudaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getantiguaandbarbudadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAntigua_and_BarbudaData();
});
}


// Argentina Data 
function showArgentinaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showArgentinaData = document.getElementById("science_in_Argentina");
         if(showArgentinaData)
         {
            showArgentinaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getargentinadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showArgentinaData();
});
}


// Armenia Data 
function showArmeniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showArmeniaData = document.getElementById("science_in_Armenia");
         if(showArmeniaData)
         {
            showArmeniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getarmeniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showArmeniaData();
});
}


// Australia Data 
function showAustraliaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAustraliaData = document.getElementById("science_in_Australia");
         if(showAustraliaData)
         {
            showAustraliaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getaustraliadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAustraliaData();
});
}


// Austria Data 
function showAustriaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAustriaData = document.getElementById("science_in_Austria");
         if(showAustriaData)
         {
            showAustriaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getaustriadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAustriaData();
});
}


// Azerbaijan Data 
function showAzerbaijanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAzerbaijanData = document.getElementById("science_in_Azerbaijan");
         if(showAzerbaijanData)
         {
            showAzerbaijanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getazerbaijandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showAzerbaijanData();
});
}


// Bahamas Data 
function showBahamasData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBahamasData = document.getElementById("science_in_Bahamas");
         if(showBahamasData)
         {
            showBahamasData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbahamasdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBahamasData();
});
}


// Bahrain Data 
function showBahrainData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBahrainData = document.getElementById("science_in_Bahrain");
         if(showBahrainData)
         {
            showBahrainData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbahraindata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBahrainData();
});
}


// Bangladesh Data 
function showBangladeshData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBangladeshData = document.getElementById("science_in_Bangladesh");
         if(showBangladeshData)
         {
            showBangladeshData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbangladeshdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBangladeshData();
});
}


// Barbados Data 
function showBarbadosData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBarbadosData = document.getElementById("science_in_Barbados");
         if(showBarbadosData)
         {
            showBarbadosData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbarbadosdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBarbadosData();
});
}



// Belarus Data 
function showBelarusData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBelarusData = document.getElementById("science_in_Belarus");
         if(showBelarusData)
         {
            showBelarusData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbelarusdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBelarusData();
});
}


// Belgium Data 
function showBelgiumData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBelgiumData = document.getElementById("science_in_Belgium");
         if(showBelgiumData)
         {
            showBelgiumData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbelgiumdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBelgiumData();
});
}


// Belize Data 
function showBelizeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBelizeData = document.getElementById("science_in_Belize");
         if(showBelizeData)
         {
            showBelizeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbelizedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBelizeData();
});
}


// Benin Data 
function showBeninData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBeninData = document.getElementById("science_in_Benin");
         if(showBeninData)
         {
            showBeninData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbenindata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBeninData();
});
}


// Bhutan Data 
function showBhutanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBhutanData = document.getElementById("science_in_Bhutan");
         if(showBhutanData)
         {
            showBhutanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbhutandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBhutanData();
});
}


// Bolivia Data 
function showBoliviaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBoliviaData = document.getElementById("science_in_Bolivia");
         if(showBoliviaData)
         {
            showBoliviaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getboliviadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBoliviaData();
});
}


// Bosnia_and_Herzegovina Data 
function showBosnia_and_HerzegovinaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBosnia_and_HerzegovinaData = document.getElementById("science_in_Bosnia_and_Herzegovina");
         if(showBosnia_and_HerzegovinaData)
         {
            showBosnia_and_HerzegovinaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbosniaandherzegovinadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBosnia_and_HerzegovinaData();
});
}


// Botswana Data 
function showBotswanaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBotswanaData = document.getElementById("science_in_Botswana");
         if(showBotswanaData)
         {
            showBotswanaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbotswanadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBotswanaData();
});
}


// Brazil Data 
function showBrazilData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBrazilData = document.getElementById("science_in_Brazil");
         if(showBrazilData)
         {
            showBrazilData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbrazildata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBrazilData();
});
}


// Brunei Data 
function showBruneiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBruneiData = document.getElementById("science_in_Brunei");
         if(showBruneiData)
         {
            showBruneiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbruneidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBruneiData();
});
}


// Bulgaria Data 
function showBulgariaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBulgariaData = document.getElementById("science_in_Bulgaria");
         if(showBulgariaData)
         {
            showBulgariaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbulgariadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBulgariaData();
});
}


// Burkina_Faso Data 
function showBurkina_FasoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBurkina_FasoData = document.getElementById("science_in_Burkina_Faso");
         if(showBurkina_FasoData)
         {
            showBurkina_FasoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getburkinafasodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBurkina_FasoData();
});
}


// Burundi Data 
function showBurundiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBurundiData = document.getElementById("science_in_Burundi");
         if(showBurundiData)
         {
            showBurundiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getburundidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showBurundiData();
});
}


// Cabo_Verde Data 
function showCabo_VerdeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCabo_VerdeData = document.getElementById("science_in_Cabo_Verde");
         if(showCabo_VerdeData)
         {
            showCabo_VerdeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcaboverdedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCabo_VerdeData();
});
}


// Cambodia Data 
function showCambodiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCambodiaData = document.getElementById("science_in_Cambodia");
         if(showCambodiaData)
         {
            showCambodiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcambodiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCambodiaData();
});
}


// Cameroon Data 
function showCameroonData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCameroonData = document.getElementById("science_in_Cameroon");
         if(showCameroonData)
         {
            showCameroonData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcameroondata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCameroonData();
});
}


// Canada Data 
function showCanadaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCanadaData = document.getElementById("science_in_Canada");
         if(showCanadaData)
         {
            showCanadaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcanadadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCanadaData();
});
}


// Central_African_Republic Data 
function showCentral_African_RepublicData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCentral_African_RepublicData = document.getElementById("science_in_Central_African_Republic");
         if(showCentral_African_RepublicData)
         {
            showCentral_African_RepublicData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcentralafricanrepublicdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCentral_African_RepublicData();
});
}


// Chad Data 
function showChadData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showChadData = document.getElementById("science_in_Chad");
         if(showChadData)
         {
            showChadData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getchaddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showChadData();
});
}


// Chile Data 
function showChileData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showChileData = document.getElementById("science_in_Chile");
         if(showChileData)
         {
            showChileData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getchiledata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showChileData();
});
}


// China Data 
function showChinaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showChinaData = document.getElementById("science_in_China");
         if(showChinaData)
         {
            showChinaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getchinadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showChinaData();
});
}


// Colombia Data 
function showColombiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showColombiaData = document.getElementById("science_in_Colombia");
         if(showColombiaData)
         {
            showColombiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcolombiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showColombiaData();
});
}


// Comoros Data 
function showComorosData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showComorosData = document.getElementById("science_in_Comoros");
         if(showComorosData)
         {
            showComorosData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcomorosdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showComorosData();
});
}


// Congo_Congo-Brazzaville Data 
function showCongo_Congo_BrazzavilleData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCongo_Congo_BrazzavilleData = document.getElementById("science_in_Congo_Congo-Brazzaville");
         if(showCongo_Congo_BrazzavilleData)
         {
            showCongo_Congo_BrazzavilleData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcongo(congo-brazzaville)data.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCongo_Congo_BrazzavilleData();
});
}


// Congo_Democratic_Republic_of_the_Congo-Kinshasa Data 
function showCongo_Democratic_Republic_of_the_Congo_KinshasaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCongo_Democratic_Republic_of_the_Congo_KinshasaData = document.getElementById("science_in_Congo_Democratic_Republic_of_the_Congo-Kinshasa");
         if(showCongo_Democratic_Republic_of_the_Congo_KinshasaData)
         {
            showCongo_Democratic_Republic_of_the_Congo_KinshasaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcongo_democraticrepublicofthecongokinshasadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCongo_Democratic_Republic_of_the_Congo_KinshasaData();
});
}


// Costa_Rica Data 
function showCosta_RicaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCosta_RicaData = document.getElementById("science_in_Costa_Rica");
         if(showCosta_RicaData)
         {
            showCosta_RicaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcostaricadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCosta_RicaData();
});
}


// Croatia Data 
function showCroatiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCroatiaData = document.getElementById("science_in_Croatia");
         if(showCroatiaData)
         {
            showCroatiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcroatiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCroatiaData();
});
}


// Cuba Data 
function showCubaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCubaData = document.getElementById("science_in_Cuba");
         if(showCubaData)
         {
            showCubaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcubadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCubaData();
});
}


// Cyprus Data 
function showCyprusData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCyprusData = document.getElementById("science_in_Cyprus");
         if(showCyprusData)
         {
            showCyprusData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcyprusdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showCyprusData();
});
}


// Czechia Data 
function showCzechiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCzechiaData = document.getElementById("science_in_Czechia");
         if(showCzechiaData)
         {
            showCzechiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getczechiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{  
   document.addEventListener("DOMContentLoaded", function() {
   showCzechiaData();
});
}


// Denmark Data 
function showDenmarkData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showDenmarkData = document.getElementById("science_in_Denmark");
         if(showDenmarkData)
         {
            showDenmarkData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getdenmarkdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showDenmarkData();
});
}


// Djibouti Data 
function showDjiboutiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showDjiboutiData = document.getElementById("science_in_Djibouti");
         if(showDjiboutiData)
         {
            showDjiboutiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getdjiboutidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showDjiboutiData();
});
}


// Dominica Data 
function showDominicaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showDominicaData = document.getElementById("science_in_Dominica");
         if(showDominicaData)
         {
            showDominicaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getdominicadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showDominicaData();
});
}


// Dominican_Republic Data 
function showDominican_RepublicData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showDominican_RepublicData = document.getElementById("science_in_Dominican_Republic");
         if(showDominican_RepublicData)
         {
            showDominican_RepublicData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getdominicanrepublicdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showDominican_RepublicData();
});
}


// Ecuador Data 
function showEcuadorData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEcuadorData = document.getElementById("science_in_Ecuador");
         if(showEcuadorData)
         {
            showEcuadorData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getecuadordata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEcuadorData();
});
}


// Egypt Data 
function showEgyptData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEgyptData = document.getElementById("science_in_Egypt");
         if(showEgyptData)
         {
            showEgyptData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getegyptdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEgyptData();
});
}


// El_Salvador Data 
function showEl_SalvadorData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEl_SalvadorData = document.getElementById("science_in_El_Salvador");
         if(showEl_SalvadorData)
         {
            showEl_SalvadorData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getelsalvadordata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEl_SalvadorData();
});
}


// Equatorial_Guinea Data 
function showEquatorial_GuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEquatorial_GuineaData = document.getElementById("science_in_Equatorial_Guinea");
         if(showEquatorial_GuineaData)
         {
            showEquatorial_GuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getequatorialguineadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEquatorial_GuineaData();
});
}


// Eritrea Data 
function showEritreaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEritreaData = document.getElementById("science_in_Eritrea");
         if(showEritreaData)
         {
            showEritreaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "geteritreadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEritreaData();
});
}


// Estonia Data 
function showEstoniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEstoniaData = document.getElementById("science_in_Estonia");
         if(showEstoniaData)
         {
            showEstoniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getestoniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEstoniaData();
});
}


// Eswatini Data 
function showEswatiniData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEswatiniData = document.getElementById("science_in_Eswatini");
         if(showEswatiniData)
         {
            showEswatiniData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "geteswatinidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEswatiniData();
});
}


// Ethiopia Data 
function showEthiopiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEthiopiaData = document.getElementById("science_in_Ethiopia");
         if(showEthiopiaData)
         {
            showEthiopiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getethiopiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showEthiopiaData();
});
}


// Fiji Data 
function showFijiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFijiData = document.getElementById("science_in_Fiji");
         if(showFijiData)
         {
            showFijiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfijidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showFijiData();
});
}


// Finland Data 
function showFinlandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFinlandData = document.getElementById("science_in_Finland");
         if(showFinlandData)
         {
            showFinlandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfinlanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showFinlandData();
});
}


// France Data 
function showFranceData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFranceData = document.getElementById("science_in_France");
         if(showFranceData)
         {
            showFranceData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfrancedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showFranceData();
});
}


// Gabon Data 
function showGabonData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGabonData = document.getElementById("science_in_Gabon");
         if(showGabonData)
         {
            showGabonData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgabondata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGabonData();
});
}


// Gambia Data 
function showGambiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGambiaData = document.getElementById("science_in_Gambia");
         if(showGambiaData)
         {
            showGambiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgambiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGambiaData();
});
}


// Georgia Data 
function showGeorgiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGeorgiaData = document.getElementById("science_in_Georgia");
         if(showGeorgiaData)
         {
            showGeorgiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgeorgiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGeorgiaData();
});
}


// Germany Data 
function showGermanyData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGermanyData = document.getElementById("science_in_Germany");
         if(showGermanyData)
         {
            showGermanyData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgermanydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGermanyData();
});
}


// Ghana Data 
function showGhanaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGhanaData = document.getElementById("science_in_Ghana");
         if(showGhanaData)
         {
            showGhanaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getghanadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGhanaData();
});
}



// Greece Data 
function showGreeceData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGreeceData = document.getElementById("science_in_Greece");
         if(showGreeceData)
         {
            showGreeceData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgreecedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGreeceData();
});
}


// Grenada Data 
function showGrenadaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGrenadaData = document.getElementById("science_in_Grenada");
         if(showGrenadaData)
         {
            showGrenadaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgrenadadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGrenadaData();
});
}


// Guatemala Data 
function showGuatemalaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuatemalaData = document.getElementById("science_in_Guatemala");
         if(showGuatemalaData)
         {
            showGuatemalaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguatemaladata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGuatemalaData();
});
}


// Guinea Data 
function showGuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuineaData = document.getElementById("science_in_Guinea");
         if(showGuineaData)
         {
            showGuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguineadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGuineaData();
});
}


// Guinea-Bissau Data 
function showGuinea_BissauData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuinea_BissauData = document.getElementById("science_in_Guinea-Bissau");
         if(showGuinea_BissauData)
         {
            showGuinea_BissauData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguinea-bissaudata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGuinea_BissauData();
});
}


// Guyana Data 
function showGuyanaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuyanaData = document.getElementById("science_in_Guyana");
         if(showGuyanaData)
         {
            showGuyanaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguyanadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showGuyanaData();
});
}



// Haiti Data 
function showHaitiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showHaitiData = document.getElementById("science_in_Haiti");
         if(showHaitiData)
         {
            showHaitiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gethaitidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showHaitiData();
});
}


// Honduras Data 
function showHondurasData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showHondurasData = document.getElementById("science_in_Honduras");
         if(showHondurasData)
         {
            showHondurasData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gethondurasdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showHondurasData();
});
}


// Hungary Data 
function showHungaryData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showHungaryData = document.getElementById("science_in_Hungary");
         if(showHungaryData)
         {
            showHungaryData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gethungarydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showHungaryData();
});
}


// Iceland Data 
function showIcelandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIcelandData = document.getElementById("science_in_Iceland");
         if(showIcelandData)
         {
            showIcelandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "geticelanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIcelandData();
});
}


// India Data 
function showIndiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIndiaData = document.getElementById("science_in_India");
         if(showIndiaData)
         {
            showIndiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getindiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIndiaData();
});
}


// Indonesia Data 
function showIndonesiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIndonesiaData = document.getElementById("science_in_Indonesia");
         if(showIndonesiaData)
         {
            showIndonesiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getindonesiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIndonesiaData();
});
}


// Iran Data 
function showIranData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIranData = document.getElementById("science_in_Iran");
         if(showIranData)
         {
            showIranData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getirandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIranData();
});
}


// Iraq Data 
function showIraqData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIraqData = document.getElementById("science_in_Iraq");
         if(showIraqData)
         {
            showIraqData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getiraqdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIraqData();
});
}



// Ireland Data 
function showIrelandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIrelandData = document.getElementById("science_in_Ireland");
         if(showIrelandData)
         {
            showIrelandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getirelanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIrelandData();
});
}


// Israel Data 
function showIsraelData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIsraelData = document.getElementById("science_in_Israel");
         if(showIsraelData)
         {
            showIsraelData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getisraeldata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showIsraelData();
});
}


// Italy Data 
function showItalyData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showItalyData = document.getElementById("science_in_Italy");
         if(showItalyData)
         {
            showItalyData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getitalydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showItalyData();
});
}



// Jamaica Data 
function showJamaicaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showJamaicaData = document.getElementById("science_in_Jamaica");
         if(showJamaicaData)
         {
            showJamaicaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getjamaicadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showJamaicaData();
});
}


// Japan Data 
function showJapanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showJapanData = document.getElementById("science_in_Japan");
         if(showJapanData)
         {
            showJapanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getjapandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showJapanData();
});
}


// Jordan Data 
function showJordanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showJordanData = document.getElementById("science_in_Jordan");
         if(showJordanData)
         {
            showJordanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getjordandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showJordanData();
});
}


// Kazakhstan Data 
function showKazakhstanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKazakhstanData = document.getElementById("science_in_Kazakhstan");
         if(showKazakhstanData)
         {
            showKazakhstanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkazakhstandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showKazakhstanData();
});
}


// Kenya Data 
function showKenyaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKenyaData = document.getElementById("science_in_Kenya");
         if(showKenyaData)
         {
            showKenyaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkenyadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showKenyaData();
});
}



// Kiribati Data 
function showKiribatiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKiribatiData = document.getElementById("science_in_Kiribati");
         if(showKiribatiData)
         {
            showKiribatiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkiribatidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showKiribatiData();
});
}


// North_Korea Data 
function showNorth_KoreaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNorth_KoreaData = document.getElementById("science_in_North_Korea");
         if(showNorth_KoreaData)
         {
            showNorth_KoreaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnorthkoreadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNorth_KoreaData();
});
}


// South_Korea Data 
function showSouth_KoreaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_KoreaData = document.getElementById("science_in_South_Korea");
         if(showSouth_KoreaData)
         {
            showSouth_KoreaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthkoreadata.php", true);
   xmlhttp.send();
}


if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSouth_KoreaData();
});
}


// Kuwait Data 
function showKuwaitData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKuwaitData = document.getElementById("science_in_Kuwait");
         if(showKuwaitData)
         {
            showKuwaitData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkuwaitdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showKuwaitData();
});
}


// Kyrgyzstan Data 
function showKyrgyzstanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKyrgyzstanData = document.getElementById("science_in_Kyrgyzstan");
         if(showKyrgyzstanData)
         {
            showKyrgyzstanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkyrgyzstandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showKyrgyzstanData();
});
}


// Laos Data 
function showLaosData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLaosData = document.getElementById("science_in_Laos");
         if(showLaosData)
         {
            showLaosData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlaosdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLaosData();
});
}


// Latvia Data 
function showLatviaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLatviaData = document.getElementById("science_in_Latvia");
         if(showLatviaData)
         {
            showLatviaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlatviadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLatviaData();
});
}

// Lebanon Data 
function showLebanonData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLebanonData = document.getElementById("science_in_Lebanon");
         if(showLebanonData)
         {
            showLebanonData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlebanondata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLebanonData();
});
}


// Lesotho Data 
function showLesothoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLesothoData = document.getElementById("science_in_Lesotho");
         if(showLesothoData)
         {
            showLesothoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlesothodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLesothoData();
});
}


// Liberia Data 
function showLiberiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLiberiaData = document.getElementById("science_in_Liberia");
         if(showLiberiaData)
         {
            showLiberiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getliberiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLiberiaData();
});
}


// Libya Data 
function showLibyaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLibyaData = document.getElementById("science_in_Libya");
         if(showLibyaData)
         {
            showLibyaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlibyadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLibyaData();
});
}


// Liechtenstein Data 
function showLiechtensteinData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLiechtensteinData = document.getElementById("science_in_Liechtenstein");
         if(showLiechtensteinData)
         {
            showLiechtensteinData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getliechtensteindata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLiechtensteinData();
});
}


// Lithuania Data 
function showLithuaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLithuaniaData = document.getElementById("science_in_Lithuania");
         if(showLithuaniaData)
         {
            showLithuaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlithuaniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLithuaniaData();
});
}


// Luxembourg Data 
function showLuxembourgData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLuxembourgData = document.getElementById("science_in_Luxembourg");
         if(showLuxembourgData)
         {
            showLuxembourgData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getluxembourgdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showLuxembourgData();
});
}


// Madagascar Data 
function showMadagascarData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMadagascarData = document.getElementById("science_in_Madagascar");
         if(showMadagascarData)
         {
            showMadagascarData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmadagascardata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMadagascarData();
});
}



// Malawi Data 
function showMalawiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMalawiData = document.getElementById("science_in_Malawi");
         if(showMalawiData)
         {
            showMalawiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmalawidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMalawiData();
});
}


// Malaysia Data 
function showMalaysiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMalaysiaData = document.getElementById("science_in_Malaysia");
         if(showMalaysiaData)
         {
            showMalaysiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmalaysiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMalaysiaData();
});
}


// Maldives Data 
function showMaldivesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMaldivesData = document.getElementById("science_in_Maldives");
         if(showMaldivesData)
         {
            showMaldivesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmaldivesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMaldivesData();
});
}


// Mali Data 
function showMaliData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMaliData = document.getElementById("science_in_Mali");
         if(showMaliData)
         {
            showMaliData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmalidata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMaliData();
});
}


// Malta Data 
function showMaltaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMaltaData = document.getElementById("science_in_Malta");
         if(showMaltaData)
         {
            showMaltaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmaltadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMaltaData();
});
}


// Marshall_Islands Data 
function showMarshall_IslandsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMarshall_IslandsData = document.getElementById("science_in_Marshall_Islands");
         if(showMarshall_IslandsData)
         {
            showMarshall_IslandsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmarshallislandsdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMarshall_IslandsData();
});
}


// Mauritania Data 
function showMauritaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMauritaniaData = document.getElementById("science_in_Mauritania");
         if(showMauritaniaData)
         {
            showMauritaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmauritaniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMauritaniaData();
});
}


// Mauritius Data 
function showMauritiusData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMauritiusData = document.getElementById("science_in_Mauritius");
         if(showMauritiusData)
         {
            showMauritiusData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmauritiusdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMauritiusData();
});
}


// Mexico Data 
function showMexicoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMexicoData = document.getElementById("science_in_Mexico");
         if(showMexicoData)
         {
            showMexicoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmexicodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMexicoData();
});
}


// Micronesia Data 
function showMicronesiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMicronesiaData = document.getElementById("science_in_Micronesia");
         if(showMicronesiaData)
         {
            showMicronesiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmicronesiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMicronesiaData();
});
}


// Moldova Data 
function showMoldovaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMoldovaData = document.getElementById("science_in_Moldova");
         if(showMoldovaData)
         {
            showMoldovaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmoldovadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMoldovaData();
});
}


// Monaco Data 
function showMonacoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMonacoData = document.getElementById("science_in_Monaco");
         if(showMonacoData)
         {
            showMonacoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmonacodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMonacoData();
});
}


// Mongolia Data 
function showMongoliaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMongoliaData = document.getElementById("science_in_Mongolia");
         if(showMongoliaData)
         {
            showMongoliaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmongoliadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMongoliaData();
});
}


// Montenegro Data 
function showMontenegroData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMontenegroData = document.getElementById("science_in_Montenegro");
         if(showMontenegroData)
         {
            showMontenegroData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmontenegrodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMontenegroData();
});
}


// Morocco Data 
function showMoroccoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMoroccoData = document.getElementById("science_in_Morocco");
         if(showMoroccoData)
         {
            showMoroccoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmoroccodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMoroccoData();
});
}


// Mozambique Data 
function showMozambiqueData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMozambiqueData = document.getElementById("science_in_Mozambique");
         if(showMozambiqueData)
         {
            showMozambiqueData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmozambiquedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showMozambiqueData();
});
}


// Namibia Data 
function showNamibiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNamibiaData = document.getElementById("science_in_Namibia");
         if(showNamibiaData)
         {
            showNamibiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnamibiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNamibiaData();
});
}


// Nauru Data 
function showNauruData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNauruData = document.getElementById("science_in_Nauru");
         if(showNauruData)
         {
            showNauruData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnaurudata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNauruData();
});
}


// Nepal Data 
function showNepalData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNepalData = document.getElementById("science_in_Nepal");
         if(showNepalData)
         {
            showNepalData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnepaldata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNepalData();
});
}



// Netherlands Data 
function showNetherlandsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNetherlandsData = document.getElementById("science_in_Netherlands");
         if(showNetherlandsData)
         {
            showNetherlandsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnetherlandsdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNetherlandsData();
});
}


// New_Zealand Data 
function showNew_ZealandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNew_ZealandData = document.getElementById("science_in_New_Zealand");
         if(showNew_ZealandData)
         {
            showNew_ZealandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnewzealanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNew_ZealandData();
});
}


// Nicaragua Data 
function showNicaraguaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNicaraguaData = document.getElementById("science_in_Nicaragua");
         if(showNicaraguaData)
         {
            showNicaraguaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnicaraguadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNicaraguaData();
});
}


// Niger Data 
function showNigerData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNigerData = document.getElementById("science_in_Niger");
         if(showNigerData)
         {
            showNigerData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnigerdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNigerData();
});
}


// Nigeria Data 
function showNigeriaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNigeriaData = document.getElementById("science_in_Nigeria");
         if(showNigeriaData)
         {
            showNigeriaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnigeriadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNigeriaData();
});
}


// North_Macedonia Data 
function showNorth_MacedoniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNorth_MacedoniaData = document.getElementById("science_in_North_Macedonia");
         if(showNorth_MacedoniaData)
         {
            showNorth_MacedoniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnorthmacedoniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNorth_MacedoniaData();
});
}


// Norway Data 
function showNorwayData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNorwayData = document.getElementById("science_in_Norway");
         if(showNorwayData)
         {
            showNorwayData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnorwaydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showNorwayData();
});
}


// Oman Data 
function showOmanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showOmanData = document.getElementById("science_in_Oman");
         if(showOmanData)
         {
            showOmanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getomandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showOmanData();
});
}



// Pakistan Data 
function showPakistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPakistanData = document.getElementById("science_in_Pakistan");
         if(showPakistanData)
         {
            showPakistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpakistandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPakistanData();
});
}


// Palau Data 
function showPalauData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPalauData = document.getElementById("science_in_Palau");
         if(showPalauData)
         {
            showPalauData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpalaudata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPalauData();
});
}


// Panama Data 
function showPanamaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPanamaData = document.getElementById("science_in_Panama");
         if(showPanamaData)
         {
            showPanamaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpanamadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPanamaData();
});
}


// Papua_New_Guinea Data 
function showPapua_New_GuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPapua_New_GuineaData = document.getElementById("science_in_Papua_New_Guinea");
         if(showPapua_New_GuineaData)
         {
            showPapua_New_GuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpapuanewguineadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPapua_New_GuineaData();
});
}


// Paraguay Data 
function showParaguayData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showParaguayData = document.getElementById("science_in_Paraguay");
         if(showParaguayData)
         {
            showParaguayData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getparaguaydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showParaguayData();
});
}


// Peru Data 
function showPeruData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPeruData = document.getElementById("science_in_Peru");
         if(showPeruData)
         {
            showPeruData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getperudata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPeruData();
});
}


// Philippines Data 
function showPhilippinesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPhilippinesData = document.getElementById("science_in_Philippines");
         if(showPhilippinesData)
         {
            showPhilippinesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getphilippinesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPhilippinesData();
});
}


// Poland Data 
function showPolandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPolandData = document.getElementById("science_in_Poland");
         if(showPolandData)
         {
            showPolandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpolanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPolandData();
});
}


// Portugal Data 
function showPortugalData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPortugalData = document.getElementById("science_in_Portugal");
         if(showPortugalData)
         {
            showPortugalData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getportugaldata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showPortugalData();
});
}


// Qatar Data 
function showQatarData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showQatarData = document.getElementById("science_in_Qatar");
         if(showQatarData)
         {
            showQatarData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getqatardata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showQatarData();
});
}


// Romania Data 
function showRomaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showRomaniaData = document.getElementById("science_in_Romania");
         if(showRomaniaData)
         {
            showRomaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getromaniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showRomaniaData();
});
}


// Russia Data 
function showRussiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showRussiaData = document.getElementById("science_in_Russia");
         if(showRussiaData)
         {
            showRussiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getrussiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showRussiaData();
});
}


// Rwanda Data 
function showRwandaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showRwandaData = document.getElementById("science_in_Rwanda");
         if(showRwandaData)
         {
            showRwandaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getrwandadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showRwandaData();
});
}


// Sao_Tome_and_Principe Data 
function showSao_Tome_and_PrincipeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSao_Tome_and_PrincipeData = document.getElementById("science_in_Sao_Tome_and_Principe");
         if(showSao_Tome_and_PrincipeData)
         {
            showSao_Tome_and_PrincipeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsaotomeandprincipedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSao_Tome_and_PrincipeData();
});
}


// Saudi_Arabia Data 
function showSaudi_ArabiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSaudi_ArabiaData = document.getElementById("science_in_Saudi_Arabia");
         if(showSaudi_ArabiaData)
         {
            showSaudi_ArabiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsaudiarabiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSaudi_ArabiaData();
});
}


// Senegal Data 
function showSenegalData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSenegalData = document.getElementById("science_in_Senegal");
         if(showSenegalData)
         {
            showSenegalData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsenegaldata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSenegalData();
});
}


// Serbia Data 
function showSerbiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSerbiaData = document.getElementById("science_in_Serbia");
         if(showSerbiaData)
         {
            showSerbiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getserbiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSerbiaData();
});
}


// Seychelles Data 
function showSeychellesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSeychellesData = document.getElementById("science_in_Seychelles");
         if(showSeychellesData)
         {
            showSeychellesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getseychellesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSeychellesData();
});
}


// Sierra_Leone Data 
function showSierra_LeoneData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSierra_LeoneData = document.getElementById("science_in_Sierra_Leone");
         if(showSierra_LeoneData)
         {
            showSierra_LeoneData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsierraleonedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSierra_LeoneData();
});
}


// Singapore Data 
function showSingaporeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSingaporeData = document.getElementById("science_in_Singapore");
         if(showSingaporeData)
         {
            showSingaporeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsingaporedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSingaporeData();
});
}


// Slovakia Data 
function showSlovakiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSlovakiaData = document.getElementById("science_in_Slovakia");
         if(showSlovakiaData)
         {
            showSlovakiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getslovakiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSlovakiaData();
});
}


// Slovenia Data 
function showSloveniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSloveniaData = document.getElementById("science_in_Slovenia");
         if(showSloveniaData)
         {
            showSloveniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsloveniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSloveniaData();
});
}


// Solomon_Islands Data 
function showSolomon_IslandsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSolomon_IslandsData = document.getElementById("science_in_Solomon_Islands");
         if(showSolomon_IslandsData)
         {
            showSolomon_IslandsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsolomonislandsdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSolomon_IslandsData();
});
}


// Somalia Data 
function showSomaliaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSomaliaData = document.getElementById("science_in_Somalia");
         if(showSomaliaData)
         {
            showSomaliaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsomaliadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSomaliaData();
});
}


// South_Africa Data 
function showSouth_AfricaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_AfricaData = document.getElementById("science_in_South_Africa");
         if(showSouth_AfricaData)
         {
            showSouth_AfricaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthafricadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSouth_AfricaData();
});
}


// South_Sudan Data 
function showSouth_SudanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_SudanData = document.getElementById("science_in_South_Sudan");
         if(showSouth_SudanData)
         {
            showSouth_SudanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthsudandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSouth_SudanData();
});
}


// Spain Data 
function showSpainData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSpainData = document.getElementById("science_in_Spain");
         if(showSpainData)
         {
            showSpainData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getspaindata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSpainData();
});
}


// Sri_Lanka Data 
function showSri_LankaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSri_LankaData = document.getElementById("science_in_Sri_Lanka");
         if(showSri_LankaData)
         {
            showSri_LankaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsrilankadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSri_LankaData();
});
}


// Sudan Data 
function showSudanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSudanData = document.getElementById("science_in_Sudan");
         if(showSudanData)
         {
            showSudanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsudandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSudanData();
});
}


// Suriname Data 
function showSurinameData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSurinameData = document.getElementById("science_in_Suriname");
         if(showSurinameData)
         {
            showSurinameData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsurinamedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSurinameData();
});
}


// Sweden Data 
function showSwedenData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSwedenData = document.getElementById("science_in_Sweden");
         if(showSwedenData)
         {
            showSwedenData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getswedendata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSwedenData();
});
}



// Switzerland Data 
function showSwitzerlandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSwitzerlandData = document.getElementById("science_in_Switzerland");
         if(showSwitzerlandData)
         {
            showSwitzerlandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getswitzerlanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showSwitzerlandData();
});
}


// Tajikistan Data 
function showTajikistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTajikistanData = document.getElementById("science_in_Tajikistan");
         if(showTajikistanData)
         {
            showTajikistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettajikistandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTajikistanData();
});
}


// Tanzania Data 
function showTanzaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTanzaniaData = document.getElementById("science_in_Tanzania");
         if(showTanzaniaData)
         {
            showTanzaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettanzaniadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTanzaniaData();
});
}


// Thailand Data 
function showThailandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showThailandData = document.getElementById("science_in_Thailand");
         if(showThailandData)
         {
            showThailandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getthailanddata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showThailandData();
});
}


// Togo Data 
function showTogoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTogoData = document.getElementById("science_in_Togo");
         if(showTogoData)
         {
            showTogoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettogodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTogoData();
});
}


// Tonga Data 
function showTongaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTongaData = document.getElementById("science_in_Tonga");
         if(showTongaData)
         {
            showTongaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettongadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTongaData();
});
}


// Trinidad_and_Tobago Data 
function showTrinidad_and_TobagoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTrinidad_and_TobagoData = document.getElementById("science_in_Trinidad_and_Tobago");
         if(showTrinidad_and_TobagoData)
         {
            showTrinidad_and_TobagoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettrinidadandtobagodata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTrinidad_and_TobagoData();
});
}


// Tunisia Data 
function showTunisiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTunisiaData = document.getElementById("science_in_Tunisia");
         if(showTunisiaData)
         {
            showTunisiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettunisiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTunisiaData();
});
}


// Turkey Data 
function showTurkeyData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTurkeyData = document.getElementById("science_in_Turkey");
         if(showTurkeyData)
         {
            showTurkeyData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getturkeydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTurkeyData();
});
}


// Turkmenistan Data 
function showTurkmenistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTurkmenistanData = document.getElementById("science_in_Turkmenistan");
         if(showTurkmenistanData)
         {
            showTurkmenistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getturkmenistandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTurkmenistanData();
});
}


// Tuvalu Data 
function showTuvaluData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTuvaluData = document.getElementById("science_in_Tuvalu");
         if(showTuvaluData)
         {
            showTuvaluData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettuvaludata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showTuvaluData();
});
}


// Uganda Data 
function showUgandaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUgandaData = document.getElementById("science_in_Uganda");
         if(showUgandaData)
         {
            showUgandaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getugandadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUgandaData();
});
}


// Ukraine Data 
function showUkraineData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUkraineData = document.getElementById("science_in_Ukraine");
         if(showUkraineData)
         {
            showUkraineData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getukrainedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUkraineData();
});
}


// United_Arab_Emirates Data 
function showUnited_Arab_EmiratesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUnited_Arab_EmiratesData = document.getElementById("science_in_United_Arab_Emirates");
         if(showUnited_Arab_EmiratesData)
         {
            showUnited_Arab_EmiratesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getunitedarabemiratesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUnited_Arab_EmiratesData();
});
}


// United_Kingdom Data 
function showUnited_KingdomData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUnited_KingdomData = document.getElementById("science_in_United_Kingdom");
         if(showUnited_KingdomData)
         {
            showUnited_KingdomData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getunitedkingdomdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUnited_KingdomData();
});
}


// United_States Data 
function showUnited_StatesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUnited_StatesData = document.getElementById("science_in_United_States");
         if(showUnited_StatesData)
         {
            showUnited_StatesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getunitedstatesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUnited_StatesData();
});
}


// Uruguay Data 
function showUruguayData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUruguayData = document.getElementById("science_in_Uruguay");
         if(showUruguayData)
         {
            showUruguayData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "geturuguaydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUruguayData();
});
}


// Uzbekistan Data 
function showUzbekistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUzbekistanData = document.getElementById("science_in_Uzbekistan");
         if(showUzbekistanData)
         {
            showUzbekistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getuzbekistandata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showUzbekistanData();
});
}


// Vanuatu Data 
function showVanuatuData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showVanuatuData = document.getElementById("science_in_Vanuatu");
         if(showVanuatuData)
         {
            showVanuatuData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getvanuatudata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showVanuatuData();
});
}


// Vatican_City Data 
function showVatican_CityData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showVatican_CityData = document.getElementById("science_in_Vatican_City");
         if(showVatican_CityData)
         {
            showVatican_CityData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getvaticancitydata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showVatican_CityData();
});
}


// Venezuela Data 
function showVenezuelaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showVenezuelaData = document.getElementById("science_in_Venezuela");
         if(showVenezuelaData)
         {
            showVenezuelaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getvenezueladata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showVenezuelaData();
});
}


// Vietnam Data 
function showVietnamData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showVietnamData = document.getElementById("science_in_Vietnam");
         if(showVietnamData)
         {
            showVietnamData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getvietnamdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showVietnamData();
});
}


// Wales Data 
function showWalesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showWalesData = document.getElementById("science_in_Wales");
         if(showWalesData)
         {
            showWalesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getwalesdata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showWalesData();
});
}


// Yemen Data 
function showYemenData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showYemenData = document.getElementById("science_in_Yemen");
         if(showYemenData)
         {
            showYemenData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getyemendata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showYemenData();
});
}


// Zambia Data 
function showZambiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showZambiaData = document.getElementById("science_in_Zambia");
         if(showZambiaData)
         {
            showZambiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getzambiadata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showZambiaData();
});
}


// Zimbabwe Data 
function showZimbabweData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showZimbabweData = document.getElementById("science_in_Zimbabwe");
         if(showZimbabweData)
         {
            showZimbabweData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getzimbabwedata.php", true);
   xmlhttp.send();
}

if(window.location.pathname.includes("world.php"))
{
   document.addEventListener("DOMContentLoaded", function() {
   showZimbabweData();
});
}

