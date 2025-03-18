<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        var main = document.querySelector("main");
        sidebar.classList.toggle("active");
        main.classList.toggle("sidebar-active");
    }
</script>
