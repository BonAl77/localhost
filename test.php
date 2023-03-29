<?php
$array = $_GET;
//if (is_array($_GET['answer'])){
//  foreach($_GET['имямассива с ответами'] as $переменная значения); 
//     {
//Действия
//}}
//if ($value =='Верно') { 
// Действия
//       }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method='get'>
    <h1>Тест по инструментоведению.</h1>
                    <h6>Диапозон малого медного оркестра.</h6>
        <input name="answer[0]" type="radio" value="Неверно"> 3-3.5 октавы<br>
        <input name="answer[0]" type="radio" value="Неверно"> 5-5.5 октавы<br>
        <input name="answer[0]" type="radio" value="Верно"> 4-4.5 октавы<br>
        <h6>Что такое  инстументоведение.</h6>
        <input name="answer[1]" type="radio" value="Верно"> Отрасль музыковедения, занимающаяся изучением происхождения и развития инструментов,
        <br> а также классификацией инструментов.<br>
        <input name="answer[1]" type="radio" value="Неверно"> Отрасль музыковедения, занимающаяся конструированием <br> и совершенствованием инструментов.<br>
        <input name="answer[1]" type="radio" value="Неверно"> Отрасль музыковедения, занимающаяся переложения <br>или создания музыкальной партитуры для оркестра различных составов.<br>
        <h6>Что подразумевают под понятием натуральный звукоряд, <br>когда речь идет о малом медном духовом оркестре.</h6> 
        <input name="answer[2]" type="radio" value="Неверно"> Особый способ звукообразования у амбушюрных инструментов (посредством мундштука),<br> дающий возможность извлечь с помощью механизма от 6 до 15 различных звуков.<br>
        <input name="answer[2]" type="radio" value="Верно"> Особый способ звукообразования у амбушюрных инструментов (посредством мундштука),<br> дающий возможность извлечь без помощи какого-либо механизма от 6 до 15 различных звуков.<br>
        <input name="answer[2]" type="radio" value="Неверно"> Особый способ звукообразования у любых инструментов, дающий возможность извлечь <br>без помощи какого-либо механизма от 6 до 15 различных звуков.<br>
        <div class="mb-3">
            <button class="btn btn-primary">Result</button>
        </div>
    </form>
    <?php
    $a = 0;
    if (is_array($_GET['answer'])) {
        foreach ($_GET['answer'] as $value) {
            if ($value == 'Верно') {
                $a = $a + 1;
            }
            echo $value, '<br>';
        }
        echo "У вас {$a} правильных ответов", '<br>';
    }
    ?>



    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <h1>Тест по инструментоведению.</h1>
                    <h3>Диапозон малого медного оркестра.</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Неверно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="A">
                            3-3.5 октавы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Верно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer1']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="B">
                            5-5.5 октавы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Верно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer1']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="C">
                            4-4.5 октавы
                        </label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php
    $k = 0;
    if (is_array($_GET['answer1'])) {
        foreach ($_GET['answer1'] as $value) {
            if ($value == 'Верно') {
                $k = $k + 1;
            }
            echo $value, '<br>';
        }
        echo "У вас {$k} правильных ответов", '<br>';
    }
    ?>
     <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <h1>Тест по инструментоведению.</h1>
                    <h3>Диапозон малого медного оркестра.</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Неверно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="A">
                            3-3.5 октавы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Верно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer1']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="B">
                            5-5.5 октавы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="answer1[]" value="Верно" id="answer1"
                            <?= isset($_GET['answer1']) && in_array('answer1', $_GET['answer1']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="C">
                            4-4.5 октавы
                        </label>
                    </div>
                    <div class="mb-3">
                        <h6>Свой вариант ответа</h6>
                    <textarea class="form-control" name="answer2[]"  value="Верно" id="answer2"><?= $result ?></textarea>
                    <?= isset($_GET['answer2']) && in_array('answer2', $_GET['answer2']) ? "checked" : "" ?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php
    $k = 0;
    if (is_array($_GET['answer1'])) {
        foreach ($_GET['answer1'] as $value) {
            if ($value == 'Верно') {
                $k = $k + 1;
            }
            echo $value, '<br>';
        }
        echo "У вас {$k} правильных ответов", '<br>';
    }
    ?>
  
</body>

</html>