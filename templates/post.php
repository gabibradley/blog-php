<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost
        ['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloremque, maxime harum dolorum illum quod quis et asperiores earum tenetur amet omnis
        repellat similique nobis neque culpa eos voluptate architecto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae architecto in nulla quaerat neque
        officia et illum, odio, perferendis assumenda ad quod, debitis quae accusantium quia? Quia quos ipsam hic! Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Eum unde aut nostrum, corporis numquam magnam amet deleniti iure omnis voluptatibus a labore blanditiis veritatis? Consequuntur tempore repellat officiis sunt est.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint id, enim dignissimos adipisci fugit ea laborum molestiae ducimus mollitia dolorum vero error iure 
        aliquid laboriosam fugiat iusto eveniet. Necessitatibus.</p>
    </div>
</main>
<?php
include_once("templates/footer.php")
?>