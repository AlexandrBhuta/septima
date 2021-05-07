 <script>
document.addEventListener('readystatechange', event => { 
    if (event.target.readyState === "complete") {
        function addElement() {
    var newDiv = document.createElement("div");
        newDiv.innerHTML = "<h6 style='text-align:center;'>test</h6>";
        my_div = document.getElementById("customCss");
    document.body.insertBefore(newDiv, my_div);
  };
  addElement();
    }
});
</script>

<?php
// last-modified
header('Expires: '.gmdate('D, d M Y H:i:s', time() + 7200).' GMT');
header('Cache-Control: no-cache, must-revalidate');
$mt = filemtime($file_name);
$mt_str = gmdate("D, d M Y H:i:s ")."GMT";
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) &&
strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $mt)
{header('HTTP/1.1 304 Not Modified');
die;
}
header('Last-Modified: '.$mt_str);
echo $text;
header("Vary: Accept-Encoding");
header("Accept-Encoding:gzip,deflate,sdch");
?>
<?php 
global $post;
if($post->post_type == 'page' && $post->ID == '11'){
   echo '  <meta name="keywords" content="налоговая отчетность, сдача отчетности, бухгалтерское сопровождение, кадровое делопроизводство, услуги расчета заработной платы, восстановление бухгалтерского учета, регистрация ИП, ООО ликвидация, консультант по налогам, услуги бухгалтера" />';
};
?>