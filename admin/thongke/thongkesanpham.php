<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css7122?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="main">
        <div class="page-heading">
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DANH SÁCH SẢN PHẨM </h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <div id="piechart"></div>

                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                                            <script type="text/javascript">
                                                // Load google charts
                                                google.charts.load('current', {
                                                    'packages': ['corechart']
                                                });
                                                google.charts.setOnLoadCallback(drawChart);

                                                // Draw the chart and set the chart values
                                                function drawChart() {
                                                    var data = google.visualization.arrayToDataTable([
                                                        ['Danh mục', 'Số lượng sản phẩm'],
                                                        <?php
                                                        $tongdm = count($listthongke);
                                                        $i = 1;
                                                        foreach ($listthongke as $thongke) {
                                                            extract($thongke);
                                                            if ($i == $tongdm) $dauphay = "";
                                                            else $dauphay = ",";
                                                            echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                                                            $i += 1;
                                                        }

                                                        ?>
                                                    ]);

                                                    // Optional; add a title and set the width and height of the chart
                                                    var options = {
                                                        'title': 'Biểu đồ danh mục sản phẩm của shop',
                                                        'width': 550,
                                                        'height': 400
                                                    };

                                                    // Display the chart inside the <div> element with id="piechart"
                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                    chart.draw(data, options);
                                                }
                                            </script>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>