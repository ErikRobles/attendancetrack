let siteKey = config.SITE_KEY;
// let secretKey = config.SECRET_KEY;


function recaptchaFill() {
    document.getElementById('RecaptchaSpot').innerHTML = "<div class='g-recaptcha' "
                                                        + "'sitekey='" + siteKey 
                                                        + "></div>";
}

recaptchaFill();

