<div class="internal-page-banner contact-us-img"></div>
<div class="contact-content">
    <div>
        <h1>Contact Us</h1>
        <div>
            <b>Inspire Norfolk</b>
            <p>01603 670909</p>
            <p>07786968396</p>
            <p>jan@inspirenorfolk.co.uk</p>
        </div>
        <h2>Looking for Support? </h2>
        <div>
            <p>Whether you’re an employer considering recruiting an apprentice, an individual looking for work or you’re
                in employment and you may be struggling in the workplace we can help you.</p>
            <b>Either call us on one of the numbers above or fill out the contact form and one of our team will call you
                back.</b>
        </div>
    </div>
    <form action="contact-process.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" style="height:200px" required></textarea>

        <label>GDPR Agreement</label>
        <div class="gdpr-container">
            <input type="checkbox" id="gdpr" name="gdpr" required>
            <label for="gdpr">I consent to having this website store my submitted information so they can respond to my
                enquiry.</label><br>
        </div>

        <input type="submit" value="Submit">

        <?php 
            $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($fullUrl, "valid=firstError") == true){
                echo "<h3 class='errormsg'>Invalid First Name. Only letter and white spaces are allowed!</h3>";
            }
            else if (strpos($fullUrl, "valid=lastError") == true){
                echo "<h3 class='errormsg'>Invalid Last Name. Only letter and white spaces are allowed!</h3>";
            }
            else if (strpos($fullUrl, "valid=phoneError") == true){
                echo "<h3 class='errormsg'>Invalid Phone Number. Please try again.</h3>";
            }
            else if (strpos($fullUrl, "valid=messageError") == true){
                echo "<h3 class='errormsg'>Invalid Message. Only alpha-numeric characters are allowed!</h3>";
            }
            else if (strpos($fullUrl, "valid=gdprError") == true){
                echo "<h3 class='errormsg'>You must accept the GDPR Agreement!</h3>";
            }
            else if (strpos($fullUrl, "valid=success") == true){
                echo "<h3 class='succmsg'>Submission Successful!</h3>";
            } 
        ?>
    </form>
</div>
<div class="bg-container-purple">
    <div class="secondary-container container">
        <p>When we needed to add to our team we considered the apprentice route. Inspire Norfolk had supported a
            colleague, so we contacted them immediately. They were so knowledgeable and helped us every step of the
            way, from getting appropriate C.V’s sent to us to arranging the job description.</p>
    </div>
</div>