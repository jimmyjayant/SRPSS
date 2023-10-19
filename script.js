document.addEventListener("DOMContentLoaded", function() {
   const x = document.getElementsByClassName("navbar")[0];
   const y = x.getElementsByTagName("a");
   const activePage = window.location.pathname;
   
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

//showWebSeriesData();





