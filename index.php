<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<div id="principal">
    <h1 id="enter"></h1>
    <article class="entrada">
        <h2>Titulo de la entrada</h2>
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Libero voluptas eius dolores ipsam sapiente facilis sunt quisquam doloremque,
            accusantium dignissimos sed cupiditate iste odio minima earum nulla fugit dolorem eligendi?</p>
    </article>
    <div id="ver-todas">
        <a href="#"> Ver todas las entradas </a>
    </div>
    <?php require_once 'includes/footer.php'; ?>
    </body>

    </html>
    <script async>
        window.onload = function() {
            var fecha = new Date();
            var month = fecha.getMonth() + 1;
            var day = fecha.getDate();
            var year = fecha.getFullYear();
            if (day < 10)
                day = '0' + day;
            if (month < 10)
                month = '0' + month
            document.getElementById('enter').innerHTML = "Ultimas Entradas&nbsp;" + day + "-" + month + "-" + year;
            document.getElementById('fo').innerHTML = "by Jorg Viloria&nbsp;" + "&copy;&nbsp;" + year;
        } 
    </script>