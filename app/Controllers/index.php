<?php

define('BASE_URL', '/Projects/SRPSS/Website/public/');

$request = $_SERVER['REQUEST_URI'];
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
}
?>
