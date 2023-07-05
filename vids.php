<?php
forEach(glob('*.mp4') as $file){
    echo "<video src=\"$file\" loop></video>";
  }
?>
