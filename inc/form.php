<!--Form begins-->

<?php

 $name = "";
 $email = "";
 $message = "";
 $human = "";

  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
  }

  if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
  }else {
    $subject = "Not provided";
 }

    $to = 'gibbenskd@gmail.com';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset: utf8' . "\r\n";
    $headers .= 'From: Email from Kelly Gibbens Web Developer <' . $email . ">"  . "\r\n";
    $body = '<p>From: ' . $name . '<br />Email: ' . $email . '<p>' . $message . '</p>';
                  
  if (isset($_POST['submit']) && $human == '75') {        
    if (mail($to, $subject, $body, $headers)) { 
      echo '<p class="alert alert-success">Thank you! Your message has been sent.</p>';
    }else { 
      echo '<p class="message-error">Oops, something went wrong, please try again.</p>'; 
    } 
  }else if (isset($_POST['submit']) && $human != '75') {
    echo '<p class="message-error">Incorrect answer, please try again.</p>';
  }
?> 


  <div class="jumbotron jumbo-contact">
          <form id="contact-form" action="" method="post" role="form" >
            <fieldset>
              <legend>CONTACT ME</legend>
              <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" placeholder="Joe Smith" tabindex="9" class="input-group form-control" required>
              </div>

              <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" placeholder="example@email.com" tabindex="10" class="input-group form-control" required>
              </div>

              <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" id="subject" name="subject" placeholder="Wev Dev" tabindex="11" class="input-group form-control" >
              </div>

              <div class="form-group">
                <label for="message">Message: </label>
                <textarea id="message" name="message" placeholder="What's on your mind?" tabindex="12" class="input-group form-control" required></textarea>
            </div>

            </fieldset>

            <fieldset>
              <div class="form-group">
                <label for="human">Human? </label>
                <div class="catpcha">
                <p>Captcha: What is 70 + 5?<p/>
                <input type="text" id="human" name="human" placeholder="Your final answer." tabindex="13" class="input-group form-control" required>
              </div>
            </div>
            </fieldset>
            <div class="box-contact-btns push-right">
              <button type="submit" name="submit" tabindex="14" class="btn btn-info">Send</button>
              <button type="reset" tabindex="15" class="btn btn-info">Clear</button>
            </div>
          </form> 
        </div>