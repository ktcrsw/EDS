<?php include "header.php"; ?>
<link rel="stylesheet" href="admin.css">

<body>
    <!-- Side-Nav -->
    <div class="side-navbar active-nav justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-10">
            <a href="#" class="nav-link h3 text-white my-2">
                <?php echo $_SESSION['username']; ?> </br>EDS - System
            </a>
            <li href="#" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">User Management</span>
            </li>
        </ul>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light bg-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>
        <!--End Top Nav -->

    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<script src="js/nav.js" type="text/javascript"></script>
<script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
    });
</script>