<div class="wrapper">
<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="index.php">SKAGATA</a>
        </div>
    </div>
    <ul class="sidebar-nav ">
        <li class="sidebar-item">
        <a class="sidebar-link cursor-not-allowed opacity-50">
                <i class="lni lni-user"></i>
                <span>Profil Sekolah</span>
            </a>
        </li>   
                <li class="sidebar-item">
            <a href="berita.php" class="sidebar-link">
                <i class="lni lni-popup"></i>
                <span>Berita Terbaru</span>
            </a>
        </li>
                </ul>
                <div class="sidebar-footer">
    <a href="javascript:history.back()" class="sidebar-link">
        <i class="lni lni-chevron-left"></i>
        <span>Back</span>
    </a>
</div>

    <div class="sidebar-footer">
        <a href="login.php" class="sidebar-link">
            <i class="lni lni-control-panel"></i>
            <span>Login</span>
        </a>
</div>
</aside>
<div class="main p-3">
        <?php
        include 'profile_content.php';
        ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
