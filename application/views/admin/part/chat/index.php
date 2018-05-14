<div class="container">
  <?php
  $uids = array();
  $temp = '';
   foreach ($chats as $chat){
     if($chat->uid_sender!==$temp){
       array_push($uids,$temp = $chat->uid_sender);
     }
  }
  ?>
  <?php foreach ($uids as $uid): ?>
    <button class="btn btn-primary" type="button" name="button"><?php echo $uid; ?></button>
  <?php endforeach; ?>
  <br>
</div>
