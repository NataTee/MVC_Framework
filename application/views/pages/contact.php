<!--
Name: Natalia Ksenz
Coding 08
Purpose: Codeigniter + AJAX

Filename: contact.php
-->

<div class="about-body">
  <p>
    If you have any questions, you can find us at: <br>
    11928 Stonehollow Dr, Austin, TX 78758<br>
    or call us (012)345-6789.
  </p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1679.3368899757415!2d-97.70555322126964!3d30.40347985700749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cc04a13b8723%3A0x917faa48756bfdb2!2sAustin%20Community%20College%3A%20Northridge%20Campus!5e0!3m2!1sen!2sus!4v1636217978282!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<hr>
<div class="contact">
    <p id="contact-title">If you have additional comments or concerns, feel free to
      contact us by 3058107@gmail.com<br> or just leave your message here</p>
</div>

<div id="msg">
    <!-- Error message -->
    <br>
</div>

<form id="email-form" name="email-form">
  <fieldset>

    <div class="formRow">
        <label for="nameBox">First and last name</label>
        <input type="text" id="nameBox" name="name" maxlength="64" placeholder="Jane Doe">
    </div>

    <div class="formRow">
        <label for="emailBox">Email address</label>
        <input type="text" id="emailBox" name="email" maxlength="64" placeholder="example@example.com">
    </div>

    <div class="formRow">
        <label for="re-emailBox">Re-enter email address</label>
        <input type="text" id="re-emailBox" name="re-email" maxlength="64" placeholder="example@example.com">
    </div>

    <div class="formRow">
        <label for="subjectBox">Subject</label>
        <input type="text" id="subjectBox" name="subject" maxlength="64" placeholder="Customer service">
    </div>

    <div class="formRow">
        <label for="messageBox">Tell us more about your experience!</label>
        <textarea name="message" id="messageBox" maxlength="1000"></textarea>
    </div>

  </fieldset>
</form>

<div id="button">
    <button type="button" id="submitBtn">Send</button>
    <button type="button" id="clearBtn">Clear</button>
</div>

<script src="../../assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../assets/js/main.js" async></script>
<script type="text/javascript" src="../../assets/js/contact.js" async></script>
