<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Members</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
 
    </head>
    <body>
                <form action="#" id="personalinfo" method="post" enctype="multipart/form-data">
                        <legend>
                            <h1>Profile</h1>
                        </legend>
                        <label for="gender">I'm a</label>
                        <select class="textbox" name="gender" id="gender" required title="Please enter your gender">
                        <option>--Select--</option>
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                        </select><br><br>
                        <label for="interest">Interested In</label>
                        <select class="textbox" name="interest" id="interest" required title="Select your interest">
                        <option>--Select--</option>
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                        </select><br><br>
                        <label for="date">Birthday</label><br />
                        <select class="dob month" name="date" id="date" required title="Please select the month">
                            <option>Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                        <select class="dob day" name="date" id="date" required title="Please select the day">
                            <option>Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select class="dob year" name="date" id="date" required title="Please select the year">
                            <option>Year</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                        </select>
                        <br>
                        <br>
                        <label for="height">Height</label>
                        <input type="text" class="textbox" name="height" id="height" required title="Please enter the email address" />
                        <br>
                        <br>
                        <label for="weight">Weight</label>
                        <input type="text" class="textbox" name="weight" id="weight" required title="Please enter the password"/>
                        <br>
                        <br>
                        <label for="hobbies">Hobbies</label>
                        <input type="text" class="textbox" name="hobbies" id="hobbies" required title="Re-enter the password here..."/>
                        <br>
                        <br>
                        <label for="image">Upload Image</label>
                        <input type="file" name="profilepic" id="profilepic"/>
<br/>
<br/>
                        <button type="submit">Submit</button>
                </form>
            
    </body>
</html>