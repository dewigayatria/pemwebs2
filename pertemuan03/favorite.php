<?php
include './top.php';
include './menu.php';

$Makanan = array( 
    array("label"=>"cookies", "symbol" => "🍪","y"=>12.4),
    array("label"=>"sushi", "symbol" => "🍣","y"=>30.6),
    array("label"=> "ice cream", "symbol" => "🍦","y"=>10.9),
    array("label"=>"kentang goreng", "symbol" => "🍟","y"=>21,9),
    array("label"=>"Donat", "symbol" => "🍩","y"=>3.6),
    array("label"=>"Kebab", "symbol" => "🌯","y"=>20.6),
);

$hewan = array( 
    array("label"=>"kucing", "symbol" => "😸","y"=>46.6),
    array("label"=>"anjing", "symbol" => "🐶","y"=>27.7),
    array("label"=>"hamster", "symbol" => "🐹","y"=>13.9),
    array("label"=>"koala", "symbol" => "🐨","y"=>5),
    array("label"=>"kukang", "symbol" => "🦥","y"=>3.6),
);

?>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <?php
    include './navbar.php';
    ?>
    <script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Makanan Favorite saya!"
            },
            data: [{
                type: "doughnut",
                indexLabel: "{symbol} - {y}",
                yValueFormatString: "#,##0.0\"%\"",
                showInLegend: true,
                legendText: "{label} : {y}",
                dataPoints: <?php echo json_encode($Makanan, JSON_NUMERIC_CHECK); ?>
            }]
        });

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Hewan Kesukaan saya!"
            },
            data: [{
                type: "doughnut",
                indexLabel: "{symbol} - {y}",
                yValueFormatString: "#,##0.0\"%\"",
                showInLegend: true,
                legendText: "{label} : {y}",
                dataPoints: <?php echo json_encode($hewan, JSON_NUMERIC_CHECK); ?>
            }]
        });

        chart.render();
        chart2.render();
    }
    </script>
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Halaman Kesukaan Saya</h1>
        <p>HELLO
            WELCOME TO MY WEBSITE
        </p>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </div>
</div>
<?php
include './bottom.php';
?>
