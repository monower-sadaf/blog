<style>
    .sidepanel {
        width: 0;
        position: fixed;
        z-index: 1;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidepanel a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidepanel a:hover {
        color: #f1f1f1;
    }

    .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
    }

    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
    }

    .openbtn:hover {
        background-color: #444;
    }
</style>


<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <x-menu />
</div>

<button class="openbtn" onclick="openNav()">☰</button>

<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>