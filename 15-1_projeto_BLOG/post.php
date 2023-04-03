<?php

    include_once("templates/header.php");

    if (isset($_GET["id"])) {

        $postId = $_GET["id"];
        $currentPost;

        foreach ($posts as $post) {

            if ($post["id"] == $postId) {
                $currentPost = $post;
            }

        }

    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"]?>" alt="<?= $currentPost["title"] ?>">
            </div>
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas earum eveniet sint dolorum repudiandae ipsam magnam? Ab atque quaerat, quasi impedit laboriosam blanditiis amet iste dolores numquam? At, officiis enim! Dolore provident, velit ab aspernatur temporibus deleniti quisquam nihil labore corporis? Nobis alias nemo officiis numquam voluptatem repudiandae quisquam eum! Repudiandae quia quasi similique ratione veniam modi assumenda magnam aliquam, est, delectus ipsa quos rerum ex eligendi corrupti qui enim minus recusandae eius totam officiis. Fugit totam soluta laudantium exercitationem, alias cum reiciendis, autem dignissimos nemo enim atque expedita recusandae eius. Ratione velit corporis sequi itaque rem, distinctio officiis dicta sunt reiciendis atque! Adipisci corporis eos voluptatem dolor ducimus, ipsam atque voluptatibus, culpa explicabo et voluptatum possimus animi quo quod corrupti nisi consequuntur. Numquam sit odit in dolore enim voluptatum necessitatibus, doloremque molestiae illo delectus asperiores impedit reiciendis similique ullam provident esse culpa rerum, eos explicabo. Distinctio optio molestiae facere dolorem odit, veniam provident, officia ab, ut vero exercitationem excepturi nesciunt ullam et nemo quibusdam. Aperiam, provident adipisci laudantium quibusdam magnam doloribus architecto maiores cupiditate quisquam, non ipsam ad natus earum vitae tempore omnis! Vitae dignissimos, voluptates natus eligendi mollitia nulla veritatis accusantium ipsa commodi harum nisi eos, expedita magni nihil veniam dolore enim eveniet id accusamus! Quod suscipit velit repellendus accusamus. Ullam a amet consectetur, possimus ipsa quidem excepturi eligendi praesentium repudiandae veniam est incidunt odio nemo placeat omnis sapiente debitis animi dolore reiciendis ut? Consequuntur officia, voluptates quia debitis nam necessitatibus minima illo repudiandae culpa officiis! Corporis aspernatur inventore beatae excepturi perferendis minima modi libero ut laboriosam quo earum enim autem commodi dolorem reiciendis est nihil voluptates reprehenderit ducimus dicta dolore voluptatibus sit, laborum sint. Placeat illo vero ipsa ipsum magnam debitis aliquam magni doloremque repellendus, cupiditate modi non nesciunt temporibus repudiandae nostrum possimus, eaque asperiores harum expedita molestias. Cum, minus vel repellendus, tenetur necessitatibus eveniet optio totam dolores sequi maiores accusantium atque. Aperiam laboriosam, in consequatur provident dolorem fuga, illo doloremque nisi unde ea maxime tempora consectetur cupiditate amet sit ab animi dolorum aspernatur! Explicabo cumque recusandae labore pariatur eligendi ea rerum ullam perspiciatis maxime. Eos earum minus sunt tempora vero possimus eius et fugiat laborum totam dolorum accusantium minima ex, aspernatur voluptatum libero provident nesciunt numquam a vitae natus rem inventore. Expedita exercitationem soluta animi iusto laudantium unde tempore consequatur aperiam commodi, atque officia aliquid sapiente vel dolores corporis libero ab veniam aut, doloribus fuga possimus! Dolore quia quasi provident est eum reiciendis dolores veritatis, aut quam neque laudantium amet voluptatem, incidunt consectetur dignissimos iusto voluptates, omnis soluta excepturi quidem labore delectus. Atque ut et corporis quasi numquam error, beatae voluptas ea provident. Pariatur, modi consequuntur iste sit sed et, quo nesciunt dicta quas excepturi, assumenda ipsa? Dignissimos fugit eaque placeat, vero voluptatem suscipit nostrum dolor quasi ad sed sequi voluptatibus! Corrupti quibusdam ea distinctio labore totam, iste voluptas eaque adipisci sed nesciunt vitae, mollitia excepturi soluta aspernatur commodi obcaecati fugiat. Ab explicabo necessitatibus eos minima officiis nostrum illo repellendus! Harum quidem nostrum quis porro alias.
        </p>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul class="tags-list">
                <?php foreach($currentPost["tags"] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categorie-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php

    include_once("templates/footer.php")

?>