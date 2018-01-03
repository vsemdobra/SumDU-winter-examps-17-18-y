<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AlertBuilder</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
    



<?php

abstract class Builder
{

    // Шаблонный метод
    final public function buildAlert()
    {
        $this->success();
        $this->warning();
        $this->danger();
        $this->info();
    }

    abstract public function success();
    abstract public function warning();
    abstract public function danger();
    abstract public function info();
}

class ForRussUsers extends Builder
{
    public function success()
    {
        echo '<div class="alert alert-success" role="alert">
                <strong>Все отлично!</strong> Ваши данные успешно сохранены.
            </div>';
    }

    public function warning()
    {
        echo '<div class="alert alert-warning" role="alert">
                <strong>Внимание!</strong> Повторите попытку, небольшие неполадки.
            </div>';
    }

    public function danger()
    {
        echo '<div class="alert alert-danger" role="alert">
                <strong>Беда!</strong> Что-то пошло не так, перешли данные ещё разок.
            </div>';
    }

    public function info()
    {
        echo '<div class="alert alert-info" role="alert">
                <strong>Данные приняты!</strong> Ваши данные успешно приняты для обработки.
            </div>';
    }
}

class ForUkrUsers extends Builder
{
    public function success()
    {
        echo '<div class="alert alert-success" role="alert">
                <strong>Усе добре!</strong> Ваші данні успішно передані.
            </div>';
    }

    public function warning()
    {
        echo '<div class="alert alert-warning" role="alert">
                <strong>Увага!</strong> Виникли неполадки, треба передати дані ще раз.
            </div>';
    }

    public function danger()
    {
        echo '<div class="alert alert-danger" role="alert">
                <strong>Ой біда!</strong> Сталась помилка і ваші дані не буде передані.
            </div>';
    }

    public function info()
    {
        echo '<div class="alert alert-info" role="alert">
                <strong>Дані прийняті!</strong> Відправлені вами дані прийнято.
            </div>';
    }
}
$forRussUsers = new ForRussUsers();
$forRussUsers->buildAlert();

$forUkrUsers = new ForUkrUsers();
$forUkrUsers->buildAlert();

class ForRussUsersFacade
{
    protected $ForRussUsers;

    public function __construct(ForRussUsers $ForRussUsers)
    {
        $this->ForRussUsers = $ForRussUsers;
    }

    public function unsuccessInput()
    {
        
        $this->ForRussUsers->warning();
        $this->ForRussUsers->danger();
        
    }

    public function successInput()
    {
        $this->ForRussUsers->success();
        $this->ForRussUsers->info();
    }
}

$ForRussUsers = new ForRussUsersFacade(new ForRussUsers());
$ForRussUsers->unsuccessInput();
$ForRussUsers->successInput(); 
?>
</body>
</html>