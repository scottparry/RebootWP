<?php
/**
 * Title: Grid Posts
 * Slug: posts-list-grid
 * Description: Grid Posts List
 * Categories: rebootwp/posts
 * Keywords: posts, grid, query, blog, layout, template, block
 * Viewport Width: 1360
 * Template Types:
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:spacer {"height":"75px"} -->
<div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"query":{"perPage":9,"pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"name":""},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"metadata":{"name":""},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1385px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-template {"metadata":{"name":""},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3},"fontSize":"large"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"backgroundColor":"light-grey"} -->
<div class="wp-block-group has-light-grey-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"lowercase"}},"textColor":"secondary","fontSize":"xx-small"} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.5"}},"className":"is-style-excerpt-truncate-3","fontSize":"small"} /-->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"xx-small"} /-->

<!-- wp:read-more {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}}},"textColor":"primary-accent","className":"is-style-rebootwp-read-more-gradient","fontSize":"medium-stretch"} /-->

<!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>Sorry, nothing to see right now.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1360px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;padding-top:0"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<!-- wp:query-pagination-previous {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-default"} /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:query-pagination-next {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-default"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","theme":"reboot"} /-->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->