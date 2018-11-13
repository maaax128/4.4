<?php
session_start();
require('admittance.php');
require('connect.php');
if (!empty($_POST['description'])) {
	$description = $_POST['description'];
foreach (array_slice($_POST, 1) as $value) {
if (!empty($value)) {
	$str .= "$value, ";
}