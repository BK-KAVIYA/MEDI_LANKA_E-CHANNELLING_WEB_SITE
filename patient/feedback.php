<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MEDI LANKA</title>
</head>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

html,
body {
    height: 100%
}


.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer;
    font-size: 23px
}

.cross i {
    margin-top: -5px;
    cursor: pointer
}

.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid #ff0000
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: #ff0000;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
</style>
<body class="bg-primary">
    <div class="container">

      <br><br>
      <div class="row">
        <div class="col-sm-12" style="text-align:center;">
          <h2 style="color: white; border-bottom: 2px solid #FFFFFF;">About Us</h2><br>
          <p style="color:white;">MEDI LANKA, operated by Digital Health Private Limited is Sri Lanka’s pioneering digital health solutions service provider, offering medical services to subscribers from the convenience of their mobile phone and website.
            <br><br>
            A joint venture between Sri Lanka’s premier connectivity provider, Dialog Axiata PLC, and three leading private hospital groups; Asiri Hospital Holdings PLC, Nawaloka Hospitals PLC and Ceylon Hospitals PLC (Durdans), Digital Health aims to implement and develop a state-of-the-art, integrated, e-commerce infrastructure for Sri Lanka’s healthcare sector, through the provision of a digitally-enabled medical appointment management for healthcare providers, extending to several innovative new elements for Sri Lanka’s digital health care value chain.
            <br><br>
            MEDI LANKA, launched in 2018, has connected more than 1000 doctors in over 80 hospitals within two years of its inception, through its digital health platform which is accessible to users via www.medilanka.lk, by dialing 1990 or via the MEDILANKA1990 app, available both on Android and iOS.
            <br><br>
            MEDI LANKA currently offers a range of medical services including doctor channeling sessions at hospitals island wide for physical consultations, the Tele-Doctor service, where leading consultants can be contacted over the phone, medicine delivery and access to lab reports at key laboratories via the MEDILANKA web portal. Sri Lanka’s leading medical booking app, MEDI LANKA app, is integrated to all mobile operators and banks for multiple payment options such as add to bill, eZ Cash, Genie, Amex, Visa and Master Card.
            <br><br>
            The service is open and available to all 22 million plus Sri Lankans, and we at Digital Health aim to transform the health care service sector and experience for all Sri Lankans, and serve as the benchmark for integrated e-commerce healthcare solutions in the Asia-Pacific region.</p>
                </div>
      </div>
    </div>
    <br><br>
    <div class="col-sm-12 col-md-7">
           <!--Google map-->
           <div class="mb-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.94592205695!2d80.51572821913888!3d5.952076466278308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d151937cd9%3A0x1d711f45897009a3!2sMatara!5e0!3m2!1sen!2slk!4v1607445502568!5m2!1sen!2slk" width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
           
        <!--Grid column-->
        </div>
	<script type="text/javascript">
    $(window).on('load', function() {
        $('#form').modal('show');
    });
</script>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times mr-2"></i></button> </div>
            <div class="card-body text-center"> <img src=" https://i.imgur.com/d2dKtI7.png" height="100" width="100">
                <div class="comment-box text-center">
                    <h4>Add a comment</h4>
                    <div class="rating"> 
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label> <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label> <input type="radio" name="rating" value="3" id="3">
                        <label for="3">☆</label> <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label> <input type="radio" name="rating" value="1" id="1">
                        <label for="1">☆</label> 
                    </div>
                    <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
                    <div class="text-center mt-4"> <button class="btn btn-success send px-5">Send message <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>