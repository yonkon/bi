{extends file="layout.tpl"}
{block name="content"}
{assign var=news_params value=[
    "where" => [
    "parent:=" => "1"
    ]
]}

{processor action="web/getdata" ns="shopmodx" assign="news" params=$news_params}

{assign var=object value=$news.object[18]}
<div class="news col-xs-9">
    <div class="lentanews uppercase col-xs-12 nrp5">
      <span><h1>{$object.pagetitle}</h1></span>
      <a href="#" class="rss"></a>
    </div>
    <div class="newstext col-xs-12 np"><a href="[[~{$object.id}]]"> <img src="{$object.tvs.article_image.value}" class="newsimg col-xs-8 nlp"> </a>
      <!--<div class="col-xs-4">-->
      <span class="justify">
        <a href="[[~{$object.id}]]"><h3 class="article-name margin-t0"> {$object.longtitle}</h3></a>
        <div class="calendar"><span>{$object.publishedon|date_format:"%Y/%m/%d"}</span></div>
        <span>{$object.content}</span>
        <a href="[[~{$object.id}]]" class="col-xs-12 np details-link">Подробнее</a>
      </span>
      <!--</div>-->
    </div>
</div>
  {snippet name=right_content1}
{assign var=object value=$news.object[6]}  
  <div class="articles col-xs-9">
    <div class="article col-xs-4 nlp">
      <div class="lentaarticles master-class col-xs-12 nrp nlp5"><span>{$object.pagetitle}</span></div>
      <div class="article-text col-xs-12 np">
        <a href="[[~{$object.id}]]"> <img src="{$object.tvs.article_image.value}" class="article-img col-xs-12 np"></a>
        <div class="col-xs-12 margin-t1em np">
          <span>{$object.content}</span>
          <a href="[[~{$object.id}]]" class="col-xs-12 np details-link">Подробнее</a>
        </div>
      </div>
    </div>
{assign var=object value=$news.object[7]}      
    <div class="article col-xs-4 nlp">
      <div class="lentaarticles persones col-xs-12 nrp nlp5"><span>{$object.pagetitle}</span></div>
      <div class="article-text col-xs-12 np"><a href="[[~{$object.id}]]"> <img src="{$object.tvs.article_image.value}" class="article-img col-xs-12 np"> </a>
        <a href="[[~{$object.id}]]"><h3 class="article-name col-xs-12 np margin-t1em margin-b1em small">{$object.longtitle}</h3></a>
        <span>{$object.content}</span>
        <a href="[[~{$object.id}]]" class="col-xs-12 np details-link">Подробнее</a>
      </div>
    </div>
{assign var=object value=$news.object[8]}          
    <div class="article col-xs-4 nlp">
      <div class="lentaarticles art col-xs-12 nrp nlp5"><span>{$object.pagetitle}</span></div>
      <div class="article-text col-xs-12 np"><a href="[[~{$object.id}]]"> <img src="{$object.tvs.article_image.value}" class="article-img col-xs-12 np"> </a>
        <a href="[[~{$object.id}]]"><h3 class="article-name col-xs-12 np margin-t1em margin-b1em small">{$object.longtitle}</h3></a>
        <span>{$object.content}</span>
        <a href="[[~{$object.id}]]" class="col-xs-12 np details-link">Подробнее</a>
      </div>
    </div>
  </div>
  
{chunk name=right_social}  
{/block}

