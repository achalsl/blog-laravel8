@extends ('layout')

@section('content')
    <?php foreach($posts as $post) : ?>
        <article>
                <h1>
                    <a href="/posts/<?= $post->id ?>">
                        <?= $post->title ?>
                    </a>
                </h1>
                <p>
                    By 
                    <a href="/users/<?= $post->user->id ?>">
                        <?= $post->user->name; ?>
                    </a> in 
                    <a href="/categories/<?= $post->category->slug ?>">
                        <?= $post->category->name ?>
                    </a>
                </p>
                <div>
                    <?= $post->excerpt ?>
                </div>
        </article>
    <?php endforeach; ?>
@endsection
   