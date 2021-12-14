
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot in PHP | CodingNepal</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<!-- navbar -->
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Servies</a>
  <a href="#">Contact</a>
  <a href="#" style="float:right; font-weight: 600;">XYZ Clinic</a>
</div>


<div class="row">
  <div class="column">
  <div class="row">
  <div class="leftcolumn">
        <div class="card">
        <h1>XYZ Clinic</h1>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg" ><img src="doctor.png" alt="clinic img"></div>
        </div>
    </div>
</div>

<!-- 
<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->

  </div>
  <div class="column"> <div class="wrapper ">
        <div class="title">
        <div class="is-active"></div>
            Bot Bahadur
           
        </div>
        <div class="form" id="myForm">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn" onClick="">Send</button>
            </div>
        </div>
 </div>

</div>
    </div>
    <div class="row">
  <div class="column">
  <p>A world-class quaternary care facility with multiple Centers of Excellence. Nepal Mediciti combines the finest medical minds and advanced technology to provide holistic treatment within a Multi-Disciplinary Framework. Nepal Mediciti aspires to evolve as the health-care destination of choice in South Asia. We will provide a platform for practicing safe and evidence based medicine driven by international guidelines and protocols. We will foster research, education and a distinctive work culture that will set high ethical and social standards. Nepal Mediciti is a Private institution with a Public purpose which will lay emphasis on:</p>
    </div>
</div>

    

    <!-- <div class="bot-icon">
        <i class="fas fa-robot"></i>
    </div> -->
    <!-- <div class="wrapper-2">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione error asperiores molestias? Qui exercitationem cupiditate pariatur rem, similique dignissimos facere harum debitis voluptatum ipsum laudantium doloribus quod voluptas numquam.
            </p>
        </div> -->

    <!-- Footer -->
    <div class="footer">
        <div class="row">
    <div class="column">
        <h2>About</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae a, mollitia ducimus quos modi architecto nam pariatur iusto velit fugiat labore eligendi. Sequi cupiditate omnis ut magnam. Iusto, quisquam neque.</p>
    </div>
    
    <div class="column line-height">
        <h2>Contacts</h2> 
        
            <ul>+977-988767654</ul>
            <ul>asd@gmail.com</ul>
            <ul>KTM,Tinkune</ul>
        
    </div>
    
    <div class="column line-height">
        <h2>Our Services</h2>
        
            <ul>Dental</ul>
            <ul>Regular</ul>
            <ul>Diabetes</ul>
        
    </div>
</div>

    </div>
    <script src="response.js"></script>
    <script>

        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>