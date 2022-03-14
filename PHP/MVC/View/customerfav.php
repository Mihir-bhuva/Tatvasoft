<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperland</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <link rel="stylesheet" href="assets/CSS/servicehistory.css">
</head>

<body>
    <div class="spinner">
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-dark" role="status">
                <!-- <img src="assets/images/logo-small.png" alt="">  -->
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <?php include 'header.php' ?>
    <main>
        <div class="heading">Welcome, <strong><?php echo $_SESSION['FirstName'] . "  " . $_SESSION['LastName'] ?></strong></div>
        <div style="display:flex">
        <table class="table-1 table table-hover">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td class="dashboard" style="height: 20px;">Dashboard</td>
                    </tr>
                    <tr>
                        <td class="servicehistory" style="height: 20px;">Service History</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Service Schedule</td>
                    </tr>
                    <tr style="background-color: #0C4651;">
                        <td class="favorite" style="height: 20px;">Favourite Pros</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Invoices</td>
                    </tr>
                    <tr>
                        <td>Notifications</td>
                    </tr>
                </tbody>
            </table>
            <table id="example" class="display responsive table-hove" style="color: #4f4f4f; width:100%">
                <thead style="display: none;">
                </thead>
                <tbody>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
    </main>
    <?php include 'footer.php';
    include 'cusfavajax.php' ?>
    <script>
        $(".dashboard").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        });
        $(".servicehistory").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=Servicehistory"
        });
        $(".favorite").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=favoritepros"
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>