<!doctype html>
<html>
<head>
    <title>Blood Donation</title>
    <link rel="stylesheet" href="blood.css">
</head>
<body>

    <form onsubmit="return handlesubmit()">
        <h1>Hello Donor</h1>
        <center>
        <table>
            <tr>
                <td>
                    <p>Please fill up all the gaps</p>
                    <label>Name:</label>
                    <input type="text" id="name">
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Age:</label>
                    <input type="number" id="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Blood Type:</label>
                  
                    <select id="blood_type">
                        <option value="0">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone Number:</label>
                    <input type="number" id="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label>City:</label>
                    <select id="city">
                        <option value="0">Choose city</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Dhaka">Dhaka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email:</label><br>
                    <input type="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Previous blood donated:</label><br>
                    <input type="radio" name="des" value="2 months"> 2 months<br>
                    <input type="radio" name="des" value="Less than one month"> Less than one month<br>
                    <input type="radio" name="des" value="More than 3 months"> More than 3 months<br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="agree"> I am agreed
                </td>
            </tr>
            <tr>
                <td>
                    <label>password</label><br>
                    <input type="password" id="password">
                </td>
            </tr>
        </table> 
        <button type="submit" >okay</button> 
        <button id="button" onclick="toggle()" >change theme</button>     
        </center>
    </form>

    <script>

    function toggle()
    {
        var body=document.body;
        var title=document.getElementById("title");
        var button=document.getElementById("button");

        if(body.style.backgroundColor==="black")
        {
            body.style.backgroundColor="white";
            button.innerHTML="switch to dark";
        }
        else
        {
            body.style.backgroundColor="black";
            button.innerHTML="switch to white";

        }
    }
    function handlesubmit() {
        var name = document.getElementById("name").value;
        var number = document.getElementById("number").value;
        var age = document.getElementById("age").value;
        var email = document.getElementById("email").value;
        var blood = document.getElementById("blood_type").value;
        var agree = document.getElementById("agree").checked;
        var password=document.getElementById("password").value;
        if (name === "" || age === "" || number === "" || email === "" || blood === "0") {
            alert("Please fill up all fields and select blood type.");
            return false;
        }

        if (name.length > 20 || !isNaN(name)) {
            alert("Name should be up to 20 characters and contain letters.");
            return false;
        }

        if (isNaN(age) || age <= 0 || age > 100) {
            alert("Age must be a number between 1 and 100.");
            return false;
        }

        if (number.length !== 11 || isNaN(number)) {
            alert("Phone number must be exactly 11 digits.");
            return false;
        }

        if (!agree) {
            alert("You must agree before submitting.");
            return false;
        }

        alert("Registration Complete\n" +
            "Name: " + name + "\n" +
            "Age: " + age + "\n" +
            "Phone Number: " + number + "\n" +
            "Email: " + email + "\n" +
            "Blood Type: " + blood
        );

        return false; // prevent form submission for testing
    }
</script>

</body>
</html>
