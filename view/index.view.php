<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
use \ITApp\Workers;
use \ITApp\Managment;
use \ITApp\Programmers;
use \ITApp\Render;
use \ITApp\Testers;

$manager = new Managment('karolis', 'jojo', '98989', 'jack st.', 'hero', 'Programmers');
$programmer = new Programmers('karolis', 'jojo', '98989', 'jack st.', 'hero', 'Programmers');
$tester = new Testers('karolis', 'jojo', '98989', 'jack st.', 'hero', 'Programmers');
$manager->addComment("Good fellow");
$programmer->addComment("Good fellow");
$tester->addComment("Good fellow");
?>
<table>
    <tr><td><?php Render::Show($manager->showProduct());?></td></tr>
    <tr><td><?php Render::Show($programmer->showProduct());?></td></tr>
    <tr><td><?php Render::Show($tester->showProduct());?></tr></td>
</table>

</body>
</html>