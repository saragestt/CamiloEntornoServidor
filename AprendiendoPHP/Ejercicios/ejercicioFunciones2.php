<?php


/*
 *
 *  Funciones utilitarias (búsqueda y formato). Estas funciones deben de estar en el programa (código).
 *      - findStudentById(array $estudiantes, int $idUsuario): ?array -> Esta función debe retornar el objeto (array) del estudiante buscado (si existe).
 *        Si no existe, retornamos null.
 *
 *      - findCourseById(array $courses, int $idCurso): ?array -> Esta función debe retornar el objeto (array) del curso buscado (si existe). Si no existe,
 *        retornamos null.
 *
 *      - fullName(string $first_name, string $last_name): string -> Este array retorna "Nombre Apellidos" como cadena de texto del usuario buscado en
 *        findStudentById (si no es null).
 *
 *      - En HTML tenéis que representar el fullName() en un bloque/etiqueta <p></p>. Si no fue encontrado, mostrar en HTML una etiqueta <p>Usuario no
 *        encontrado</p>
 *
 *      - Añadir una sección en HTMl (un div), donde aparecerán los correos (emails) de todos los estudiantes. Si no tiene correo, imprimir "
          no-email@epsum.school Intentad usar ??
 *
 *       Si queréis añadir más funciones para resolver esto, podéis hacerlo.
 *
 *     Otras funciones
 *      - getStudentGrado(array $grados, int $studentId): void -> Debe imprimir todas las notas del alumno.
 *      - statusFromGrado(float ...values): string -> Retorna "Suspenso" si media < 5, "Aprobado" si media >=5 y < 7, "Notable" si >= 7 y < 9, y "Sobresaliente si >= 9.
 *          - Para sacar la media es suma de todas las notas entre asignaturas totales matriculadas por el estudiante.
 *          - Mostrar en el HTML "suspenso", "aprobado", .... y el nombre del estudiante.
 * */

$estudiantes = [
    ["id" => 1, "first_name" => "pepe", "last_name" => "López", "email" => "pepe@example.com", "status" => "ACTIVE"],
    ["id" => 2, "first_name" => "luis", "last_name" => "Pérez", "email" => null, "status" => "ACTIVE"],
    ["id" => 3, "first_name" => "marta", "last_name" => "Ruiz", "email" => "marta@example.com", "status" => "INACTIVE"],
    ["id" => 4, "first_name" => "diego", "last_name" => "Gómez", "email" => "diego@example.com", "status" => "ACTIVE"],
];

$courses = [
    ["id" => 101, "title" => "Programación I", "credits" => 6],
    ["id" => 102, "title" => "Entorno servidor", "credits" => 5],
    ["id" => 103, "title" => "Entorno web", "credits" => 4]
];

$matriculados = [
    ["studentId" => 1, "courseId" => 101],
    ["studentId" => 1, "courseId" => 102],
    ["studentId" => 2, "courseId" => 101],
    ["studentId" => 2, "courseId" => 103],
    ["studentId" => 3, "courseId" => 101],
    ["studentId" => 4, "courseId" => 102],
];

$grados = [
    ["studentId" => 1, "courseId" => 101, "grade" => 9.2],
    ["studentId" => 1, "courseId" => 102, "grade" => 7.8],
    ["studentId" => 2, "courseId" => 101, "grade" => 5.5],
    ["studentId" => 2, "courseId" => 103, "grade" => 6.3],
    ["studentId" => 3, "courseId" => 101, "grade" => 4.1],
    // Diego no tiene nota aún
];

function findStudentById(array $estudiantes, int $idUsuario): ?array {
    $encotrado = false;
    $cont = 0;
    $estudiante = null;

    while(!$encotrado && $cont < count($estudiantes)) {
        if ($estudiantes[$cont]["id"] == $idUsuario) {
            $estudiante = $estudiantes[$cont];
            $encotrado = true;
        }
        $cont++;
    }
    return $estudiante;
}

echo json_encode(findStudentById($estudiantes, 1));

function fullName(string $firstName, string $lastName): string{
    return  $firstName . " " . $lastName;
}

$estudiante = findStudentById($estudiantes, 1); //null o array
if ($estudiante === null) {
    $nombre = "<p> Usuario no encontrado</p>";
} else {
    $n = fullName($estudiante["first_name"], $estudiante["last_name"]);
    $nombre = "<p> . $n . </p>";
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio estudiantes y grado</title>

    <style>
#container {
width: 95%;
            max-width: 500px;
            margin: 20px auto 40px;
        }
    </style>
</head>
<body>
    <div id="container">


    </div>
</body>
</html>

13:30

Camilo dice:<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio estudiantes y grado</title>

    <style>
#container {
width: 95%;
            max-width: 500px;
            margin: 20px auto 40px;
        }
    </style>
</head>
<body>
    <div id="container">


    </div>
</body>
</html>


