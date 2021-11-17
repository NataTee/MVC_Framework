<h2><?=$title?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?=$news_item['title']?></h3>
        <div class="main-news">
                <?=$news_item['text']?>
                <br>
                <p><a href="<?='/news/'.$news_item['slug']?>">Read more...</a></p>
        </div>
        
<?php endforeach; ?>
