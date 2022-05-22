<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Government Higher Sceondary School Lawa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<!--    css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--    external css-->
    <link href="ghss.css" rel="stylesheet" type="text/css">
  <!-- frontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.6.0.min.js" ></script>
</head>
</head>
<body>
<div class="continer-flud bg-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid logo" src="image/logon.jpg" alt="logo image" >
                </div>
                <div class="col-sm-4">
                    <h11 class="logo-head" >Govenment Higher Secondary School Lawa</h11>
                </div>
            </div>
        </div>
    </div>
       <br>
        <br>
    <div class="col">
       <h21> ADMISSION FROM 2022-2023</h21>
        </div>
        <br>
        
              <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Group:</h22>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>Art</option>
                        <option>Science</option>
                    </select>
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Admission In which Class:</h22>
                <td>
                    <select>
                       <option>Select Option</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </td>
            </div>
           <div class="col-sm-4">
                                <label>Upload imgage
                                <input type="file" id="img" name="img" accept="image/*">
                                    </label>
                        
               </div>
            
            </div>
        </div>
    </div>
          <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Name:</h22>
                <td>
                    <input type="text" placeholder="Name" name="">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Student CNIC/B-form:</h22>
                <td>
                     <input type="text" placeholder="3720311111111" Student CNIC ="">
                </td>
            </div>
           <div class="col-sm-4">
                    <h22>Student Photo Number:</h22>
               <td>
                        <input type="phone" placeholder="923**********">
                    </td>
                        
               </div>
            
            </div>
        </div>
    </div>
    
         <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Father Name:</h22>
                <td>
                    <input type="text" placeholder="Father Name" name="">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Father CNIC:</h22>
                <td>
                     <input type="text" placeholder="3720311111111" father CNIC ="">
                </td>
            </div>
           <div class="col-sm-4">
                    <h22>Father Photo Number:</h22>
               <td>
                        <input type="phone" placeholder="923**********">
                    </td>
            
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Email ID:</h22>
                <td>
                    <input type="Email" placeholder="example123@gmail.com" name="">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Gender:</h22>
                <td>
                     <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                </td>
            </div>
           <div class="col-sm-4">
                    <h22>Date of Birth:</h22>
               <td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
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
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
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
</select>
</td>

            
            </div>
        </div>
    </div>
</div>
  <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Religion:</h22>
                <td>
                    <input type="Religion">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Cast:</h22>
                <td>
                     <input type="Cast">
                </td>
            </div>
           <div class="col-sm-4">
                    <h22>Hafiz:</h22>
               <td>
                        <select>
                        <option>Select Option</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    </td>
                        
               </div>
            
            </div>
        </div>
    </div> 
        <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Nationality:</h22>
                <td>
                    <input type="Nationality">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Handicap:</h22>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </td>
            </div>
           <div class="col-sm-4">
                    <h22>Medium:</h22>
               <td>
                        <select>
                        <option>Select Option</option>
                        <option>English</option>
                        <option>Urdu</option>
                    </select>
                    </td>
                        
               </div>
            
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Hobbies:</h22>
                <td>
                    
                    <input type="checkbox"Singing>Singing
                    <input type="checkbox"Dancing>Dancing
                    <input type="checkbox"Playing>Playing
                    <input type="checkbox"Reading>Reading
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Education Qualification:</h22>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </td>
            
            </div>
           <div class="col-sm-4">
                    <h22>Identification Mark:</h22>
               <td>
                         <input type="Identification Mark" placeholder="Identification Mark">
                    </td>
                        
               </div>
            
            </div>
        </div>
    </div>
     <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="col">
            <div class="col-sm-4">
                <h22>Address:</h22>
                <td>
                    <textarea rows="5" col="10" placeholder="Address"></textarea>                  
                </td>
          
            </div>
        </div>
    </div>
        </div>
     <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Elective Subject 1:</h22>
                <td>
                    <input type="Elective Subject 1" placeholder="Elective Subject1">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Elective Subject 2:</h22>
                <td>
                    <input type="Elective Subject 2" placeholder="Elective Subject2">
                </td>
            </div>
           <div class="col-sm-4">
                <h22>Elective Subject 3:</h22>
                <td>
                    <input type="Elective Subject 3" placeholder="Elective Subject3">
                </td>
                        
               </div>
            
            </div>
        </div>
    </div>
    
    <td>
                    <input type="checkbox"Identify>DECLARATION:
                <br>
                    (i) We hereby solemnly affirm that above data/informations provided by us are correct, if found unreliable, we shall be responsible for further consequences.
                        <br>
                          (ii) in case of any violation og school rules by the student, in my absence
                </td>
     <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Mr:</h22>
                <td>
                    <input type="text" placeholder="Mr" name="">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>S/O:</h22>
                <td>
                    <input type="text" placeholder="S/O" name="" >
                </td>
            </div>
           <div class="col-sm-4">
                <h22>Relation:</h22>
                <td>
                    <input type="text" placeholder="Relation" name="">
                </td>
                        
               </div>
            
            </div>
        </div>
    </div>
 <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Phone Number:</h22>
                <td>
                    <input type="phone" placeholder="923**********">
                </td>
            
            </div>
            <div class="col-sm-4">
               <h22>Fees:</h22>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </td>
            </div>
            </div>
        </div>
    </div>
 <td>
                    Will be responsible to cooperate with the institution authority. In case of our non cooperation school can take action against the student. We shall have no right appeal against the institution.
                
                </td>
    <div class="container-fluid mt-4">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h22>Sign of Father/Guardian :</h22>
                <td>
                    <input type="file" id="img" name="img" accept="image/*">
                </td>
            
            </div>
            <div class="col-sm-4">
                <h22>Sign of Student :</h22>
                <td>
                    <input type="file" id="img" name="img" accept="image/*">
                </td>
            
            </div>     
            </div>
        </div>
    </div>
         <td>
                    ORDER OF ADMISSION BY THE PRICIPAL
                    <br>
                    ADMISSION/WITHDRAWAL REGISTER,ADMIT THE STUDENT ACCORDING TO THE RULES
                </td>
                <br>
                <br>
                <br>
                <br>
                <td>
                    SEAL & SIGNATURE OF PRINCIPAL
                </td>
                
                <tr>
                <td>
    
            
                <td>
                    <div class="buttons">
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Submit</button>
                                                
                    <input type="reset" value="Reset">
                        
                        
                               
                </div>
                </td>
            </tr>
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="login.php" style="color: red;">logout</a> </p>
    <?php endif ?>
</body>
</html>