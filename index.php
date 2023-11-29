<?php
$name = "Билл Гейтс";
$prof = "Developer";
$city = "Россия, Москва";
$email = "stivenson@mail.ru";
$phone = "89994565588";

$skills = [
['name'=>'Photoshop','value'=>'88'], ['name'=>'Photography','value'=>'91'],
['name'=>'Illustrator','value'=>'71'], ['name'=>'Media','value'=>'48']];
$languages = [ ['lang'=>'English', 'value'=>'100'], ['lang'=>'German',
'value'=>'70'], ['lang'=>'Spanish', 'value'=>'40'] ]; $work_experience = [
['spec'=>'Frontend Developer', 'data'=>'jan 2015', 'descr'=>'Lorem ipsum dolor
sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est
reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque
repellendus iure, iste.'], ['spec'=>'Web Developer / something.com',
'data'=>'Mar 2012 - Dec 2014', 'descr'=>'Consectetur adipisicing elit.
Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt
hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
['spec'=>'Graphic Designer / designsomething.com', 'data'=>'Jun 2010 - Mar
2012', 'descr'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'] ];
$education = [ ['place'=>'gb.ru', 'data'=>'Forever', 'descr'=>'Web Development!
All I need to know in one place'], ['place'=>'London Business School',
'data'=>'2013 - 2015', 'descr'=>'Master Degree'], ['place'=>'School of Coding',
'data'=>'2010 - 2013', 'descr'=>'Bachelor Degree'] ]; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мой новый тайтл</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  </head>
  <body class="w3-light-grey">
    <nav>
      <a href="/pages/chat">Чат</a>
      <a href="/pages/bio">Биография</a>
    </nav>
  </body>
</html>
