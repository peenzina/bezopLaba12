    <?php
    $modul = $_POST['mod'];
    $arr = [];
    $x = 0;
    for ($i = 2; $i <= $modul; $i++) {
        if ($modul % $i == 0) {
            array_push($arr, $i);
        }
    }

    for ($i = 1; $i < $modul; $i++) {
        $isNotDivisible = true;
        foreach ($arr as $number) {
            if ($i % $number == 0) {
                $isNotDivisible = false;
                break;
                
            }
        }

        if ( $isNotDivisible) {
            $x++;
            
        } 
    }
    $a = 0;
    while ($a < $modul) {
        if ($modul != 1 && $modul != 2) {
            if (($a ** $x) % $modul == 1 && $a > 1) {
            echo $a;
                break;
            } 
    } else {
        echo 1;
        break;
    }
        $a++;
    }

    ?>
<!DOCTYPE html>
<body>
    <form method = "post">
        <input type = "text" placeholder="Введите первое число" name = "mod">
        <button type = "submit">Отправить</button>
    </form>
</body>
</html>
