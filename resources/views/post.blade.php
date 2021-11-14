@extends('layout')

@section('content')
    <article>
        <h1><?= e($post-> title); ?></h1>
        <p>
            <a href="/categories/<?= $post->category->slug ?>">
                <?= $post->category->name ?>
            </a>
        </p>
        <div>
            <p>
                <?= e($post->body); ?>
            </p>
        </div>
    </article>
    <a href="/">Go back</a>
@endsection