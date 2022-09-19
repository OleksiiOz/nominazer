 <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

// удаление сессии с куки
    if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null) {
        header('Location: /'); 
        setcookie('user_id', '', 0, '/');
    }  

// удаление сессии на сервере
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
        $_SESSION['user_id'] = null;
        header('Location: /');
    }   
?>
