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
          <form action="main.php" method="post">
            <input type="text" name="degree" />
            <button type="submit">Check</button>
          </form>
        </body>
      </html>                     
    HTML_FRAGMENT;
  }
?>

