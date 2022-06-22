<?php require_once "header.php"; ?>

<div class="container-fluid">
    <div class="row main_container">
        <!-- sidebar  -->
        <div class="col-3 p-0">
            <div class="row m-2 sidebar">
                <div class="col-12 p-0">
                    <div class="admin_menu">
                        <a href="index.php" class="active">Dashboard</a>
                        <a href="pages.php">Pages</a>
                        <a href="settings.php">Settings</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content  -->
        <div class="col-9 p-0">
            <div class="row m-2 main_content">
                <div class="col-12 p-0">
                    <span class="subhead justify-content-between">
                        <h2>Total Stocks</h2>
                        <a href="#" class="btn btn-secondary">Add new</a>
                    </span>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once "footer.php"; ?>