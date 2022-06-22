<?php require_once "header.php"; ?>

<div class="container-fluid">
    <div class="row main_container">
        <!-- sidebar  -->
        <div class="col-3 p-0">
            <div class="row m-2 sidebar">
                <div class="col-12 p-0">
                    <div class="admin_menu">
                    <a href="index.php">Dashboard</a>
                        <a href="pages.php"  class="active">Pages</a>
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
                        <h2>Pages</h2>
                        <a href="#" class="btn btn-secondary">Add new</a>
                    </span>
                  
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once "footer.php"; ?>