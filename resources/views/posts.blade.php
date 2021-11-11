<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
        <h1><a href="/posts/my-first-post">My First Post</a></h1>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sequi nisi autem nesciunt, eius cum, laudantium pariatur eaque ad vitae cumque vero dignissimos alias quam illum, repudiandae sit doloribus eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nisi, quod commodi voluptates iusto blanditiis non numquam eaque aperiam, cupiditate nesciunt tempora eveniet iure ratione. Eaque, corrupti. Quia, eaque. Alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti fuga est quos labore eligendi aliquid reiciendis, quam praesentium soluta non. Consequuntur non quibusdam corrupti commodi explicabo aliquid. Dignissimos, voluptate?
        </p>
    </article>
    <article>
        <h1><a href="/posts/my-second-post">My Second Post</a></h1>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sequi nisi autem nesciunt, eius cum, laudantium pariatur eaque ad vitae cumque vero dignissimos alias quam illum, repudiandae sit doloribus eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nisi, quod commodi voluptates iusto blanditiis non numquam eaque aperiam, cupiditate nesciunt tempora eveniet iure ratione. Eaque, corrupti. Quia, eaque. Alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti fuga est quos labore eligendi aliquid reiciendis, quam praesentium soluta non. Consequuntur non quibusdam corrupti commodi explicabo aliquid. Dignissimos, voluptate?
        </p>
    </article>
    <article>
        <h1><a href="/posts/my-third-post">My Third Post</a></h1>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sequi nisi autem nesciunt, eius cum, laudantium pariatur eaque ad vitae cumque vero dignissimos alias quam illum, repudiandae sit doloribus eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nisi, quod commodi voluptates iusto blanditiis non numquam eaque aperiam, cupiditate nesciunt tempora eveniet iure ratione. Eaque, corrupti. Quia, eaque. Alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti fuga est quos labore eligendi aliquid reiciendis, quam praesentium soluta non. Consequuntur non quibusdam corrupti commodi explicabo aliquid. Dignissimos, voluptate?
        </p>
    </article>
    <?php foreach($posts as $post) : ?>
        <article>
                <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
</html>