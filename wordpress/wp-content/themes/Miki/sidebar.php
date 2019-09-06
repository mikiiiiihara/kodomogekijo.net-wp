<div class="sidebar">
<div class = "tag-list">
      <h2 class = "left-liner">タグ一覧</h2>
    <ul>
<?php
$posttags = get_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo '<li class= "tag-each"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> ('. $tag->count . ")</li>";
}         
}
?>
</ul>
	</div>

<div class = "archive-lists">
<h2 class = "left-liner">更新月一覧</h2>
<ul class="archive-list">
<?php
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                    YEAR( post_date ) AS year,
                                    COUNT( id ) as post_count FROM $wpdb->posts
                                    WHERE post_status = 'publish' and post_date <= now( )
                                    and post_type = 'post'
                                    GROUP BY month , year
                                    ORDER BY post_date DESC");
foreach($months as $month) :
$year_current = $month->year;
if ($year_current != $year_prev){
if ($year_prev != null){?>
            </ul></li>
        <?php } ?>
<li><h2><span><?php echo $month->year; ?></h2></span><ul>
    <?php } ?>
    <li>
        <a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
            <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
            (<?php echo $month->post_count; ?>)
        </a>
    </li>
    <?php $year_prev = $year_current;
    endforeach; ?>
</ul></li></ul>
</div>
</div>