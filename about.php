<?php
include("./includes/common.php");
$title = "关于 - " . $conf['title'];
include SYSTEM_ROOT.'header.php';
$numrows = $DB->getColumn("SELECT count(*) FROM pre_file WHERE hide=0");
?>

<main id="main-container">"<div class="bg-body-extra-light">
<!-- 以下是可编辑区域 -->
<!-- EDITABLE_START -->
<h1>关于我们</h1>
<p>这是网站的关于页面，用户可以编辑这里的内容。</p>
<p>联系方式：contact@example.com</p>
<!-- EDITABLE_END -->
<!-- 以上是可编辑区域 -->
</div></main>

<?php include SYSTEM_ROOT . 'footer.php'; ?>
            
                <script src="//cdn.staticfile.org/snackbarjs/1.1.0/snackbar.min.js"></script>
                <link href="//cdn.staticfile.org/snackbarjs/1.1.0/snackbar.min.css" rel="stylesheet">
              
            </div>
        </div>
    
