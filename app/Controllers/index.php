<?php

define('BASE_URL', '/Projects/SRPSS/Website/public/');
define('BASE_DIR', '/Projects/SRPSS/Website');

//$request = $_SERVER['REQUEST_URI'];
//echo "request uri is:- " . $request . "<br>";

// Grab the 'url' from .htaccess (e.g., "register")
// If it's empty (the homepage), default to 'index'
/*
if(isset($_GET['url']))
{
    echo "get url is :-" . $_GET['url'];
}
else
{
    echo "url is undefined<br>";
}
    */
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'index';
//echo "<br>" . $url . "<br>";

// Break the URL into parts (useful for later when you add Controller/Method)
$url_parts = explode('/', $url);
//print_r($url_parts);
$page = $url_parts[0];
//echo "<br>" . $page;

switch($page)
{
    case 'index':
    case '':
    case 'home':
        require '../app/Views/index.php';
        break;

    case 'register':
        require '../app/Views/register.php';
        break;

    case 'login':
        require '../app/Views/login.php';
        break;

    case 'logout':
        require '../app/Views/logout.php';
        break;
    
    case 'researchsites':
        require '../app/Views/researchsites.php';
        break;

    case 'view':
        require '../app/Views/view.php';
        break;

    case 'magazines':
        require '../app/Views/magazines.php';
        break;

    case 'newspapers':
        require '../app/Views/newspapers.php';
        break;
    
    case 'conferences':
        require '../app/Views/conferences.php';
        break;

    case 'channel':
        require '../app/Views/channel.php';
        break;

    case 'scientist':
        require '../app/Views/scientist.php';
        break;

    case 'movies':
        require '../app/Views/movies.php';
        break;

    case 'awards':
        require '../app/Views/awards.php';
        break;

    case 'observatories':
        require '../app/Views/observatories.php';
        break;

    case 'scienceexhibition':
        require '../app/Views/scienceexhibition.php';
        break;

    case 'sciencefair':
        require '../app/Views/sciencefair.php';
        break;

    case 'astronomy':
        require '../app/Views/astronomy.php';
        break;

    case 'starparty':
        require '../app/Views/starparty.php';
        break;

    case 'world':
        require '../app/Views/world.php';
        break;

    case 'feedback':
        require '../app/Views/feedback.php';
        break;

    case 'sitemap':
        require '../app/Views/sitemap.php';
        break;

    case 'telescopemaking':
        require '../app/Views/telescopemaking.php';
        break;

    case 'astrophotography':
        require '../app/Views/astrophotography.php';
        break;

    case 'culture':
        require '../app/Views/culture.php';
        break;

    case 'chat':
        require '../app/Views/chat.php';
        break;

    case 'submit':
        require '../app/Views/submit.php';
        break;

    case 'admin':
        require '../app/Views/admin.php';
        break;

    case 'dashboard':
        require '../app/Views/dashboard.php';
        break;

    case 'getresearchsitedata':
        require '../app/Models/getresearchsitedata.php';
        break;

    case 'getpapersdata':
        require '../app/Models/getpapersdata.php';
        break;

    case 'getpapersdataforadmin':
        require '../app/Models/getpapersdataforadmin.php';
        break;

    case 'getmagazinedata':
        require '../app/Models/getmagazinedata.php';
        break;

    case 'getjournaldata':
        require '../app/Models/getjournaldata.php';
        break;

    case 'getnewspaperdata':
        require '../app/Models/getnewspaperdata.php';
        break;

    case 'getconferencedata':
        require '../app/Models/getconferencedata.php';
        break;

    case 'getytchanneldata':
        require '../app/Models/getytchanneldata.php';
        break;

    case 'getscientistdata':
        require '../app/Models/getscientistdata.php';
        break;

    case 'getmoviedata':
        require '../app/Models/getmoviedata.php';
        break;

    case 'getwebseriesdata':
        require '../app/Models/getwebseriesdata.php';
        break;

    case 'getawards':
        require '../app/Models/getawards.php';
        break;

    case 'getobservatories':
        require '../app/Models/getobservatories.php';
        break;

    case 'gettelescopeworkshop':
        require '../app/Models/gettelescopeworkshop.php';
        break;

    case 'getfeedbackdata':
        require '../app/Models/getfeedbackdata.php';
        break;

    case 'showallregusers':
        require '../app/Models/showallregusers.php';
        break;

    case 'getusernotifications':
        require '../app/Models/getusernotifications.php';
        break;

    case 'getsubmittedpapersdata':
        require '../app/Models/getsubmittedpapersdata.php';
        break;

    case 'getsubmittedfeedbackdata':
        require '../app/Models/getsubmittedfeedbackdata.php';
        break;

    case 'checklogin':
        require '../app/Models/checklogin.php';
        break;

    case 'getafghanistandata':
        require '../app/Models/getafghanistandata.php';
        break;

    case 'getalbaniadata':
        require '../app/Models/getalbaniadata.php';
        break;

    case 'getalgeriadata':
        require '../app/Models/getalgeriadata.php';
        break;

    case 'getandorradata':
        require '../app/Models/getandorradata.php';
        break;

    case 'getangoladata':
        require '../app/Models/getangoladata.php';
        break;

    case 'getantiguaandbarbudadata':
        require '../app/Models/getantiguaandbarbudadata.php';
        break;

    case 'getargentinadata':
        require '../app/Models/getargentinadata.php';
        break;

    case 'getarmeniadata':
        require '../app/Models/getarmeniadata.php';
        break;

    case 'getaustraliadata':
        require '../app/Models/getaustraliadata.php';
        break;

    case 'getaustriadata':
        require '../app/Models/getaustriadata.php';
        break;

    case 'getazerbaijandata':
        require '../app/Models/getazerbaijandata.php';
        break;

    case 'getbahamasdata':
        require '../app/Models/getbahamasdata.php';
        break;

    case 'getbahraindata':
        require '../app/Models/getbahraindata.php';
        break;

    case 'getbangladeshdata':
        require '../app/Models/getbangladeshdata.php';
        break;

    case 'getbarbadosdata':
        require '../app/Models/getbarbadosdata.php';
        break;

    case 'getbelarusdata':
        require '../app/Models/getbelarusdata.php';
        break;

    case 'getbelgiumdata':
        require '../app/Models/getbelgiumdata.php';
        break;

    case 'getbelizedata':
        require '../app/Models/getbelizedata.php';
        break;

    case 'getbenindata':
        require '../app/Models/getbenindata.php';
        break;

    case 'getbhutandata':
        require '../app/Models/getbhutandata.php';
        break;

    case 'getboliviadata':
        require '../app/Models/getboliviadata.php';
        break;

    case 'getbosniaandherzegovinadata':
        require '../app/Models/getbosniaandherzegovinadata.php';
        break;

    case 'getbotswanadata':
        require '../app/Models/getbotswanadata.php';
        break;

    case 'getbrazildata':
        require '../app/Models/getbrazildata.php';
        break;

    case 'getbruneidata':
        require '../app/Models/getbruneidata.php';
        break;

    case 'getbulgariadata':
        require '../app/Models/getbulgariadata.php';
        break;

    case 'getburkinafasodata':
        require '../app/Models/getburkinafasodata.php';
        break;

    case 'getburundidata':
        require '../app/Models/getburundidata.php';
        break;

    case 'getcaboverdedata':
        require '../app/Models/getcaboverdedata.php';
        break;

    case 'getcambodiadata':
        require '../app/Models/getcambodiadata.php';
        break;

    case 'getcameroondata':
        require '../app/Models/getcameroondata.php';
        break;

    case 'getcanadadata':
        require '../app/Models/getcanadadata.php';
        break;

    case 'getcentralafricanrepublicdata':
        require '../app/Models/getcentralafricanrepublicdata.php';
        break;

    case 'getchaddata':
        require '../app/Models/getchaddata.php';
        break;

    case 'getchiledata':
        require '../app/Models/getchiledata.php';
        break;

    case 'getchinadata':
        require '../app/Models/getchinadata.php';
        break;

    case 'getcolombiadata':
        require '../app/Models/getcolombiadata.php';
        break;

    case 'getcomorosdata':
        require '../app/Models/getcomorosdata.php';
        break;

    case 'getcongo(congo-brazzaville)data':
        require '../app/Models/getcongo(congo-brazzaville)data.php';
        break;

    case 'getcongo_democraticrepublicofthecongokinshasadata':
        require '../app/Models/getcongo_democraticrepublicofthecongokinshasadata.php';
        break;

    case 'getcostaricadata':
        require '../app/Models/getcostaricadata.php';
        break;

    case 'getcroatiadata':
        require '../app/Models/getcroatiadata.php';
        break;

    case 'getcubadata':
        require '../app/Models/getcubadata.php';
        break;

    case 'getcyprusdata':
        require '../app/Models/getcyprusdata.php';
        break;

    case 'getczechiadata':
        require '../app/Models/getczechiadata.php';
        break;

    case 'getdenmarkdata':
        require '../app/Models/getdenmarkdata.php';
        break;

    case 'getdjiboutidata':
        require '../app/Models/getdjiboutidata.php';
        break;

    case 'getdominicadata':
        require '../app/Models/getdominicadata.php';
        break;

    case 'getdominicanrepublicdata':
        require '../app/Models/getdominicanrepublicdata.php';
        break;

    case 'getecuadordata':
        require '../app/Models/getecuadordata.php';
        break;

    case 'getegyptdata':
        require '../app/Models/getegyptdata.php';
        break;

    case 'getelsalvadordata':
        require '../app/Models/getelsalvadordata.php';
        break;

    case 'getequatorialguineadata':
        require '../app/Models/getequatorialguineadata.php';
        break;

    case 'geteritreadata':
        require '../app/Models/geteritreadata.php';
        break;

    case 'getestoniadata':
        require '../app/Models/getestoniadata.php';
        break;

    case 'geteswatinidata':
        require '../app/Models/geteswatinidata.php';
        break;

    case 'getethiopiadata':
        require '../app/Models/getethiopiadata.php';
        break;

    case 'getfijidata':
        require '../app/Models/getfijidata.php';
        break;

    case 'getfinlanddata':
        require '../app/Models/getfinlanddata.php';
        break;

    case 'getfrancedata':
        require '../app/Models/getfrancedata.php';
        break;

    case 'getgabondata':
        require '../app/Models/getgabondata.php';
        break;

    case 'getgambiadata':
        require '../app/Models/getgambiadata.php';
        break;

    case 'getgeorgiadata':
        require '../app/Models/getgeorgiadata.php';
        break;

    case 'getgermanydata':
        require '../app/Models/getgermanydata.php';
        break;

    case 'getghanadata':
        require '../app/Models/getghanadata.php';
        break;

    case 'getgreecedata':
        require '../app/Models/getgreecedata.php';
        break;

    case 'getgrenadadata':
        require '../app/Models/getgrenadadata.php';
        break;

    case 'getguatemaladata':
        require '../app/Models/getguatemaladata.php';
        break;

    case 'getguineadata':
        require '../app/Models/getguineadata.php';
        break;

    case 'getguinea-bissaudata':
        require '../app/Models/getguinea-bissaudata.php';
        break;

    case 'getguyanadata':
        require '../app/Models/getguyanadata.php';
        break;

    case 'gethaitidata':
        require '../app/Models/gethaitidata.php';
        break;

    case 'gethondurasdata':
        require '../app/Models/gethondurasdata.php';
        break;

    case 'gethungarydata':
        require '../app/Models/gethungarydata.php';
        break;

    case 'geticelanddata':
        require '../app/Models/geticelanddata.php';
        break;

    case 'getindiadata':
        require '../app/Models/getindiadata.php';
        break;

    case 'getindonesiadata':
        require '../app/Models/getindonesiadata.php';
        break;

    case 'getirandata':
        require '../app/Models/getirandata.php';
        break;

    case 'getiraqdata':
        require '../app/Models/getiraqdata.php';
        break;

    case 'getirelanddata':
        require '../app/Models/getirelanddata.php';
        break;

    case 'getisraeldata':
        require '../app/Models/getisraeldata.php';
        break;

    case 'getitalydata':
        require '../app/Models/getitalydata.php';
        break;

    case 'getjamaicadata':
        require '../app/Models/getjamaicadata.php';
        break;

    case 'getjapandata':
        require '../app/Models/getjapandata.php';
        break;

    case 'getjordandata':
        require '../app/Models/getjordandata.php';
        break;

    case 'getkazakhstandata':
        require '../app/Models/getkazakhstandata.php';
        break;

    case 'getkenyadata':
        require '../app/Models/getkenyadata.php';
        break;

    case 'getkiribatidata':
        require '../app/Models/getkiribatidata.php';
        break;

    case 'getnorthkoreadata':
        require '../app/Models/getnorthkoreadata.php';
        break;

    case 'getsouthkoreadata':
        require '../app/Models/getsouthkoreadata.php';
        break;

    case 'getkuwaitdata':
        require '../app/Models/getkuwaitdata.php';
        break;

    case 'getkyrgyzstandata':
        require '../app/Models/getkyrgyzstandata.php';
        break;

    case 'getlaosdata':
        require '../app/Models/getlaosdata.php';
        break;

    case 'getlatviadata':
        require '../app/Models/getlatviadata.php';
        break;

    case 'getlebanondata':
        require '../app/Models/getlebanondata.php';
        break;

    case 'getlesothodata':
        require '../app/Models/getlesothodata.php';
        break;

    case 'getliberiadata':
        require '../app/Models/getliberiadata.php';
        break;

    case 'getlibyadata':
        require '../app/Models/getlibyadata.php';
        break;

    case 'getliechtensteindata':
        require '../app/Models/getliechtensteindata.php';
        break;

    case 'getlithuaniadata':
        require '../app/Models/getlithuaniadata.php';
        break;

    case 'getluxembourgdata':
        require '../app/Models/getluxembourgdata.php';
        break;

    case 'getmadagascardata':
        require '../app/Models/getmadagascardata.php';
        break;

    case 'getmalawidata':
        require '../app/Models/getmalawidata.php';
        break;

    case 'getmalaysiadata':
        require '../app/Models/getmalaysiadata.php';
        break;

    case 'getmaldivesdata':
        require '../app/Models/getmaldivesdata.php';
        break;

    case 'getmalidata':
        require '../app/Models/getmalidata.php';
        break;

    case 'getmaltadata':
        require '../app/Models/getmaltadata.php';
        break;

    case 'getmarshallislandsdata':
        require '../app/Models/getmarshallislandsdata.php';
        break;

    case 'getmauritaniadata':
        require '../app/Models/getmauritaniadata.php';
        break;

    case 'getmauritiusdata':
        require '../app/Models/getmauritiusdata.php';
        break;

    case 'getmexicodata':
        require '../app/Models/getmexicodata.php';
        break;

    case 'getmicronesiadata':
        require '../app/Models/getmicronesiadata.php';
        break;

    case 'getmoldovadata':
        require '../app/Models/getmoldovadata.php';
        break;

    case 'getmonacodata':
        require '../app/Models/getmonacodata.php';
        break;

    case 'getmongoliadata':
        require '../app/Models/getmongoliadata.php';
        break;

    case 'getmontenegrodata':
        require '../app/Models/getmontenegrodata.php';
        break;

    case 'getmoroccodata':
        require '../app/Models/getmoroccodata.php';
        break;

    case 'getmozambiquedata':
        require '../app/Models/getmozambiquedata.php';
        break;

    case 'getnamibiadata':
        require '../app/Models/getnamibiadata.php';
        break;

    case 'getnaurudata':
        require '../app/Models/getnaurudata.php';
        break;

    case 'getnepaldata':
        require '../app/Models/getnepaldata.php';
        break;

    case 'getnetherlandsdata':
        require '../app/Models/getnetherlandsdata.php';
        break;

    case 'getnewzealanddata':
        require '../app/Models/getnewzealanddata.php';
        break;

    case 'getnicaraguadata':
        require '../app/Models/getnicaraguadata.php';
        break;

    case 'getnigerdata':
        require '../app/Models/getnigerdata.php';
        break;

    case 'getnigeriadata':
        require '../app/Models/getnigeriadata.php';
        break;

    case 'getnorthmacedoniadata':
        require '../app/Models/getnorthmacedoniadata.php';
        break;

    case 'getnorwaydata':
        require '../app/Models/getnorwaydata.php';
        break;

    case 'getomandata':
        require '../app/Models/getomandata.php';
        break;

    case 'getpakistandata':
        require '../app/Models/getpakistandata.php';
        break;

    case 'getpalaudata':
        require '../app/Models/getpalaudata.php';
        break;

    case 'getpanamadata':
        require '../app/Models/getpanamadata.php';
        break;

    case 'getpapuanewguineadata':
        require '../app/Models/getpapuanewguineadata.php';
        break;

    case 'getparaguaydata':
        require '../app/Models/getparaguaydata.php';
        break;

    case 'getperudata':
        require '../app/Models/getperudata.php';
        break;

    case 'getphilippinesdata':
        require '../app/Models/getphilippinesdata.php';
        break;

    case 'getpolanddata':
        require '../app/Models/getpolanddata.php';
        break;

    case 'getportugaldata':
        require '../app/Models/getportugaldata.php';
        break;

    case 'getqatardata':
        require '../app/Models/getqatardata.php';
        break;

    case 'getromaniadata':
        require '../app/Models/getromaniadata.php';
        break;

    case 'getrussiadata':
        require '../app/Models/getrussiadata.php';
        break;

    case 'getrwandadata':
        require '../app/Models/getrwandadata.php';
        break;

    case 'getsaotomeandprincipedata':
        require '../app/Models/getsaotomeandprincipedata.php';
        break;

    case 'getsaudiarabiadata':
        require '../app/Models/getsaudiarabiadata.php';
        break;

    case 'getsenegaldata':
        require '../app/Models/getsenegaldata.php';
        break;

    case 'getserbiadata':
        require '../app/Models/getserbiadata.php';
        break;

    case 'getseychellesdata':
        require '../app/Models/getseychellesdata.php';
        break;

    case 'getsierraleonedata':
        require '../app/Models/getsierraleonedata.php';
        break;

    case 'getsingaporedata':
        require '../app/Models/getsingaporedata.php';
        break;

    case 'getslovakiadata':
        require '../app/Models/getslovakiadata.php';
        break;

    case 'getsloveniadata':
        require '../app/Models/getsloveniadata.php';
        break;

    case 'getsolomonislandsdata':
        require '../app/Models/getsolomonislandsdata.php';
        break;

    case 'getsomaliadata':
        require '../app/Models/getsomaliadata.php';
        break;

    case 'getsouthafricadata':
        require '../app/Models/getsouthafricadata.php';
        break;

    case 'getsouthsudandata':
        require '../app/Models/getsouthsudandata.php';
        break;

    case 'getspaindata':
        require '../app/Models/getspaindata.php';
        break;

    case 'getsrilankadata':
        require '../app/Models/getsrilankadata.php';
        break;

    case 'getsudandata':
        require '../app/Models/getsudandata.php';
        break;

    case 'getsurinamedata':
        require '../app/Models/getsurinamedata.php';
        break;

    case 'getswedendata':
        require '../app/Models/getswedendata.php';
        break;

    case 'getswitzerlanddata':
        require '../app/Models/getswitzerlanddata.php';
        break;

    case 'gettajikistandata':
        require '../app/Models/gettajikistandata.php';
        break;

    case 'gettanzaniadata':
        require '../app/Models/gettanzaniadata.php';
        break;

    case 'getthailanddata':
        require '../app/Models/getthailanddata.php';
        break;

    case 'gettogodata':
        require '../app/Models/gettogodata.php';
        break;

    case 'gettongadata':
        require '../app/Models/gettongadata.php';
        break;

    case 'gettrinidadandtobagodata':
        require '../app/Models/gettrinidadandtobagodata.php';
        break;

    case 'gettunisiadata':
        require '../app/Models/gettunisiadata.php';
        break;

    case 'getturkeydata':
        require '../app/Models/getturkeydata.php';
        break;

    case 'getturkmenistandata':
        require '../app/Models/getturkmenistandata.php';
        break;

    case 'gettuvaludata':
        require '../app/Models/gettuvaludata.php';
        break;

    case 'getugandadata':
        require '../app/Models/getugandadata.php';
        break;

    case 'getukrainedata':
        require '../app/Models/getukrainedata.php';
        break;

    case 'getunitedarabemiratesdata':
        require '../app/Models/getunitedarabemiratesdata.php';
        break;

    case 'getunitedkingdomdata':
        require '../app/Models/getunitedkingdomdata.php';
        break;

    case 'getunitedstatesdata':
        require '../app/Models/getunitedstatesdata.php';
        break;

    case 'geturuguaydata':
        require '../app/Models/geturuguaydata.php';
        break;

    case 'getuzbekistandata':
        require '../app/Models/getuzbekistandata.php';
        break;

    case 'getvanuatudata':
        require '../app/Models/getvanuatudata.php';
        break;

    case 'getvaticancitydata':
        require '../app/Models/getvaticancitydata.php';
        break;

    case 'getvenezueladata':
        require '../app/Models/getvenezueladata.php';
        break;

    case 'getvietnamdata':
        require '../app/Models/getvietnamdata.php';
        break;

    case 'getwalesdata':
        require '../app/Models/getwalesdata.php';
        break;

    case 'getyemendata':
        require '../app/Models/getyemendata.php';
        break;

    case 'getzambiadata':
        require '../app/Models/getzambiadata.php';
        break;

    case 'getzimbabwedata':
        require '../app/Models/getzimbabwedata.php';
        break;
}
?>
