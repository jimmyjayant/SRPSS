document.addEventListener("DOMContentLoaded", function() {
   const x = document.getElementsByClassName("navbar")[0];
   const y = x.getElementsByTagName("a");
   
   Array.from(y).forEach(link => {
       if (window.location.href == link.href) {
         link.classList.add('active');
         }
   });
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

  document.addEventListener("DOMContentLoaded", function() {
   showResearchSitesData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   viewPapers();
});


//viewpapersadmin  javascript
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

 document.addEventListener("DOMContentLoaded", function() {
  viewPapersAdmin();
});




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

  document.addEventListener("DOMContentLoaded", function() {
   showMagazinesData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showJournalsData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showNewspapersData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showConferencesData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showYouTubeChannelsData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showScientistsData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showMoviesData();
});

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

  document.addEventListener("DOMContentLoaded", function() {
   showWebSeriesData();
});

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

document.addEventListener("DOMContentLoaded", function() {
   showFeedbackData();
});

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
}

function adminnavbar11() {
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
   class11[0].style.display="block";
}

function adminnavbar12() {
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
   class12[0].style.display="block";
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

document.addEventListener("DOMContentLoaded", function() {
   showAllRegUsersData();
});

// dashboard.php
var class12 = document.getElementsByClassName("class12");
var class13 = document.getElementsByClassName("class13");
var class14 = document.getElementsByClassName("class14");

function usernavbar1()
{
   class12[0].style.display="block";
   class13[0].style.display="none";
   class14[0].style.display="none";
}

function usernavbar2()
{
   class12[0].style.display="none";
   class13[0].style.display="block";
   class14[0].style.display="none";
}

function usernavbar3()
{
   class12[0].style.display="none";
   class13[0].style.display="none";
   class14[0].style.display="block";
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

document.addEventListener("DOMContentLoaded", function() {
   showUserNotificationsData();
});

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

document.addEventListener("DOMContentLoaded", function() {
   showSubmittedResearchPapersData();
});

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

document.addEventListener("DOMContentLoaded", function() {
   showSubmittedFeedbackData();
});








