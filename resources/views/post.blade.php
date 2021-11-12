@extends('layout')

@section('content')
    <article>
        <h1><?= e($post-> title); ?></h1>
        <div>
            <p>
                <?= e($post->body); ?>
            </p>
        </div>
    </article>
    <a href="/">Go back</a>
@endsection