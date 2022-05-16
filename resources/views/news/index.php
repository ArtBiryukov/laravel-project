<?php foreach($newsList as $news): ?>

<div class="news">
  <img src="<?= $news['img']?>" alt="photo">
 <a href="/news/<?= $news['id']?>"><?= $news['title']?></a>
 <br>
 <p><strong>Автор:</strong><?= $news['author']?></p>
 <p><strong>Автор:</strong><?= $news['description']?></p>
</div>

<?php endforeach; ?>