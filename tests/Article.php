<?php /** @noinspection ALL */

use App\Exceptions\DbErrorException;
use App\Exceptions\RecordNotFoundException;
use App\Models\Article;

require __DIR__ . '/../autoload.php';

$id = '1';
$article = Article::findById($id);
assert($article instanceof Article);
assert($id === $article->id);

$id = '80';
try {
    $article = Article::findById($id);
    assert(is_bool($article));
    assert(false === $article);
} catch (DbErrorException | RecordNotFoundException $e) {
}

$limit = 3;
$articles = Article::getAllLast($limit);
assert($limit === count($articles));

$article = Article::findById(1);
assert($article->update());

$article = Article::findById(3);
$author = $article->author;
assert($author instanceof \App\Models\Author);

try {
    $article = Article::findById(80);
    assert(false === $article);
} catch (DbErrorException | RecordNotFoundException $e) {
}

$article = Article::findById(1);
$arr = [
    'title'     => 'Test title',
    'content'   => 'Test content',
];
try {
    $article->fill($arr);
} catch (Throwable $e) {
    foreach ($e->getAll() as $exception) {
        echo $exception->getMessage();
    }
}
