<?php include_once('./includes/header.php') ?>

<main>
  <div id="title-container">
    <h1>Blog Codar</h1>
    <p>O seu blog de programação !</p>
  </div>

  <div id="post-container" style="display: flex;">
    <?php foreach ($posts as $post) { ?>
      <div class="post-box">
        <img src="<?php echo BASE_URL . 'img/' . $post['img']; ?>" alt="<?php echo $post['title']; ?>">
            <h2 class="post-title"><a href="<?php echo BASE_URL; ?>post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
            <p class="post-description"><?php echo $post['description'] ?></p>

          <div class="tags-container">
          <?php foreach ($post['tags'] as $tag) { ?>
            <a href="<?php echo BASE_URL; ?>tags.php?tag=<?php echo $tag; ?>"><?php echo $tag; ?></a>
          <?php } ?>

          </div>
      </div>
    <?php } ?>

  </div>

</main>

<?php include_once('./includes/footer.php') ?>

