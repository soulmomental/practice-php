<?php

error_reporting(-1);

/*++$a	���������� ���������	����������� $a �� �������, ����� ���������� �������� $a.
$a++	����������� ���������	���������� �������� $a, ����� ����������� $a �� �������.
--$a	���������� ���������	��������� $a �� �������, ����� ���������� �������� $a.
$a--	����������� ���������	���������� �������� $a, ����� ��������� $a �� �������.*/

//���������
$a = 5;
//var_dump($a++);//5
//var_dump(++$a); //6
//var_dump($a--);//5
//var_dump(--$a);//4
//var_dump($a + 1); //6



/*
.	������������	$txt1 . $txt2	������������ $txt1 � $txt2
.=	���������� ������������	$txt1 .= $txt2	�������� $txt2 � $txt1
*/

$str1 = 'Hello ';
$str2 = 'World';

//echo $str = $str1 .' '. $str2;

$fruit = ' apple';
//echo $str1."{$fruit}s";
//echo $str1.$fruit.'s';


//��������������� ���������

/*$a = 5;
//$a = $a + 2;
$a += 2;
$a -= 2;
$a *= 2;
var_dump($a);*/

/*$str1 = 'Hello, ';
$str1 .= ' world';
var_dump($str1);*/

NULL;
/*
$var = '';
unset($var);*/

$var = NULL;
//$var++; //1
//$var--; //NULL
var_dump($var);