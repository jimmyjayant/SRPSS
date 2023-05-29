// home.php javascript 
function CreateData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "createdata.php", true);
    xmlhttp.send();
    }

CreateData();


// researchsites.php javascript
function showResearchSitesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("researchsites").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getresearchsitedata.php", true);
    xmlhttp.send();
  }

showResearchSitesData();


// view.php javascript
function viewPapers() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("viewpapers").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getpapersdata.php", true);
    xmlhttp.send();
  }

viewPapers();


// magazines.php javascript
function showMagazinesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("magazines").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getmagazinedata.php", true);
    xmlhttp.send();
  }

  showMagazinesData();

  function showJournalsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("journals").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getjournaldata.php", true);
    xmlhttp.send();
  }

  showJournalsData();


// newspapers.php javascript
function showNewspapersData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("newspapers").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getnewspaperdata.php", true);
    xmlhttp.send();
  }

  showNewspapersData();


// conferences.php javascript
function showConferencesData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("conferences").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getconferencedata.php", true);
    xmlhttp.send();
  }

  showConferencesData();


// channel.php javascript
function showYouTubeChannelsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("ytchannels").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getytchanneldata.php", true);
    xmlhttp.send();
  }

showYouTubeChannelsData();



// scientist.php javascript
function showScientistsData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("scientists").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET", "getscientistdata.php", true);
    xmlhttp.send();
  }

showScientistsData();



// movies.php javascript
function showMoviesData() {
    var xmlhttp1 = new XMLHttpRequest();
    xmlhttp1.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("movies").innerHTML = this.responseText;
       }
    };
    xmlhttp1.open("GET", "getmoviedata.php", true);
    xmlhttp1.send();
  }

showMoviesData();

  function showWebSeriesData() {
    var xmlhttp2 = new XMLHttpRequest();
    xmlhttp2.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
          document.getElementById("webseries").innerHTML = this.responseText;
       }
    };
    xmlhttp2.open("GET", "getwebseriesdata.php", true);
    xmlhttp2.send();
  }

showWebSeriesData();





