<style media="screen">
body {
background: #e9e9e9;
color: #9a9a9a;
font: 100%/1.5em "Droid Sans", sans-serif;
margin: 0;
}

a { text-decoration: none; }

fieldset {
border: 0;
margin: 0;
padding: 0;
}

h4, h5 {
line-height: 1.5em;
margin: 0;
}

hr {
background: #e9e9e9;
  border: 0;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 1px;
  margin: 0;
  min-height: 1px;
}

img {
  border: 0;
  display: block;
  height: auto;
  max-width: 100%;
}

input {
border: 0;
color: inherit;
  font-family: inherit;
  font-size: 100%;
  line-height: normal;
  margin: 0;
}

p { margin: 0; }

.clearfix { *zoom: 1; } /* For IE 6/7 */
.clearfix:before, .clearfix:after {
  content: "";
  display: table;
}
.clearfix:after { clear: both; }

/* ---------- LIVE-CHAT ---------- */


#live-chat {
bottom: 0;
font-size: 12px;
right: 24px;
position: fixed;
width: 300px;
}

#live-chat header {
background: #293239;
border-radius: 5px 5px 0 0;
color: #fff;
cursor: pointer;
padding: 16px 24px;
}

#live-chat h4:before {
background: #1a8a34;
border-radius: 50%;
content: "";
display: inline-block;
height: 8px;
margin: 0 8px 0 0;
width: 8px;
}

#live-chat h4 {
font-size: 12px;
}

#live-chat h5 {
font-size: 10px;
}

#live-chat form {
padding: 24px;
}

#live-chat input[type="text"] {
border: 1px solid #ccc;
border-radius: 3px;
padding: 8px;
outline: none;
width: 234px;
}

.chat-message-counter {
background: #e62727;
border: 1px solid #fff;
border-radius: 50%;
display: none;
font-size: 12px;
font-weight: bold;
height: 28px;
left: 0;
line-height: 28px;
margin: -15px 0 0 -15px;
position: absolute;
text-align: center;
top: 0;
width: 28px;
}

.chat-close {
background: #1b2126;
border-radius: 50%;
color: #fff;
display: block;
float: right;
font-size: 10px;
height: 16px;
line-height: 16px;
margin: 2px 0 0 0;
text-align: center;
width: 16px;
}

.chat {
background: #fff;
}

.chat-history {
height: 252px;
padding: 8px 24px;
overflow-y: scroll;
}

.chat-message {
margin: 16px 0;
}

.chat-message img {
border-radius: 50%;
float: left;
}

.chat-message-content {
margin-left: 56px;
}

.chat-time {
float: right;
font-size: 10px;
}

.chat-feedback {
font-style: italic;
margin: 0 0 0 80px;
}
</style>

<div>
  <div id="live-chat">
    <header class="clearfix">
      <a href="#" class="chat-close">x</a>
      <h4>Admin</h4>
      <span class="chat-message-counter">0</span>
    </header>
    <div class="chat">
      <div id="chatku" class="chat-history">
        <?php
          if(isset($chats)){
            foreach ($chats->result() as $chat)
            {
              // echo $row->title;
              // echo $row->name;
              // echo $row->body;
              $strtime = strtotime($chat->timestamp);
              $time = date('H:i',$strtime);
              echo "
                <div class='chat-message clearfix'>
                  <img src='http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32' alt='' width='32' height='32'>
                  <div class='chat-message-content clearfix'>
                    <span class='chat-time'>$time</span>
                      <h5>$chat->uid_sender</h5>
                      <p>$chat->chat_message</p>
                  </div>
                </div>
                <hr>
              ";
            }
          }
         ?>
      </div>
    			<!-- <p class="chat-feedback">Your partner is typing…</p> -->
  		<!-- <form action="sendchat" method="post"> -->
      <form>
  			<fieldset>
  				<input class="form-control" id="chat-input" type="text" name="chat_message" placeholder="Type your message…" autofocus>
  				<!-- <input type="hidden"> -->
          <input id="chat-ui-sender" style="display:none" type="text" name="uisender" value="<?php
            if(isset($chat)){
              echo $chat->uid_sender;
            }
          ?>">
          <input id="chat-time" style="display:none" type="time" name="timestamp" step="1" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("H:i"); ?>">
    		</fieldset>
    	</form>
    </div> <!-- end chat -->
  </div> <!-- end live-chat -->
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $("input").keypress(function(event) {
      if (event.which == 13) {
          event.preventDefault();
          //$("form").submit();
          //alert('halo');
          $.post("sendchat",
          {
            chat_message: $("#chat-input").val()
          },
          function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            var newChat = "<div class='chat-message clearfix'><img src='http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32' alt='' width='32' height='32'><div class='chat-message-content clearfix'><span class='chat-time'>"+ $('#chat-time').val() +"</span><h5>"+$('#chat-ui-sender').val()+"</h5><p>"+$("#chat-input").val()+"</p></div></div><hr>";
            $('#chatku').append(newChat);
            $('#chat-input').val("");
            var d = $('#chatku');
            d.scrollTop(d.prop("scrollHeight"));
          });
      }
  });
  (function() {

$('#live-chat header').on('click', function() {

  $('.chat').slideToggle(300, 'swing');
  $('.chat-message-counter').fadeToggle(300, 'swing');

});

$('.chat-close').on('click', function(e) {

  e.preventDefault();
  $('#live-chat').fadeOut(300);

});

}) ();
  </script>
