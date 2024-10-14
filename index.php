<?php include 'header.php'; ?>

<main>
    <?php
    // Controle de páginas dinâmico
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        
        switch ($page) {
            case 'home':
                include 'home.php';
                break;
            case 'horror':
                include 'horror.php';
                break;
            case 'afterpay':
                include 'afterpay.php';
                break;
            default:
                echo "<h1>Página não encontrada</h1>";
        }
    } else {
        include 'home.php'; // Página inicial padrão
    }
    ?>
</main>

<?php include 'footer.php'; ?>

