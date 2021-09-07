<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>
<body>
    <div class="register">
        <h2>Admission Enquriy Form</h2>
        <form action="register" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="name">Student Name</label><br>
                <input type="text" placeholder="Student name" name="name"> <br>
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Mobile</label><br>
                <input type="text" name="mobile" id="" placeholder="Mobile No">
                </td>
                <td>
                <label for="">Email</label><br>
                <input type="text" name="email" placeholder="email Address"> <br>

                </td>
            
            </tr>

            <tr>
                <td>
                <label >   
                    Course :  
                </label> <br>  
                <select name="course">  
                    <option value="">Select</option>  
                    <option value="PHP">PHP</option>  
                    <option value="Python">Python</option>  
                    <option value="JavaScript">JavaScript</option>  
                    <option value="CSS">CSS</option>  
                    <option value="HTML">HTML</option>  
                    <option value="Java">Java</option>  
                </select>  <br><br>

                </td>
            </tr>
            <tr>
                <td>
                <label for="">Your Enquriy</label><br>
                    <textarea cols="60" rows="3" value="" name="comment" placeholder="your enquiry detail">  
                    </textarea>  <br>
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
        
        </form>
    
    </div>
    <?php
        
    ?>
</body>
</html>