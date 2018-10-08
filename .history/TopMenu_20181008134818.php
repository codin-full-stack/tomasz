<?php
    $json = file_get_contents('menuJson/dzeksonas.json');
    $array = json_decode($json, true);
    $array = $array['menu']['items'];
    foreach ($array as $key => $value) {
        if (!empty($value)) {
            ?>
            <a href="<?php echo $value['id']; ?>">
                <?php 
                    if (!empty($value['label'])) {
                        echo $value['label'];
                    } else {
                        echo "empty label";
                    }
                ?> 
            </a>
            &nbsp;
        <?php 
        }
    }
?>

<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>