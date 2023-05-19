<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
.xWrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding-top: 2%;
}
.xContainer{
    width: 60%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.pd-3{
    padding:1% 3%;
}
.label{
    font-weight: bold;
}
</style>
<body>
 

<div class="xWrapper">
    <div class="xContainer" >
        <div class="title-container pd-3">
            <h1>Arts & Craft Fair Application</h1>
            <p>Fill the form below kneely to participate in Art and fair exhibition.Forms that are not completely filled will not be accepted.</p>
        </div>
        <hr/>
        <div class="pd-3">
            <form class="row">
                <div class="mb-3 col-6">
                    <label for="full_name" class="form-label label">Full name</label>
                    <input name="full_name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <div id="emailHelp" class="form-text">First Name</div>
                </div>
                <div class="mb-3 col-6">
                    <label for="last_name" class="form-label label">&nbsp;</label>
                    <input name="last_name" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Last name</div>
                </div>
                <div class="mb-3 col-12">
                    <label for="company_name" class="form-label label">Company Name</label>
                    <input name="company_name" type="text" class="form-control" id="exampleInputtext1">
                </div>
                <div class="mb-3 col-12">
                    <label for="email" class="form-label label">E-mail</label>
                    <input name="email" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">sothkimleng@gmail.com</div>
                </div>
                <div class="mb-3 col-12">
                    <label for="Address" class="form-label label">Address</label>
                    <input name="address" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Street Address</div>
                </div>
                <div class="mb-3 col-12">
                    <input name="street_address" type="text" class="form-control label" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Street Address</div>
                </div>
                <div class="mb-3 col-12">
                    <input name="street_address_2" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Street Address Line 2</div>
                </div>
                <div class="mb-3 col-6">
                    <input name="city" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">City</div>
                </div>
                <div class="mb-3 col-6">
                    <input name="state_province" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">State / Province</div>
                </div>
                <div class="mb-3 col-6">
                    <input name="postal_code" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Postal / Zip code</div>
                </div>
                <div class="mb-3 col-6">
                    <input name="country" type="text" class="form-control" id="exampleInputtext1">
                    <div id="emailHelp" class="form-text">Country</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="label">Product Category</label><br/>
                    <input type="checkbox" id="accessories" name="accessories" value="accessories">
                    <label for="accessories">Accessories / Jewelry</label><br>
                    <input type="checkbox" id="art" name="art" value="art">
                    <label for="art">Art / Books and Zines / Music</label><br>
                    <input type="checkbox" id="bath" name="bath" value="bath">
                    <label for="bath">Bath and Beauty</label><br>
                    <input type="checkbox" id="Crochet" name="Crochet" value="Crochet">
                    <label for="Crochet">Crochet / Embroidery / Knitting / Needlecraft</label><br>
                    <input type="checkbox" id="Dolls" name="Dolls" value="Dolls">
                    <label for="Dolls">Dolls and Miniture </label><br>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label label">Description of your products</label>
                    <div class="form-floating">
                        <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- boostrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>