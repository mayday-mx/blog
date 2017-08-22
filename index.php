<?php
/**
 * 一款极适合书写、创作、阅读的简洁风格主题。
 * 
 * @package book
 * @author hewro
 * @version 1.5
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="footer-clear page-wrapper"> 
   <div class="page-container"> 
    <div class="index-wrapper"> 
     <?php $this->widget('Widget_Contents_Post_Recent','pageSize=1')->parse('<a class="link-1" href="{permalink}">Post</a> /'); ?>
     
     <a class="link-1" href="<?php Helper::options()->siteUrl()?>index.php/about.html">About</a> / 
     
    <?php if (!empty($this->options->IndexShow) && in_array('ShowArchive', $this->options->IndexShow)): ?>

     <a class="link-1" href="<?php Helper::options()->siteUrl()?>index.php/archive.html">Category</a></br></br>
	 你的病也和我的一样 风月难扯 离合不骚</br>
	 层楼终究误少年 自由早晚乱余生</br>
	 你我山前没相见 山后别相逢</br>
 <?php endif; ?>
    </div> 
   </div> 
   


<?php $this->need('footer.php'); ?>
