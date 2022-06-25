<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>php crud</title>

    <link rel="stylesheet" href="st.css">


</head>
<body>
    <div class="container">
        <div class="title">
            registration form
        </div>
        <div class="form">
            <div class="input_field">
                <label> first name</label>
                <input type="text" class="input">
            </div>
            
            <div class="input_field">
                <label> last name</label>
                <input type="text" class="input">
            </div>

            <div class="input_field">
                <label> password</label>
                <input type="password" class="input">
            </div>

            <div class="input_field">
                <label> confirm password</label>
                <input type="password" class="input">
            </div>

            
            <div class="input_field">
                <label> gender</label>
                <div class="selectbox">
                <select>
                    <option>male</option>
                    <option>female</option>s
                </select>
                </div>
            </div>
            
            <div class="input_field">
                <label> mail </label>
                <input type="text" class="input">
            </div>

            <div class="input_field">
                <label>phone</label>
                <input type="number" class="input">
            </div>
            <div class="input_field">
                <label>addrerss</label>
                <textarea cols="30" rows="10"></textarea>
            </div>

            <div class="input_field term">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label> 
                
                <p>agree to term</p>
               
            </div>
            <div class="input_field">
                    <input type="submit" value="register" class="btn">
                </div>


            


        </div>
    </div>
    
</body>
</html>