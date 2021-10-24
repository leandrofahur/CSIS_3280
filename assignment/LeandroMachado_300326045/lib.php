<?php
  function display_html_head($page_title) {
    echo <<<HTML_FRAGMENT
      <html>
        <head>
          <title>$page_title</title>
        </head>
        <body>
    HTML_FRAGMENT;
  }

  function display_html_footer() {
    echo <<<HTML_FRAGMENT
        </body>
      </html>              
    HTML_FRAGMENT;
  }
?>

