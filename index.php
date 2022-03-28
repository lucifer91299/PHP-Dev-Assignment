<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php text</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\bootstrap.min.css">

</head>

<body>


    <script src="js\jquery-3.6.0.min.js"></script>
    <script src="js\jquery.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery.datetimepicker.full.min.js"></script>
    <script src="validation.js"></script>
    <script src="Date.js"></script>
    <div class="container">
        <!-- Content here -->
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration from </h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="contactForm">
                        <div class="form-group">
                            <label for="contactTitle" class="col-sm-2 control-label">Title<sup>*</sup></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contactTitle">
                                <span id="Message"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactName" class="col-sm-2 control-label">Name<sup>*</sup></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contactName">
                                <span id="Message1"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail" class="col-sm-2 control-label">Email<sup>*</sup></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="contactEmail"
                                    placeholder="username@beststartupever.com">
                                <span id="Message2"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactMobile" class="col-sm-2 control-label">Mobile
                                Number<sup>*</sup>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contactMobile">
                                <span id="Message3"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactDate" class="col-sm-2 control-label">Appointment Date<sup>*</sup>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="contactDate1">
                                <span id="Message4"></span>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="contacttime" class="col-sm-2 control-label">Appointment Time<sup>*</sup>
                            </label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="contacttime">
                                <span id="Message5"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactAddress1" class="col-sm-2 control-label">Address1</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="contactAddress1"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactServices" class="col-sm-2 control-label">Services<sup>*</sup></label>
                            <div class="col-sm-10">
                                <select class="form-control" id="contactServices">
                                    <option>Confinement</option>
                                    <option>treatments</option>
                                    <option>procedures</option>
                                    <option>tests</option>
                                    <option>examination</option>
                                </select>
                                <span id="Message6"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactComments" class="col-sm-2 control-label">Comments</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="contactComments"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                            <p>
                                <span id="helpBlock" class="help-block"><sup>*</sup> marked fields
                                    are compulsory!</span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                            <center>
                                <p>
                                    <button type="button" class="btn btn-primary btn-lg btn-block" id="contactButton">
                                        Varify <span class="glyphicon glyphicon-arrow-right"> </span>
                                    </button>
                                </p>
                            </center>
                        </div>
                    </form>
                    <!-- after validation from -->
                    <form id="subForm" style="display: none;">
                        <label id="ebcaptchatext"></label>
                        <input type="text" class="textbox" id="ebcaptchainput" />
                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                            <center>
                                <p>
                                    <button type="button" class="btn btn-primary btn-lg btn-block" id="submit">
                                        Submit <span class="glyphicon glyphicon-ok"> </span>
                                    </button>
                                </p>
                            </center>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>



    <script type="text/javascript">
    // captch function    
    $(function() {

        $('#subForm').ebcaptcha();
    });

    (function($) {

        jQuery.fn.ebcaptcha = function(options) {

            var element = this;
            var input = this.find('#ebcaptchainput');
            var label = this.find('#ebcaptchatext');
            $(element).find('button[type=button]').attr('disabled', 'disabled');

            var randomNr1 = 0;
            var randomNr2 = 0;
            var totalNr = 0;


            randomNr1 = Math.floor(Math.random() * 10);
            randomNr2 = Math.floor(Math.random() * 10);
            totalNr = randomNr1 + randomNr2;
            var texti = "Captch --> What is " + randomNr1 + " + " + randomNr2;
            $(label).text(texti);


            $(input).keyup(function() {

                var nr = $(this).val();

                if (nr == totalNr) {
                    $(element).find('button[type=button]').removeAttr('disabled');
                    //senddata();
                } else {
                    $(element).find('button[type=button]').attr('disabled', 'disabled');
                }
            });

            $(document).keypress(function(e) {
                if (e.which == 13) {
                    if ((element).find('button[type=button]').is(':disabled') == true) {
                        e.preventDefault();

                        return false;
                    }
                }

            });

        };

    })(jQuery);

//send data from here to getData.php page 
    $(document).ready(function() {

                $("#submit").click(function() {

                    tt = document.getElementById("contactTitle").value;
                    na = document.getElementById("contactName").value;
                    em = document.getElementById("contactEmail").value;
                    mo = document.getElementById("contactMobile").value;
                    dt = document.getElementById("contactDate1").value;
                    ti = document.getElementById("contacttime").value;
                    ad = document.getElementById("contactAddress1").value;
                    sc = document.getElementById("contactServices").value;
                    co = document.getElementById("contactComments").value;


                    if (tt == '' || na == '' || em == '' || mo == '' || dt == '' || ti == '' || ad == '' ||
                        sc == '' || co == '') {
                        alert("Please fill all fields.");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "getData.php",
                        data: {
                            tt: tt,
                            na: na,
                            em: em,
                            mo: mo,
                            dt: dt,
                            ti: ti,
                            ad: ad,
                            sc: sc,
                            co: co

                        },
                        cache: false,
                        success: function(data) {
                            
                            //console.log(data);
                            //alert(data);
                            window.location.href = "demo.html";
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });

                });
            });

               
    </script>

</body>

</html>