
//
//require_once '../core/Router.php';
//require_once '../app/controllers/PostsController.php';
//
//echo "hello word";




<!-- Приклад файлу для головної сторінки з усіма записами -->
<?php foreach ($posts as $post): ?>
    <h2><?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
    <!-- Кнопки для редагування та видалення -->
<?php endforeach; ?>

