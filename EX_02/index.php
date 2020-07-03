<?php
include('header.php');

?>
<html>
<head>
<meta charset="utf-8">
<title>site-routine</title>
<nav>
<a href="http://localhost:8888/ISCC%202020/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a>
<a href="http://localhost:8888/ISCC%202020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
<a href="http://localhost:8888/ISCC%202020/ISCC-2020-J08/EX_02/?page=contact">Contact</a>
<a href="http://localhost:8888/ISCC%202020/ISCC-2020-J08/EX_02/?page=contact-form">Contact-form</a>
</nav>
</head>
<body>
<?php

if($_GET['page'] == 'accueil')
{
    include('vitrine-accueil.html');
}
elseif($_GET["page"]== "programme")
{
    include('vitrine-programme.html');
}
elseif($_GET["page"]== "contact")
{
    include('vitrine-contacts.html');
}
elseif($_GET['page']=='contact-form')
            {
                include('contact-form.php');
            }
else 
{
    include("404.php");
}

include('footer.php');

?>
