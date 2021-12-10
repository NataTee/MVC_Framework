<!--
Name: Natalia Ksenz
Final project
Purpose: Creation of a full featured MVC website

Filename: news_template.php
-->

<div>
  {news}
    <div class="importance-{importance}">
      <h3><img src="../../assets/images/star.png">{title}</h3>
      <p>{text}</p>
      <a href="/news/{slug}">Read more...</a>
    </div>
  {/news}
  <br>
</div>
