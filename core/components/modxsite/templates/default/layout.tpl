{chunk name="html_head"}
    {block name=head_custom}{/block}
</head>
<body>

{block name=before_header}{/block}
{block name=header}{chunk name="body_header"}{/block}
{block name=after_header}{/block}

{block name=before_content}
<div class="content container">
  <div class="menu1 col-xs-12">
    <menu class="horizontal uppercase main-menu col-xs-12 np">
      <li class="active"><a href="index.html">Главная</a></li>
      <li><a href="opizdanii.html">Об издании</a></li>
      <li><a href="articles.html">Статьи</a></li>
      <li><a href="partners.html">Партнёры</a></li>
      <li><a href="foto-video.html">Фото и Видео</a></li>
      <li><a href="contacts.html">Контакты</a></li>
      <li><a href="#">Реклама</a></li>
      <li><a href="#">Подписка</a></li>
    </menu>
  </div>
{/block}
{block name=content}[[*content]]{/block}

{block name=after_content}
</div>
{/block}

{block name=footer}{include file="tpl/footer.tpl"}{/block}

{block name=body_closed}{/block}

</body>
</html>