<?php
session_start();
require_once '../Classes/Square.php';
require_once '../Classes/Triangle.php';
require_once '../Classes/Pentagon.php';
require_once '../Classes/Circle.php';

if ($_POST["submit"]) {
    $figures = [];
    if (isset($_POST["shapes"])) {
        foreach ($_POST["shapes"] as $shape) {
            $sides = $shape;
            $figures = switchFigures($sides, $figures);
        }
        $output = "";
        foreach ($figures as $figure) {
            $output .= "<img src=" . $figure->paintFigure() . " class='img'>";
        }
        $_SESSION["output"] = $output;
        var_dump($_SESSION["output"]);
        //header("Location: ../output.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

function switchFigures($sides, $figures){
    switch ($sides) {
        case 2:
            array_push(
                $figures,
                new Circle(2, $_POST["size"], $_POST["color"])
            );
            break;
        case 3:
            array_push(
                $figures,
                new Triangle(3, $_POST["size"], $_POST["color"])
            );
            break;
        case 4:
            array_push(
                $figures,
                new Square(4, $_POST["size"], $_POST["color"])
            );
            break;
        case 5:
            array_push(
                $figures,
                new Pentagon(5, $_POST["size"], $_POST["color"])
            );
            break;
    }
    return $figures;
}