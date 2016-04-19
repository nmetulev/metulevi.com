<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ( $_POST['payload'] ) {
  echo shell_exec( 'cd .. && git reset --hard HEAD && git pull' );
}
else
  echo "Hi there!";
?>