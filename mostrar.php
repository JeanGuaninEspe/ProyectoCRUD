<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>


<div class="fixed inset-0 flex items-center justify-center overflow-x-auto shadow-md sm:rounded-lg ml-28">
    <table class="w-8/12 text-sm text-left text-gray-500 dark:text-gray-400 mt-8 ml-4  ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
        <tr>
            <th scope="col" class="px-6 py-3 rounded-tl">
                Nombre
            </th>
            <th scope="col" class="px-6 py-3">
                Descripcion
            </th>
            <th scope="col" class="px-6 py-3">
                Cantidad
            </th>
            <th scope="col" class="px-6 py-3">
                Precio
            </th>
            /* <th scope="col" class="px-6 py-3 rounded-tr">
                <span class="sr-only">Edit</span>
            </th> */
        </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <?php
                include 'conexion.php';

                // Obtener el último id de productos
                $sql = "SELECT MAX(idproducts) AS max_id FROM products";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $maxId = $row["max_id"];

                // Realizar consultas para cada id incremental
                for ($id = 1; $id <= $maxId; $id++) {
                    $sql = "SELECT nombre, descripcion, cantidad, precio FROM products WHERE idproducts = $id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();

                        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">';
                        echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">';
                        echo $row["nombre"];
                        echo '</th>';
                        echo '<td class="px-6 py-4">';
                        echo $row["descripcion"];
                        echo '<td class="px-6 py-4">';
                        echo $row["cantidad"];
                        echo '</td>';
                        echo '<td class="px-6 py-4">';
                        echo $row["precio"];
                        echo '</td>';
                        echo '</tr>';

                    }
                }

                ?>



        </tr>

        </tbody>
    </table>
</div>
</body>
</html>
