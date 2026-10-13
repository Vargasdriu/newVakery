<?php
$produ=["cake","pizza","water"];
$cant=[5,10,20];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <section>
        <h1>productos</h1>
        <canvas id="ejem"></canvas>
    </section>
    <script>
        var produ=<?php echo json_encode($produ);?>;
        var cant=<?php echo json_encode($cant);?>;
        var grafico=document.getElementById("ejem");
        new Chart(grafico,{
            type:"bar",
            data:{
                labels:produ,
                datasets:[{
                    label:"productos",
                    data:cant,
                }]
            },
           
        })
    </script>
</body>
</html>