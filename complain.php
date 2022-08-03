<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
    <link rel="stylesheet" href="css/complain.css">
</head>
<body>
    <div class="container">
        <form>
            <h1>Complaint</h1>
            <input type="text" id="name" placeholder="Name" required>
            <input type="text" id="ID" placeholder="ID" required>
            <input type="text" id="department" placeholder="Department" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4> Type Of Problem :</h4>
            <div class="footer">    
               
                <input type="checkbox" id="problem1" name="problem" value="d">
                <label for="problem1">Delay</label>
                <input type="checkbox" id="problem2" name="problem" value="d" >
                <label for="problem2">Damaged</label>
                </div>   
           
            <h4>Type Your Note Here...</h4>
          
            <textarea required></textarea>
           
            <input type="submit" value="Send" id="button">
        </form>
    </div>
</body>
</html>