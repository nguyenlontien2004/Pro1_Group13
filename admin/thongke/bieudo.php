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
                                <h4 class="card-title">Sản phẩm bán chạy </h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <div class="row">
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                                            <canvas id="myChart" style="width:100%;max-width:1500px;"></canvas>

                                            <script>
                                                var xValues = <?php echo json_encode(array_column($listsptop, 'ten_sp')); ?>;
                                                var yValues = <?php echo json_encode(array_column($listsptop, 'luotban')); ?>;
                                                var barColors = ["red", "green", "blue", "orange", "brown", "teal", "pink", "lime", "grey", "maroon"];

                                                new Chart("myChart", {
                                                    type: "bar",
                                                    data: {
                                                        labels: xValues,
                                                        datasets: [{
                                                            backgroundColor: barColors,
                                                            data: yValues
                                                        }]
                                                    },
                                                    options: {
                                                        legend: {
                                                            display: false
                                                        },
                                                        title: {
                                                            display: true,
                                                            text: "BIỂU ĐỒ THỐNG KÊ TOP SẢN PHẨM BÁN CHẠY"
                                                        }
                                                    }
                                                });
                                            </script>
                                        </div>

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