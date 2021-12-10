<!--
Name: Natalia Ksenz
Final project
Purpose: Creation of a full featured MVC website

Filename: news_template.php
-->

<div>
  {news}
    <span>
      <h3>{title}</h3>
      <p>{text}</p>
      <a href="/news/{slug}">Read more...</a>
    </span>
  {/news}
  <br>
</div>
