<style>
.float_icon{
    position: fixed;
    bottom: 40px;
    right:20px;
}
.chatbot{
    position: fixed;
    bottom: 100px;
    right:20px;
}
</style>

<div>
    <iframe src="chatbot/bot.php" width="380px" height="540" frameborder="0" scrolling="0" class="chatbot">

    </iframe>

</div>

<div class="float_icon">
    <img src="chat.png" width="50x" class ="float_btn">

</div>
<script>
  $(document).ready(function() {
      $(".chatbot").hide();
    }
    );


 $(".float_icon").click(function()  
            {  
                $(".chatbot").toggle();  
            });
</script>