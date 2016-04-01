var x = "no";
var y = "no";
var n = "no";
var a = "no";
var t = "no";
var original;

function incX(who)
{
    document.getElementById("genderLabel").innerHTML = who;
    document.getElementById("genderValid").innerHTML = "";

    this.x = "yes";
    
};

function CategoryClicked(category) {
    document.getElementById("category").innerHTML = category;
    document.getElementById("categoryValid").innerHTML = "";
    this.y = "yes";
    
};

function Notify(who)
{
    document.getElementById("notify").innerHTML = who;
    document.getElementById("notifyValid").innerHTML = "";
    this.n = "yes";
};

function Agree(who)
{
    document.getElementById("agree").innerHTML = who;
    document.getElementById("agreeValid").innerHTML = who;
    this.a = "yes";
};

function Unit(who) {
    document.getElementById("timeType").innerHTML = who;
    document.getElementById("intervalChooseValid").innerHTML = "";
    this.t = "yes";
};


function formValidation() {
    var username = document.registration.name;
    var password = document.registration.password;
    var rePassword = document.registration.rePassword;
    var age = document.registration.age;
    var email = document.registration.email;
    var captcha = document.registration.captcha;
    var msex = document.getElementById("male");
    var fsex = document.getElementById("female") ;

   
    if (ValidateName(username)) 
    {  
        if (ValidateEmail(email)) 
        {
            if (ValidatePassword(password, 6, 12))  {
                if (ValidateRePassword(rePassword, password)) {
                    if (validatesex()) {
                        if (ValidateAge()) {
                            if (ValidateCaptcha(original)) {

                            }
                        
                        }
                    }
                }
            }
        }  
    }  
 
return false;  
}  ;
function placeValidation() {
    var username = document.registration.name;
    var password = document.registration.password;
    var rePassword = document.registration.rePassword;
    var category = document.registration.category;
    var email = document.registration.email;
    var captcha = document.registration.captcha;
    var website = document.registration.websiteLink;
    

    if (ValidateName(username)) {
        if (ValidateEmail(email)) {
            if (ValidatePassword(password, 6, 12)) {
                if (ValidateRePassword(rePassword, password)) {
                    if (ValidateWebsite()) {
                        if (ValidateCategory()) {
                            if (ValidateCaptcha(original)) {

                            }
                        }
                    }
                        
                    
                }
            }
        }
    }

    return false;
};
function ValidateName(username) {
   
        if (username.value == "") {
            document.getElementById("nameValid").innerHTML = "*This can't be empty";
            username.focus();
            return false;
        }
        else
        {
            document.getElementById("nameValid").innerHTML = "";
            return true;
         }
};

    function ValidatePassword(password, mx, mn) {
        var password_len = password.value.length;
        if (password_len == 0 || password_len >= mn || password_len < mx) {
            document.getElementById("passwordValid").innerHTML = "*Password should be of length between 6 and 12 characters";
            password.focus();
            return false;
        }
        document.getElementById("passwordValid").innerHTML = "";
        return true;
    };
    
    function ValidateEmail(email) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.value.match(mailformat)) {
            document.getElementById("emailValid").innerHTML = "";
            return true;
        }
        else {
            document.getElementById("emailValid").innerHTML = "*Please enter valid email format";
            email.focus();
            return false;
        }
    };

    function ValidateRePassword(rePassword, password) {

        if (rePassword.value == "")
        {
            document.getElementById("rePasswordValid").innerHTML = "*Please enter your password again";
        }
        if (rePassword.value.match(password.value)) {
            document.getElementById("rePasswordValid").innerHTML = "";
            return true;
        }
        else {

            document.getElementById("rePasswordValid").innerHTML = "*Passwords don't match";
            rePassword.focus();
            return false;
        }
    };
    function validatesex() {
       
        if (this.x == "no") {
            document.getElementById("genderValid").innerHTML = "*Please select gender";
            return false;
        }
        else {
           
            document.getElementById("genderValid").innerHTML = "";
            return true;
        }
    };

    function ValidateAge() {
        if (age.value == "")
        { document.getElementById("ageValid").innerHTML = "*This can't be empty";}
        if (age.value < 16) {
            document.getElementById("ageValid").innerHTML = "*You have to be at least 16";
            return false;
        }

        else {
            document.getElementById("ageValid").innerHTML = "";
                return true;
             }
    };
    function ValidateCaptcha(original) {
        if (captcha.value == "") {
            document.getElementById("captchaValid").innerHTML = "*Please enter what you see in the picture";
            captcha.focus();
            return false;
        }
        if (captcha.value.match(original.value)) {
            document.getElementById("captchaValid").innerHTML = "";
            window.location.reload();
            return true;
        }
        else {

            document.getElementById("captchaValid").innerHTML = "*Please enter what you see in the picture";
            captcha.focus();
            return false;
        }
    };

    function ValidateWebsite(){
        var url = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (website.value == "") {
            document.getElementById("websiteValid").innerHTML = "*This can't be empty";
            website.focus();
            return false;
        }

        if (!website.value.match(url)) {
            document.getElementById("websiteValid").innerHTML = "*Please enter a valid url format";
            website.focus();
            return false;
           
        }
        else {
            document.getElementById("websiteValid").innerHTML = "";
            return true;
            
        }
    };

    function ValidateCategory() {
        if (category.value == "") {
            document.getElementById("categoryValid").innerHTML = "*This can't be empty";
            category.focus();
            return false;
        }

        else {
            document.getElementById("categoryValid").innerHTML = "";
            return true;
        }
    };

    function TimeValue(who) {
        document.getElementById("timeType").innerHTML = who;
        this.y = "yes";
    };

    
    function ValidatePayment() {
        var amount = document.payment.amount;
        
        if (ValidateAmount(amount)) {
            if (ValidatePaymentCategory()) {

            }
        }

        return false;
        };

    function ValidatePaymentCategory() {
       
        if (this.y == "no") {
            document.getElementById("categoryValid").innerHTML = "*Please select Category";
            return false;
        }
        else {
           
            document.getElementById("categoryValid").innerHTML = "";
            return true;
            window.location.reload();
        }
    };

    function ValidateAmount(amount) {
        var numbers = "^[0-9]+$";
        if (amount.value == "")
        {
            document.getElementById("amountValid").innerHTML = "*This can't be empty";
            amount.focus();
            return false;
        }
        if (!amount.value.match(numbers))
        {
            document.getElementById("amountValid").innerHTML = "*amount can only be an integer number with no dots or letters";
            amount.focus();
            return false;
        }
        else 
             {   document.getElementById("amountValid").innerHTML = "";
                return true;
        }
        
    };

    function searchFormCheck() {
        var text = document.searchForm.searchText;
        if (text.value == "") {
            document.getElementById("searchValid").innerHTML = "*Please enter at least one keyword to search for";
            return false;
        }

        else {
            document.getElementById("searchValid").innerHTML = "";
            return true;
        }
    };

    function ValidateSettings()
    {
        var income = document.settings.income;
        var limit = document.settings.limit;

        if (ValidateIncome(income)) {
            if (ValidateLimit(limit)) {
                if (ValidateNotify()) {
                    if (ValidateAgree()) {

                    }
                }
            }
        }

        return false;
    };

    function ValidateIncome(income) {
        var numbers = "^[0-9]+$";
        if (income.value == "") {
            document.getElementById("incomeValid").innerHTML = "*This can't be empty";
            income.focus();
            return false;
        }
        if (!income.value.match(numbers)) {
            document.getElementById("incomeValid").innerHTML = "*income can only be an integer number with no dots or letters";
            income.focus();
            return false;
        }
        else {
            document.getElementById("incomeValid").innerHTML = "";
            return true;
        }

    };
    
    function ValidateLimit(limit) {
        var numbers = "^[0-9]+$";
        if (limit.value == "") {
            document.getElementById("limitValid").innerHTML = "*This can't be empty";
            limit.focus();
            return false;
        }
        if (!limit.value.match(numbers)) {
            document.getElementById("limitValid").innerHTML = "*limit can only be an integer number with no dots or letters";
            limit.focus();
            return false;
        }
        else {
            document.getElementById("limitValid").innerHTML = "";
            return true;
        }

    };
    
    function ValidateNotify() {

        if (this.n == "no") {
            document.getElementById("notifyValid").innerHTML = "*Please select a choice";
            return false;
        }
        else {

            document.getElementById("notifyValid").innerHTML = "";
            return true;
        }
    };

    function ValidateAgree() {

        if (this.a == "no") {
            document.getElementById("agreeValid").innerHTML = "*Please select a choice";
            return false;
        }
        else {

            document.getElementById("agreeValid").innerHTML = "";
            return true;
        }
    };

    function ValidatePlaceOffer()
    {
        var details = document.offer.details;
        var till = document.offer.validTill;

        if (ValidateDetails(details)) {
            if (ValidateTill(till)) {
                if (ValidateTillUnit()) {

                }
            }
        }

        return false;
    };

    function ValidateDetails(details) {
        if (details.value == "") {
            document.getElementById("detailsValid").innerHTML = "*This can't be empty";
            details.focus();
            return false;
        }

        else {
            document.getElementById("detailsValid").innerHTML = "";
            return true;
        }
    };

    function ValidateTill(till)
    {
        var numbers = "^[0-9]+$";
        if (till.value == "") {
            document.getElementById("intervalValid").innerHTML = "*This can't be empty";
            
            return false;
        }
        if (!till.value.match(numbers)) {
            document.getElementById("intervalValid").innerHTML = "* Time limit can only be an integer number with no dots or letters";
           
            return false;
        }
        else {
            document.getElementById("intervalValid").innerHTML = "";
            return true;
        }

    };

    function ValidateTillUnit()
    {
            if (this.t == "no") {
                document.getElementById("intervalChooseValid").innerHTML = "*Please select time unit";
                return false;
            }
            else {

                document.getElementById("intervalChooseValid").innerHTML = "";
                return true;
            }
     };
   