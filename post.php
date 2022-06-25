<?php 
include_once('./includes/header.php'); 

if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }  
    }
    
} else {
    header("Location: index.php");
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?php echo $currentPost['title']; ?></h1>
        <p id="post-description"><?php echo $currentPost['description']; ?></p>
        <div class="img-container">
            <img src="<?php echo BASE_URL . 'img/' .$currentPost['img']?>" alt="<?php echo $currentPost['title']; ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque placeat, rerum, quisquam quasi consectetur, quod sapiente eligendi fuga aut nesciunt sit. Autem deleniti obcaecati iste repellendus atque eligendi sapiente.
        Pariatur reiciendis incidunt expedita esse ad, suscipit consectetur eligendi et omnis provident possimus vero odit, ducimus ipsum tempora quos. Non magni doloremque quia earum repudiandae facere commodi nihil placeat cupiditate.
        Ipsa, eum et aspernatur perspiciatis maiores obcaecati nostrum harum, voluptatibus assumenda autem eos animi quaerat delectus minus? Cupiditate animi consectetur fugiat ea. Consectetur dolorum expedita debitis eos, qui repellendus minus?
        Quia impedit tempore quod dolorem perspiciatis provident ea nisi obcaecati ipsa ex possimus architecto maiores iste porro, debitis quo unde recusandae esse. Suscipit eius explicabo consequatur officia inventore. Expedita, a!
        Id nobis dolor fugiat consectetur, similique possimus sunt, ratione explicabo totam recusandae quis deleniti quisquam porro inventore, laboriosam minus sed! Odit saepe amet perspiciatis, illum ab eaque esse cumque perferendis!</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque placeat, rerum, quisquam quasi consectetur, quod sapiente eligendi fuga aut nesciunt sit. Autem deleniti obcaecati iste repellendus atque eligendi sapiente.
        Pariatur reiciendis incidunt expedita esse ad, suscipit consectetur eligendi et omnis provident possimus vero odit, ducimus ipsum tempora quos. Non magni doloremque quia earum repudiandae facere commodi nihil placeat cupiditate.
        Ipsa, eum et aspernatur perspiciatis maiores obcaecati nostrum harum, voluptatibus assumenda autem eos animi quaerat delectus minus? Cupiditate animi consectetur fugiat ea. Consectetur dolorum expedita debitis eos, qui repellendus minus?
        Quia impedit tempore quod dolorem perspiciatis provident ea nisi obcaecati ipsa ex possimus architecto maiores iste porro, debitis quo unde recusandae esse. Suscipit eius explicabo consequatur officia inventore. Expedita, a!
        Id nobis dolor fugiat consectetur, similique possimus sunt, ratione explicabo totam recusandae quis deleniti quisquam porro inventore, laboriosam minus sed! Odit saepe amet perspiciatis, illum ab eaque esse cumque perferendis!</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque placeat, rerum, quisquam quasi consectetur, quod sapiente eligendi fuga aut nesciunt sit. Autem deleniti obcaecati iste repellendus atque eligendi sapiente.
        Pariatur reiciendis incidunt expedita esse ad, suscipit consectetur eligendi et omnis provident possimus vero odit, ducimus ipsum tempora quos. Non magni doloremque quia earum repudiandae facere commodi nihil placeat cupiditate.
        Ipsa, eum et aspernatur perspiciatis maiores obcaecati nostrum harum, voluptatibus assumenda autem eos animi quaerat delectus minus? Cupiditate animi consectetur fugiat ea. Consectetur dolorum expedita debitis eos, qui repellendus minus?
        Quia impedit tempore quod dolorem perspiciatis provident ea nisi obcaecati ipsa ex possimus architecto maiores iste porro, debitis quo unde recusandae esse. Suscipit eius explicabo consequatur officia inventore. Expedita, a!
        Id nobis dolor fugiat consectetur, similique possimus sunt, ratione explicabo totam recusandae quis deleniti quisquam porro inventore, laboriosam minus sed! Odit saepe amet perspiciatis, illum ab eaque esse cumque perferendis!</p>
    </div>    

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) { ?>
                <li><a href="<?php echo BASE_URL; ?>tags.php?tag=<?php echo $tag; ?>"><?php echo $tag; ?></a></li>
            <?php } ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) { ?>
                <li><a href="<?php echo BASE_URL; ?>tags.php?tag=<?php echo $category; ?>"><?php echo $category; ?></a></li>
            <?php } ?>
        </ul>
    </aside>
</main>


<?php include_once('./includes/footer.php'); ?>