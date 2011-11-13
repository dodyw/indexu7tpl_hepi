<?php if (count($lep->tpl["comments"])) : ?>

	<ol class="commentlist">

	<?php $counter=0; ?>
  <?php foreach ($lep->tpl["comments"] as $k => $v) { ?>

  	<!-- odd / even -->
  	<?php  
  		$counter++;
  		if ($counter%2) {
  			$even_class = 'thread-even';
  		}
  		else {
  			$even_class = '';
  		}
  	?>

  	<!-- rating value -->
		<?php 
	    if ($v['rating']==1) {
	      $rating_val = _t("Poor");
	    }  
	    if ($v['rating']==2) {
	      $rating_val = _t("Not special");
	    }   
	    if ($v['rating']==3) {
	      $rating_val = _t("Good");
	    }   
	    if ($v['rating']==4) {
	      $rating_val = _t("Very Good");
	    }   
	    if ($v['rating']==5) {
	      $rating_val = _t("Excellent!");
	    }      
	  ?>	

	  <!-- gravatar -->
	  <?php 
	  	$query = "select email from lep_user where user_id = '{$v['user_id']}'";
	  	$email_address = $lep->db->GetOne($query);
	  	$gravatar_hash = md5(strtolower(trim($email_address)));
	  ?>
				  	
		<li class="comment <?php print $even_class ?>">

			<div class="comment-container">
				
      	<div class="avatar">
      		<img width="40" height="40" src="http://www.gravatar.com/avatar/<?php print $gravatar_hash ?>" alt="">
      	</div><!-- /.avatar -->

      	<div class="comment-head">
					<span class="name"><?php print user_get_username($v['user_id']) ?></span>    
          <span class="date"><?php print date('M d, Y',$v['created_at']) ?><!--January 11, 2010 at 3:19 pm--></span>
          ~ <span class="perma"><?php print $rating_val ?></span> 
					<br /><span class="perma"><?php print $v['subject'] ?></span>    
				</div><!-- /.comment-head -->

				<div id="comment-8" class="comment-entry">
					<p><?php print $v['comment'] ?></p>
				</div><!-- /comment-entry -->
			</div><!-- /.comment-container -->
		</li>
    	      
  <?php } ?>
  </ol>
<?php endif; ?>