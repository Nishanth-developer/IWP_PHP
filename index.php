
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VM_LINK</title>
    <style>
        .form{
            width: 35%;
            background-color: red;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }
        .form-head{
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: center;
        }
        .form-content{
            display: block;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-top: 10px;
        }
        .form-fill{
            font-size: 20px;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form">
        <div class="form-head">
            Super Fast internet for Homes and Business
        </div>
        <hr>
        <div class="form-content">
            <form action="insert.php" method="post">
                <div>
                    <div>
                        <label for="name">Name : </label>
                    </div>
                    <div class="form-fill">
                        <input name="name" type="text" id="name" size="80">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="email">E-mail : </label>
                    </div>
                    <div class="form-fill">
                        <input name="email" type="text" id="email" size="80">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="mobile">Mobile : </label>
                    </div>
                    <div class="form-fill">
                        <input name="mobile" type="text" id="mobile" size="80">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="plan">Selected Plan : </label>
                    </div>
                    <div class="form-fill">
                        <select name = "plan" id = "plan">  
                            <option value = "INT499 - Basic"> Basic 
                            </option>  
                            <option value = "INT1299 - Silver"> Silver   
                            </option>  
                            <option value = "INT1599 - Gold"> Gold 
                            </option>  
                        </select>                            
                    </div>
                </div>
                <div>
                    <div>
                        <label for="address">Your Adress : </label>
                    </div>
                    <div class="form-fill">
                        <textarea name="address" cols="60" rows="3"></textarea>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="feedback">Is there anything we should know about : </label>
                    </div>
                    <div class="form-fill">
                        <textarea name="feedback" cols="60" rows="3"></textarea>
                    </div>
                </div>
                <div class="center">
                    <input type="submit" value="submit" style="background-color: red; border: 2px solid white ; color: white;">
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>