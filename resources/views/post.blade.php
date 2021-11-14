@extends('layout')

@section('content')
    <article>
        <h1><?= e($post-> title); ?></h1>
        <p>
            By 
            <a href="/users/<?= $post->user->id ?>/posts">
                <?= $post->user->name; ?>
            </a> in 
            <a href="/categories/<?= $post->category->slug ?>">
                <?= $post->category->name; ?>
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