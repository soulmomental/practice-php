<?php
	/*Тема: Работа с переменными

	1. Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.
	$a = 3;
	echo $a;

	2. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
	$a = 10;
	$b = 2;
	echo $a + $b."<br>";
	echo $a - $b."<br>";
	echo $a * $b."<br>";
	echo $a / $b;

	3. Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
	$c = 15;
	$d = 2;
	$result = $c + $d;
	echo $result;

	4. Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
	$a = 10;
	$b = 2;
	$c = 5;
	echo $a + $b + $c;

	5. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
	$a = 17;
	$b = 10;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo $result;*/

	/*Тема: Работа со строками

	6. Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
	$text = "Привет, Мир!";
	echo $text;

	7. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
	$text1 = 'Привет, ';
	$text2 = 'Мир!';
	echo $text1.$text2;

	8. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
	$name = 'Виталий';
	echo 'Привет, '.$name.'!';

	9. Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.
	$age = 22;
	echo 'Мне '.$age.' лет!';*/

	/*Тема: Обращение к символам строки

	10. Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
	$text = 'abcde';
	echo $text[0].'<br>';
	echo $text[2].'<br>';
	echo $text[4];

	11. Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
	$str = 'abcde';
	$str[0] = '!';
	echo $str;

	12. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
	$num = '12345';
	echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];*/

	/*Тема: Практика

	13. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
	$secondsInHours = 60 * 60;
	$secondsInDays = $secondsInHours * 24;
	$secondsInMonth = $secondsInDays * 31;
	echo "Секунд в часах: ".$secondsInHours."<br>";
	echo "Секунд в днях: ".$secondsInDays."<br>"; 
	echo "Секунд в месяце: ".$secondsInMonth;

	14.  Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
	$hour = 20;
	$minute = 30;
	$second = 11;
	echo $hour.":".$minute.":".$second;

	15. Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
	$num = 10;
	echo $num * $num;*/

	/*Тема: Работа с присваиванием и декрементами

	16. Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
	$var = 47;
	$var = $var + 7;
	$var = $var - 18;
	$var = $var * 10;
	$var = $var / 20;
	echo $var;

	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo $var;

	17. Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
	$text = 'Я';
	$text = $text.' хочу';
	$text = $text.' знать';
	$text = $text.' PHP!';
	echo $text;

	$text = 'Я';
	$text .= ' хочу';
	$text .= ' знать';
	$text .= ' PHP!';
	echo $text;

	18. Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
	$var = 10;
	$var = $var + 1;
	$var = $var + 1;
	$var = $var - 1;
	echo $var;

	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var;

	19. Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
	$var = 10;
	$var = $var + 7;
	$var = $var + 1;
	$var = $var - 1;
	$var = $var + 12;
	$var = $var * 7;
	$var = $var - 15;
	echo $var;

	$var = 10;
	$var += 7;
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -= 15;
	echo $var;*/
/*
	function a(&$a = 19){
	    $a.=1;
    }
    $b = 6;
	a($b);
	echo $b++;*/

    /*$x = 10;
    $x += --$x;
    echo $x;

    */
/*
    $greta = 'ку';

    echo "Это {$greta}";*/


    /*preg_match(
        "@^(?:http://)?([^/]+)@i",
        'http://www.php.net/index.html',
        $matches);

    $match = $matches[1];
    echo $match;*/
//    echo "1" + "2";

/*
    error_reporting(-1);
    $hello = 'Hello!';

    for($i = 0; $i <= 3; $i++){
        echo $hello[$i];
    }

    echo $hello[strlen($hello)-1];*/
/*
    $array = array('a'=>'One', 'b'=>'Two', 'c' =>
    array('d' => 'Three', 'e' => 'Four'));


    function print_element($array){
        extract($array);
        return $c['e'];
    }

    print print_element($array);*/


//    error_reporting(-1);
//    class c{
//        private $a = 42;
//        function &a(){
//            return $this->a;
//        }
//        function print_a(){
//            echo $this->a;
//        }
//    }
//
//     $c = new c;
//    $d = &$c->a();
//    echo $d;
//    $d = 2;
//    $c->print_a();
//
//$ar = 'Ru';
//$$ar = 'Rulles';
//
//echo $ar;

//echo 4 %2;
?>