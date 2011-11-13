<?php if (count($lep->tpl["resources"])) : ?>

  <?php foreach ($lep->tpl["resources"] as $k => $v) { ?>
    
    <div class="post">

      <a href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>" alt="<?php print $v['title'] ?>">
        <img class="thumbnail alignleft" src="http://open.thumbshots.org/image.aspx?url=<?php print $v['url'] ?>" alt="<?php print $v['title'] ?>" style="border:1px solid #777;"></a>

      <h2 class="title"><a title="<?php print $v['title'] ?>" rel="bookmark" href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>"><?php print $v['title'] ?></a></h2>

      <p class="post-meta">
        <span class="post-date"><span class="small">Added since </span> <?php print date('F d, Y',$v['created_at']) ?></span>

        <?php if ($v['user_id']): ?>
          <span class="post-author"><span class="small">by</span> <?php print $v['user_id'] ?></span>
        <?php endif ?>
        <span class="post-category"><span class="small">in</span> <?php print cat_get_category_path_url($v['category_id']); ?></span>
      </p>

      <?php if ($v['description']): ?>
        <div class="entry"><?php print $v['description'] ?></div>
      <?php endif ?>

      <div class="fix"></div>

      <div class="post-more">      
        <span class="comments"><a href="<?php print $v['url'] ?>" name="link_<?php print $v['res_id'] ?>" title="Visit <?php print $v['title'] ?>">Visit website</a></span>
        <span class="post-more-sep">•</span>
        <span class="read-more"><a title="View Detail" href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>">View Detail →</a></span>
      </div>
                                                    
      <div class="fix"></div>
    </div> <!--/.post -->

  
  <?php } ?>
  <?php else : ?>
    <div>
      <p><?php print _t('There is no listing here.') ?></p> 
      <p><a class="mybutton s_button green" href="add.php"><?php print _t('Submit new listing') ?></a></p>
    </div>
<?php endif; ?>