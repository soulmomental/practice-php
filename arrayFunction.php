<?php 
// <---------Примеры----------->
// Функция count подсчитывает количество элементов массива.
/*$arr = ['a','b','c','d'];
echo count($arr);*/

// Функция in_array проверяет наличие заданного элемента в массиве.
/*$arr = [1,2,3,4,5];
var_dump(in_array(3, $arr));*/

// Функция array_sum вычисляет сумму элементов массива.
/*$arr = [1,2,3,4,5];
echo array_sum($arr);*/

// Функция array_product вычисляет произведение (умножение) элементов массива.
/*$arr = [1,2,3,4,5];
echo array_product($arr);*/

// Функция range создает массив с диапазоном элементов. К примеру, можно создать массив, заполненный числами от 1 до 100 или буквами от 'a' до 'z'. Диапазон, который сгенерирует функция, задается параметрами: первый параметр откуда генерировать, а второй - докуда.
/*$arr = range(1,5);
var_dump($arr);

$arr = range(5,1);
var_dump($arr);

$arr = range(0, 10, 2);
var_dump($arr);

$arr = range('a', 'e');
var_dump($arr);
*/

// Функция array_merge сливает два и более массивов вместе.
/*$arr1 = [1,2,3];
$arr2 = ['a', 'b', 'c'];
$res = array_merge($arr1, $arr2);
var_dump($res);*/

// Функция array_slice отрезает и возвращает часть массива.
/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($arr, 0, 3));

$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($arr, 1, 3));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($arr, 1));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($arr, -2, 2));*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
var_dump(array_slice($arr, 0, 3));*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
var_dump(array_slice($arr, 0, 3, true));*/

// Функция array_splice отрезает и возвращает часть массива. При этом отрезанная часть исчезает из массива. Вместо отрезанной части можно вставлять новые элементы.

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, 0, 3));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, 1, 3));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, 1));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, -2, 2));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, 1,2,[1,2,3]));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_splice($arr, 1, 0, [1,2,3]));*/

// Функция array_keys получает ключи массива и записывает их в новый массив.

/*$arr = ['a' => 1, 'b' => 2, 'c'=> 3, 'd'=>4, 'e'=>5];
var_dump(array_keys($arr));
*/

// Функция array_values выбирает все значения из массива.
/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
var_dump(array_values($arr));*/

// Функция array_combine осуществляет слияние двух массивов в один ассоциативный.
/*$keys = ['green', 'blue', 'red'];
$elems = ['зеленый', "голубой", "красный"];
$arr = array_combine($keys, $elems);
var_dump($arr);*/

// Функция array_flip производит обмен местами ключей и значений массива.
/*$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$result = array_flip($arr);
var_dump($result);*/

// Функция array_reverse переворачивает массив в обратном порядке.
/*$arr = [1,2,3,4,5];
$arr = array_reverse($arr);
var_dump($arr);*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$arr = array_reverse($arr);
var_dump($arr);*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$arr = array_reverse($arr, true);
var_dump($arr);*/

/*Функция array_search осуществляет поиск значения в массиве и возвращает ключ первого найденного элемента. Если такой элемент не найдет - вернет false. Третий параметр задает строгое сравнение по типу (как по ===). Если поставить true - он будет сравнивать строго, а если false (по умолчанию) - то нет.
*/
/*$arr = ['a', 'b', 'c', 'd', 'e'];
echo array_search('c', $arr);*/

// Функция array_replace заменяет значения первого массива значениями с такими же ключами из других переданных массивов. Если ключ из первого массива присутствует во втором массиве, его значение заменяется на значение из второго массива. Если ключ есть во втором массиве, но отсутствует в первом - он будет создан в первом массиве. Если ключ присутствует только в первом массиве, то сохранится как есть.

/*$arr= ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0=>'!', 2=>'!!']);
var_dump($result);*/

// Функция array_count_values производит подсчет количества всех значений массива. Возвращает ассоциативный массив, в котором ключами будут элементы массива, а значениями - их количество в массиве.

/*$arr = ['a', 'a', 'a', 'b', 'b', 'c'];
var_dump(array_count_values($arr));*/

// Для сортировки массивов в PHP существует несколько функций: sort - по возрастанию элементов, rsort - по убыванию элементов, asort - по возрастанию элементов с сохранением ключей, arsort - по убыванию элементов с сохранением ключей, ksort - по возрастанию ключей, krsort - по убыванию ключей, usort - по функции по элементам, uasort - по функции по элементам с сохранением ключей, uksort - по функции по ключам, natsort - натуральная сортировка.
/*
$arr = [1,3,2,5,4];
sort($arr);
var_dump($arr);*/

/*Функция array_rand возвращает случайный ключ из массива.Второй необязательный параметр указывает, сколько случайных ключей следует вернуть.Если он не указан - возвращается один ключ, а если указан - заданное количество ключей в виде массива*/
/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$key = array_rand($arr);
var_dump($key);*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$key = array_rand($arr);
var_dump($arr[$key]);
*/

/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$keys = array_rand($arr, 3);
var_dump($keys);*/

// Функция array_unique осуществляет удаление повторяющихся элементов (дублей) из массива.
/*$arr = [1,1,1,2,2,3];
$arr = array_unique($arr);
var_dump($arr);*/

// Функция array_shift вырезает и возвращает первый элемент массива. При этом этот элемент исчезает из массива.
/*$arr = [1,2,3,4,5];
echo array_shift($arr);*/

// Функция array_pop вырезает и возвращает последний элемент массива. При этом этот элемент исчезает из массива.
/*$arr = [1,2,3,4,5];
echo array_pop($arr);*/

// Функция array_unshift добавляет элементы в начало массива. Функция изменяет переданный массив, а возвращает новое количество элементов в массиве.
/*$arr = [1,2,3];
$num = array_unshift($arr, 'a', 'b');
var_dump($arr);*/

// Функция array_push добавляет элементы в конец массива. Функция изменяет переданный массив, а возвращает новое количество элементов в массиве.
/*$arr = [1,2,3];
$num = array_push($arr, 4, 5);
var_dump($arr);*/

// Функция array_pad дополняет массив определенным значением до заданного размера.
/*$arr = [1,2,3];
$arr = array_pad($arr, 5, 0);
var_dump($arr);*/

// Функция array_fill создает массив, заполненный элементами с определенным значением.
/*$arr = array_fill(0, 5, 'x');
var_dump($arr);*/

// Функция array_fill_keys создает массив и заполняет массив элементами с определенным значением так, чтобы весь массив был с одинаковыми элементами, но разными ключами. Ключи берутся из массива, передаваемого первым параметром.
/*$arr = array_fill_keys(['a','b','c','d','e'], 'x');
var_dump($arr);*/

// Функция array_chunk разбивает одномерный массив в двухмерный. Первым параметром она принимает массив, а вторым - количество элементов в каждом подмассиве.
/*$arr = ['a', 'b', 'c', 'd'];
var_dump(array_chunk($arr, 2));*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_chunk($arr, 3));*/

// Функция array_map применяет заданную функцию ко всем элементам массива и возвращает измененный массив.
/*$arr = [1,4,9];
$result = array_map('sqrt', $arr);
var_dump($result);
*/

// Функция array_intersect вычисляет пересечение массивов - возвращает массив из элементов, которые есть во всех массивах, переданных в функцию.
/*$arr1 = array(1,2,3,4,5);
$arr2 = array(3,4,5,6,7);
$result = array_intersect($arr1, $arr2);
var_dump($result);*/

// Функция array_diff возвращает массив из элементов, которые не являются общими для всех массивов, переданных в функцию.
/*$arr1 = array(1,2,3,4,5);
$arr2 = array(3,4,5,6,7);
$result = array_diff($arr1, $arr2);
var_dump($result);*/
// <----------------Примеры------------------->

/*Тема: Работа с count

1. Дан массив $arr. Подсчитайте количество элементов этого массива.
$arr = [1,2,3,4,5,6];
echo count($arr);

2. Дан массив $arr. С помощью функции count выведите последний элемент данного массива.
$arr = [1,2,3,4,5,6];
echo $arr[count($arr) - 1];*/

/*Тема: Работа с in_array

3. Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
$arr = [1,2,3];
var_dump(in_array('3', $arr));

4. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива. 
$arr = [1,2,3,4,5];
echo array_sum($arr);

5. Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.
// $arr = [1,2,3,4,5];
echo array_product($arr);

6. Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.
$arr = [1,2,3,4,5];
echo array_sum($arr)/count($arr);*/

/*Тема: Работа с range

7. Создайте массив, заполненный числами от 1 до 100
$arr = range(1,100);
var_dump($arr);

8.Создайте массив, заполненный буквами от 'a' до 'z'.
$arr = range('a', 'z');
var_dump($arr);

9. Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
$arr = range(1,9);
echo implode("-", $arr);

10. Найдите сумму чисел от 1 до 100 не используя цикл.
$arr = range(1, 100);
echo array_sum($arr);

11. Найдите произведение чисел от 1 до 10 не используя цикл.
$arr = range(1,10);
echo array_product($arr);*/

/*Тема: Работа с array_merge

12. Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'. 
$arr1 = [1,2,3];
$arr2 = ['a', 'b', 'c'];
var_dump(array_merge($arr1, $arr2));

Тема: Работа с array_slice

13. Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.
$arr = [1,2,3,4,5];
$result = array_slice($arr, 1, 3);
var_dump($result);*/

/*Тема: Работа с array_splice

14. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5].
$arr = [1,2,3,4,5];
array_splice($arr, 1, 2);
var_dump($arr);

15. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый массив элементы [2, 3, 4]
$arr = [1,2,3,4,5];
$result = array_splice($arr, 1, 3);
var_dump($result);

16. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5]. 
$arr = [1,2,3,4,5];
array_splice($arr, 3, 0, ['a', 'b', 'c']);
var_dump($arr);

17. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].
$arr = [1,2,3,4,5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
var_dump($arr);*/

/*Тема: Работа с array_keys, array_values, array_combine

18. Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($keys);
var_dump($values);

19. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.

$arr1 =['a', 'b', 'c'];
$arr2 =[1,2,3];
$result = array_combine($arr1, $arr2);
var_dump($result);*/

/*Тема: Работа с array_flip, array_reverse

20. Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.
$arr = ['a'=> 1, "b"=>2, 'c'=>3];
var_dump(array_flip($arr));

21. Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1.
$arr = [1,2,3,4,5];
var_dump(array_reverse($arr));*/

/*Тема: Работа с array_search

22. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr);

23. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($arr, array_search('-', $arr), 1);
var_dump($arr);*/

/*Тема: Работа с array_replace

24.  Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0=>'!']);
var_dump($result);*/

/*Тема: Работа с сортировкой

25. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.
$arr = ["3"=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
var_dump($arr);

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
rsort($arr);
var_dump($arr);

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
asort($arr);
var_dump($arr);

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
arsort($arr);
var_dump($arr);

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
ksort($arr);
var_dump($arr);

$arr =['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
krsort($arr);
var_dump($arr);*/

/*Тема: Работа с array_rand

26. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива. 
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump(array_rand($arr));

27. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный элемент данного массива.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$rand = array_rand($arr);
var_dump($arr[$rand]);*/

/*Тема: Работа с shuffle

28. Дан массив $arr. Перемешайте его элементы в случайном порядке.
$arr = range(1,10);
shuffle($arr);
var_dump($arr);

29. Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.
$arr = range(1,25);
shuffle($arr);
var_dump($arr);

30. Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.
$arr = range(a,z);
shuffle($arr);
var_dump($arr);

31. Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться. 
$arr = range(a,z);
shuffle($arr);
$str = '';
foreach ($arr as $key => $value) {
	while($key < 6){
		$str.= $value;
		break;
	}
}
echo $str;*/

/*Тема: Работа с array_unique

32. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_unique($arr));*/

/*Тема: Работа с array_shift, array_pop, array_unshift, array_push

33. Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.
$arr = [1,2,3,4,5];
array_shift($arr);
array_pop($arr);
var_dump($arr);

34. Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.
$arr = [1,2,3,4,5];
array_unshift($arr, '0');
array_push($arr, '6');
var_dump($arr);

35. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645. 
$arr = [1,2,3,4,5,6,7,8];
$arrLength = count($arr);
$result = '';
for($i = 0; $i < $arrLength; $i++) {
	$result.=array_shift($arr);
	$result.=array_pop($arr);
}
echo $result;*/

/*Тема: Работа с array_pad, array_fill, array_fill_keys, array_chunk

36. Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.
$arr = ['a', 'b', 'c'];
var_dump(array_pad($arr, 6, '-'));

37. Заполните массив 10-ю буквами 'x'.
$arr = array_fill(0, 10, 'x');
var_dump($arr);

38. Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).
$arr = range(1,20);
var_dump(array_chunk($arr, 4));*/

/*Тема: Работа с array_count_values

39. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($arr));*/

/*Тема: Работа с array_map

40. Дан массив с элементами 1, 2, 3, 4, 5. Создайте новый массив, в котором будут лежать квадратные корни данных элементов.
$arr = [1,2,3,4,5];
var_dump(array_map('sqrt', $arr));

41. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.
$arr = ['<b>php<b>', '<i>html<i>'];
$res = array_map("strip_tags", $arr);
var_dump($res);

42. Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.
$arr = [' a ', ' b ' , ' c '];
$result = array_map("trim", $arr);
var_dump($result);*/

/*Тема: Работа с array_intersect, array_diff

43. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
$arr1 = [1,2,3,4,5];
$arr2 = [3,4,5,6,7];
$res = array_intersect($arr1, $arr2);
var_dump($res);

44. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.
$arr1 = [1,2,3,4,5];
$arr2 = [3,4,5,6,7];
$result = array_diff($arr1, $arr2);
var_dump($result);*/

/*Тема: Задачи

45. Дана строка '1234567890'. Найдите сумму цифр из этой строки не используя цикл.
$str = '1234567890';
$arr = str_split($str, 1);
echo array_sum($arr);

46. Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл.
$keys = range(a,z);
$elem = range(1,26);
var_dump(array_combine($keys, $elem));

47. Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] не используя цикл. 
$arr = range(1,9);
var_dump(array_chunk($arr, 3));

48. Дан массив с элементами 1, 2, 4, 5, 5. Найдите второй по величине элемент. В нашем случае это будет 4.
$arr=[1,2,4,5,5];
$res = array_unique($arr);
rsort($res);
echo $res[1];*/


?>