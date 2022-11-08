<?php
include "conn.php"
?>
<section class="contact" id="contactme">
        <div class="container">
            <h1>CONTACT ME</h1>
                <div class="detail">
                    <i class="bi bi-geo-alt"></i><span>     CHONBURI,TH</span><br>
                    <i class="bi bi-telephone"></i><span>     098-503-XXXX</span><br>
                    <i class="bi bi-envelope"></i><span>     bluethitivat@gmail.com</span>
                </div>
            <div class="contact_area">
                <h1>LET'S GET IN TOUCH. SEND ME A MESSAGE:</h1>
                <form action="save_contact.php" method="post" class="form">
                    <input type="text" placeholder="NAME:" required="required" class="username" name="name">
                    <input type="text" placeholder="EMAIL:" required="required" class="email" name="email">
                    <input type="text" placeholder="SUBJECT:" required="required" class="subject" name="subject">
                    <input type="text" placeholder="MESSAGE:" required="required" class="message" name="message"><br>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </section>