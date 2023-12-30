<?php
include_once("templates/header.php");
?>

<body>
    <main>
        <div id="title-container">
            <h1>Viagens e Tecnologia:</h1>
            <p>Blog de programacao e viagens</p>
        </div>
        <div id="posts-container">
            <?php foreach ($posts as $post) : ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>"><?= $post['title']?></a>
                    </h2>
                    <p class="post-description"><?= $post['description']?></p>
                    <div class="tags-container">
                       <?php foreach ($post['tags'] as $tag):?> 
                        <?php endforeach; ?>
                        <a href="#"><?= $tag ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php
    include_once("templates/footer.php")
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>