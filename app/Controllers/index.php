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

    case 'changepassword':
        require '../app/Views/changepassword.php';
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

    case 'getchatmsg':
        require '../app/Models/getchatmsg.php';
        break;

    case 'savechat':
        require '../app/Models/savechat.php';
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
        require '../app/Models/world/getafghanistandata.php';
        break;

    case 'getalbaniadata':
        require '../app/Models/world/getalbaniadata.php';
        break;

    case 'getalgeriadata':
        require '../app/Models/world/getalgeriadata.php';
        break;

    case 'getandorradata':
        require '../app/Models/world/getandorradata.php';
        break;

    case 'getangoladata':
        require '../app/Models/world/getangoladata.php';
        break;

    case 'getantiguaandbarbudadata':
        require '../app/Models/world/getantiguaandbarbudadata.php';
        break;

    case 'getargentinadata':
        require '../app/Models/world/getargentinadata.php';
        break;

    case 'getarmeniadata':
        require '../app/Models/world/getarmeniadata.php';
        break;

    case 'getaustraliadata':
        require '../app/Models/world/getaustraliadata.php';
        break;

    case 'getaustriadata':
        require '../app/Models/world/getaustriadata.php';
        break;

    case 'getazerbaijandata':
        require '../app/Models/world/getazerbaijandata.php';
        break;

    case 'getbahamasdata':
        require '../app/Models/world/getbahamasdata.php';
        break;

    case 'getbahraindata':
        require '../app/Models/world/getbahraindata.php';
        break;

    case 'getbangladeshdata':
        require '../app/Models/world/getbangladeshdata.php';
        break;

    case 'getbarbadosdata':
        require '../app/Models/world/getbarbadosdata.php';
        break;

    case 'getbelarusdata':
        require '../app/Models/world/getbelarusdata.php';
        break;

    case 'getbelgiumdata':
        require '../app/Models/world/getbelgiumdata.php';
        break;

    case 'getbelizedata':
        require '../app/Models/world/getbelizedata.php';
        break;

    case 'getbenindata':
        require '../app/Models/world/getbenindata.php';
        break;

    case 'getbhutandata':
        require '../app/Models/world/getbhutandata.php';
        break;

    case 'getboliviadata':
        require '../app/Models/world/getboliviadata.php';
        break;

    case 'getbosniaandherzegovinadata':
        require '../app/Models/world/getbosniaandherzegovinadata.php';
        break;

    case 'getbotswanadata':
        require '../app/Models/world/getbotswanadata.php';
        break;

    case 'getbrazildata':
        require '../app/Models/world/getbrazildata.php';
        break;

    case 'getbruneidata':
        require '../app/Models/world/getbruneidata.php';
        break;

    case 'getbulgariadata':
        require '../app/Models/world/getbulgariadata.php';
        break;

    case 'getburkinafasodata':
        require '../app/Models/world/getburkinafasodata.php';
        break;

    case 'getburundidata':
        require '../app/Models/world/getburundidata.php';
        break;

    case 'getcaboverdedata':
        require '../app/Models/world/getcaboverdedata.php';
        break;

    case 'getcambodiadata':
        require '../app/Models/world/getcambodiadata.php';
        break;

    case 'getcameroondata':
        require '../app/Models/world/getcameroondata.php';
        break;

    case 'getcanadadata':
        require '../app/Models/world/getcanadadata.php';
        break;

    case 'getcentralafricanrepublicdata':
        require '../app/Models/world/getcentralafricanrepublicdata.php';
        break;

    case 'getchaddata':
        require '../app/Models/world/getchaddata.php';
        break;

    case 'getchiledata':
        require '../app/Models/world/getchiledata.php';
        break;

    case 'getchinadata':
        require '../app/Models/world/getchinadata.php';
        break;

    case 'getcolombiadata':
        require '../app/Models/world/getcolombiadata.php';
        break;

    case 'getcomorosdata':
        require '../app/Models/world/getcomorosdata.php';
        break;

    case 'getcongo(congo-brazzaville)data':
        require '../app/Models/world/getcongo(congo-brazzaville)data.php';
        break;

    case 'getcongo_democraticrepublicofthecongokinshasadata':
        require '../app/Models/world/getcongo_democraticrepublicofthecongokinshasadata.php';
        break;

    case 'getcostaricadata':
        require '../app/Models/world/getcostaricadata.php';
        break;

    case 'getcroatiadata':
        require '../app/Models/world/getcroatiadata.php';
        break;

    case 'getcubadata':
        require '../app/Models/world/getcubadata.php';
        break;

    case 'getcyprusdata':
        require '../app/Models/world/getcyprusdata.php';
        break;

    case 'getczechiadata':
        require '../app/Models/world/getczechiadata.php';
        break;

    case 'getdenmarkdata':
        require '../app/Models/world/getdenmarkdata.php';
        break;

    case 'getdjiboutidata':
        require '../app/Models/world/getdjiboutidata.php';
        break;

    case 'getdominicadata':
        require '../app/Models/world/getdominicadata.php';
        break;

    case 'getdominicanrepublicdata':
        require '../app/Models/world/getdominicanrepublicdata.php';
        break;

    case 'getecuadordata':
        require '../app/Models/world/getecuadordata.php';
        break;

    case 'getegyptdata':
        require '../app/Models/world/getegyptdata.php';
        break;

    case 'getelsalvadordata':
        require '../app/Models/world/getelsalvadordata.php';
        break;

    case 'getequatorialguineadata':
        require '../app/Models/world/getequatorialguineadata.php';
        break;

    case 'geteritreadata':
        require '../app/Models/world/geteritreadata.php';
        break;

    case 'getestoniadata':
        require '../app/Models/world/getestoniadata.php';
        break;

    case 'geteswatinidata':
        require '../app/Models/world/geteswatinidata.php';
        break;

    case 'getethiopiadata':
        require '../app/Models/world/getethiopiadata.php';
        break;

    case 'getfijidata':
        require '../app/Models/world/getfijidata.php';
        break;

    case 'getfinlanddata':
        require '../app/Models/world/getfinlanddata.php';
        break;

    case 'getfrancedata':
        require '../app/Models/world/getfrancedata.php';
        break;

    case 'getgabondata':
        require '../app/Models/world/getgabondata.php';
        break;

    case 'getgambiadata':
        require '../app/Models/world/getgambiadata.php';
        break;

    case 'getgeorgiadata':
        require '../app/Models/world/getgeorgiadata.php';
        break;

    case 'getgermanydata':
        require '../app/Models/world/getgermanydata.php';
        break;

    case 'getghanadata':
        require '../app/Models/world/getghanadata.php';
        break;

    case 'getgreecedata':
        require '../app/Models/world/getgreecedata.php';
        break;

    case 'getgrenadadata':
        require '../app/Models/world/getgrenadadata.php';
        break;

    case 'getguatemaladata':
        require '../app/Models/world/getguatemaladata.php';
        break;

    case 'getguineadata':
        require '../app/Models/world/getguineadata.php';
        break;

    case 'getguinea-bissaudata':
        require '../app/Models/world/getguinea-bissaudata.php';
        break;

    case 'getguyanadata':
        require '../app/Models/world/getguyanadata.php';
        break;

    case 'gethaitidata':
        require '../app/Models/world/gethaitidata.php';
        break;

    case 'gethondurasdata':
        require '../app/Models/world/gethondurasdata.php';
        break;

    case 'gethungarydata':
        require '../app/Models/world/gethungarydata.php';
        break;

    case 'geticelanddata':
        require '../app/Models/world/geticelanddata.php';
        break;

    case 'getindiadata':
        require '../app/Models/world/getindiadata.php';
        break;

    case 'getindonesiadata':
        require '../app/Models/world/getindonesiadata.php';
        break;

    case 'getirandata':
        require '../app/Models/world/getirandata.php';
        break;

    case 'getiraqdata':
        require '../app/Models/world/getiraqdata.php';
        break;

    case 'getirelanddata':
        require '../app/Models/world/getirelanddata.php';
        break;

    case 'getisraeldata':
        require '../app/Models/world/getisraeldata.php';
        break;

    case 'getitalydata':
        require '../app/Models/world/getitalydata.php';
        break;

    case 'getjamaicadata':
        require '../app/Models/world/getjamaicadata.php';
        break;

    case 'getjapandata':
        require '../app/Models/world/getjapandata.php';
        break;

    case 'getjordandata':
        require '../app/Models/world/getjordandata.php';
        break;

    case 'getkazakhstandata':
        require '../app/Models/world/getkazakhstandata.php';
        break;

    case 'getkenyadata':
        require '../app/Models/world/getkenyadata.php';
        break;

    case 'getkiribatidata':
        require '../app/Models/world/getkiribatidata.php';
        break;

    case 'getnorthkoreadata':
        require '../app/Models/world/getnorthkoreadata.php';
        break;

    case 'getsouthkoreadata':
        require '../app/Models/world/getsouthkoreadata.php';
        break;

    case 'getkuwaitdata':
        require '../app/Models/world/getkuwaitdata.php';
        break;

    case 'getkyrgyzstandata':
        require '../app/Models/world/getkyrgyzstandata.php';
        break;

    case 'getlaosdata':
        require '../app/Models/world/getlaosdata.php';
        break;

    case 'getlatviadata':
        require '../app/Models/world/getlatviadata.php';
        break;

    case 'getlebanondata':
        require '../app/Models/world/getlebanondata.php';
        break;

    case 'getlesothodata':
        require '../app/Models/world/getlesothodata.php';
        break;

    case 'getliberiadata':
        require '../app/Models/world/getliberiadata.php';
        break;

    case 'getlibyadata':
        require '../app/Models/world/getlibyadata.php';
        break;

    case 'getliechtensteindata':
        require '../app/Models/world/getliechtensteindata.php';
        break;

    case 'getlithuaniadata':
        require '../app/Models/world/getlithuaniadata.php';
        break;

    case 'getluxembourgdata':
        require '../app/Models/world/getluxembourgdata.php';
        break;

    case 'getmadagascardata':
        require '../app/Models/world/getmadagascardata.php';
        break;

    case 'getmalawidata':
        require '../app/Models/world/getmalawidata.php';
        break;

    case 'getmalaysiadata':
        require '../app/Models/world/getmalaysiadata.php';
        break;

    case 'getmaldivesdata':
        require '../app/Models/world/getmaldivesdata.php';
        break;

    case 'getmalidata':
        require '../app/Models/world/getmalidata.php';
        break;

    case 'getmaltadata':
        require '../app/Models/world/getmaltadata.php';
        break;

    case 'getmarshallislandsdata':
        require '../app/Models/world/getmarshallislandsdata.php';
        break;

    case 'getmauritaniadata':
        require '../app/Models/world/getmauritaniadata.php';
        break;

    case 'getmauritiusdata':
        require '../app/Models/world/getmauritiusdata.php';
        break;

    case 'getmexicodata':
        require '../app/Models/world/getmexicodata.php';
        break;

    case 'getmicronesiadata':
        require '../app/Models/world/getmicronesiadata.php';
        break;

    case 'getmoldovadata':
        require '../app/Models/world/getmoldovadata.php';
        break;

    case 'getmonacodata':
        require '../app/Models/world/getmonacodata.php';
        break;

    case 'getmongoliadata':
        require '../app/Models/world/getmongoliadata.php';
        break;

    case 'getmontenegrodata':
        require '../app/Models/world/getmontenegrodata.php';
        break;

    case 'getmoroccodata':
        require '../app/Models/world/getmoroccodata.php';
        break;

    case 'getmozambiquedata':
        require '../app/Models/world/getmozambiquedata.php';
        break;

    case 'getnamibiadata':
        require '../app/Models/world/getnamibiadata.php';
        break;

    case 'getnaurudata':
        require '../app/Models/world/getnaurudata.php';
        break;

    case 'getnepaldata':
        require '../app/Models/world/getnepaldata.php';
        break;

    case 'getnetherlandsdata':
        require '../app/Models/world/getnetherlandsdata.php';
        break;

    case 'getnewzealanddata':
        require '../app/Models/world/getnewzealanddata.php';
        break;

    case 'getnicaraguadata':
        require '../app/Models/world/getnicaraguadata.php';
        break;

    case 'getnigerdata':
        require '../app/Models/world/getnigerdata.php';
        break;

    case 'getnigeriadata':
        require '../app/Models/world/getnigeriadata.php';
        break;

    case 'getnorthmacedoniadata':
        require '../app/Models/world/getnorthmacedoniadata.php';
        break;

    case 'getnorwaydata':
        require '../app/Models/world/getnorwaydata.php';
        break;

    case 'getomandata':
        require '../app/Models/world/getomandata.php';
        break;

    case 'getpakistandata':
        require '../app/Models/world/getpakistandata.php';
        break;

    case 'getpalaudata':
        require '../app/Models/world/getpalaudata.php';
        break;

    case 'getpanamadata':
        require '../app/Models/world/getpanamadata.php';
        break;

    case 'getpapuanewguineadata':
        require '../app/Models/world/getpapuanewguineadata.php';
        break;

    case 'getparaguaydata':
        require '../app/Models/world/getparaguaydata.php';
        break;

    case 'getperudata':
        require '../app/Models/world/getperudata.php';
        break;

    case 'getphilippinesdata':
        require '../app/Models/world/getphilippinesdata.php';
        break;

    case 'getpolanddata':
        require '../app/Models/world/getpolanddata.php';
        break;

    case 'getportugaldata':
        require '../app/Models/world/getportugaldata.php';
        break;

    case 'getqatardata':
        require '../app/Models/world/getqatardata.php';
        break;

    case 'getromaniadata':
        require '../app/Models/world/getromaniadata.php';
        break;

    case 'getrussiadata':
        require '../app/Models/world/getrussiadata.php';
        break;

    case 'getrwandadata':
        require '../app/Models/world/getrwandadata.php';
        break;

    case 'getsaotomeandprincipedata':
        require '../app/Models/world/getsaotomeandprincipedata.php';
        break;

    case 'getsaudiarabiadata':
        require '../app/Models/world/getsaudiarabiadata.php';
        break;

    case 'getsenegaldata':
        require '../app/Models/world/getsenegaldata.php';
        break;

    case 'getserbiadata':
        require '../app/Models/world/getserbiadata.php';
        break;

    case 'getseychellesdata':
        require '../app/Models/world/getseychellesdata.php';
        break;

    case 'getsierraleonedata':
        require '../app/Models/world/getsierraleonedata.php';
        break;

    case 'getsingaporedata':
        require '../app/Models/world/getsingaporedata.php';
        break;

    case 'getslovakiadata':
        require '../app/Models/world/getslovakiadata.php';
        break;

    case 'getsloveniadata':
        require '../app/Models/world/getsloveniadata.php';
        break;

    case 'getsolomonislandsdata':
        require '../app/Models/world/getsolomonislandsdata.php';
        break;

    case 'getsomaliadata':
        require '../app/Models/world/getsomaliadata.php';
        break;

    case 'getsouthafricadata':
        require '../app/Models/world/getsouthafricadata.php';
        break;

    case 'getsouthsudandata':
        require '../app/Models/world/getsouthsudandata.php';
        break;

    case 'getspaindata':
        require '../app/Models/world/getspaindata.php';
        break;

    case 'getsrilankadata':
        require '../app/Models/world/getsrilankadata.php';
        break;

    case 'getsudandata':
        require '../app/Models/world/getsudandata.php';
        break;

    case 'getsurinamedata':
        require '../app/Models/world/getsurinamedata.php';
        break;

    case 'getswedendata':
        require '../app/Models/world/getswedendata.php';
        break;

    case 'getswitzerlanddata':
        require '../app/Models/world/getswitzerlanddata.php';
        break;

    case 'gettajikistandata':
        require '../app/Models/world/gettajikistandata.php';
        break;

    case 'gettanzaniadata':
        require '../app/Models/world/gettanzaniadata.php';
        break;

    case 'getthailanddata':
        require '../app/Models/world/getthailanddata.php';
        break;

    case 'gettogodata':
        require '../app/Models/world/gettogodata.php';
        break;

    case 'gettongadata':
        require '../app/Models/world/gettongadata.php';
        break;

    case 'gettrinidadandtobagodata':
        require '../app/Models/world/gettrinidadandtobagodata.php';
        break;

    case 'gettunisiadata':
        require '../app/Models/world/gettunisiadata.php';
        break;

    case 'getturkeydata':
        require '../app/Models/world/getturkeydata.php';
        break;

    case 'getturkmenistandata':
        require '../app/Models/world/getturkmenistandata.php';
        break;

    case 'gettuvaludata':
        require '../app/Models/world/gettuvaludata.php';
        break;

    case 'getugandadata':
        require '../app/Models/world/getugandadata.php';
        break;

    case 'getukrainedata':
        require '../app/Models/world/getukrainedata.php';
        break;

    case 'getunitedarabemiratesdata':
        require '../app/Models/world/getunitedarabemiratesdata.php';
        break;

    case 'getunitedkingdomdata':
        require '../app/Models/world/getunitedkingdomdata.php';
        break;

    case 'getunitedstatesdata':
        require '../app/Models/world/getunitedstatesdata.php';
        break;

    case 'geturuguaydata':
        require '../app/Models/world/geturuguaydata.php';
        break;

    case 'getuzbekistandata':
        require '../app/Models/world/getuzbekistandata.php';
        break;

    case 'getvanuatudata':
        require '../app/Models/world/getvanuatudata.php';
        break;

    case 'getvaticancitydata':
        require '../app/Models/world/getvaticancitydata.php';
        break;

    case 'getvenezueladata':
        require '../app/Models/world/getvenezueladata.php';
        break;

    case 'getvietnamdata':
        require '../app/Models/world/getvietnamdata.php';
        break;

    case 'getwalesdata':
        require '../app/Models/world/getwalesdata.php';
        break;

    case 'getyemendata':
        require '../app/Models/world/getyemendata.php';
        break;

    case 'getzambiadata':
        require '../app/Models/world/getzambiadata.php';
        break;

    case 'getzimbabwedata':
        require '../app/Models/world/getzimbabwedata.php';
        break;
}
?>
