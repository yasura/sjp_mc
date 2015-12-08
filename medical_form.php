<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>



        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="libs/bootstrap/js/bootstrap.js"></script>

    </head>
    <body>
        <div id="head-section">

        </div>

        <div id="wrapper-container">
            <div id="wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#section1" aria-controls="home" role="tab" data-toggle="tab">Section I</a></li>
                    <li role="presentation"><a href="#section2a" aria-controls="profile" role="tab" data-toggle="tab">Section II - A</a></li>
                    <li role="presentation"><a href="#section2b" aria-controls="messages" role="tab" data-toggle="tab">Section II - B</a></li>
                    <li role="presentation"><a href="#section2c" aria-controls="settings" role="tab" data-toggle="tab">Section II - C</a></li>
                    <li role="presentation"><a href="#section2d" aria-controls="settings" role="tab" data-toggle="tab">Section II - D</a></li>
                    <li role="presentation"><a href="#section2e" aria-controls="settings" role="tab" data-toggle="tab">Section II - E</a></li>
                    <li role="presentation"><a href="#section2f" aria-controls="settings" role="tab" data-toggle="tab">Section II - F</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="section1">
                        <div class="form-wrapper">           
                            <h3>1. Genaral Information</h3>         

                            <form name="section1" method="GET">
                                <div class="form-group">
                                    <label for="full-name">Full Name </label>
                                    <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="faculty">Faculty</label>
                                    <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Faculty">
                                </div>
                                <div class="form-group">
                                    <label for="sex">Gender</label>
                                    <select class="form-control" id="sex" name="sex">
                                        <option>Select Your Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>                  
                                <div class="form-group">
                                    <label for="date-of-birth">Date of Birth</label>
                                    <input type="text" class="form-control" id="date-of-birth" name="date-of-birth" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
                                </div>                   

                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" value="single" name="marital_status">Single
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="married" name="marital_status">Married
                                    </label>                 
                                </div>                   

                                <div class="form-group">
                                    <label for="district">District Which You Live </label>
                                    <input type="text" class="form-control" id="district" name="district" placeholder="District Which You Live">
                                </div>                   
                                <div class="form-group">
                                    <label for="home_address">Home Address</label>
                                    <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Home Address">
                                </div>                    
                                <div class="form-group">
                                    <label for="home_telephone">Home Telephone</label>
                                    <input type="text" class="form-control" id="home_telephone" name="home_telephone" placeholder="Home Telephone">
                                </div>                    
                                <div class="form-group">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father's Name">
                                </div>  
                                <div class="form-group">
                                    <label for="father_alive">Alive</label>
                                    <select class="form-control" id="father_alive" name="father_alive">
                                        <option>Select </option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>        
                                <div class="form-group">
                                    <label for="mother_occupation">Occupation</label>
                                    <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="Occupation">
                                </div>          

                                <div class="form-group">
                                    <label for="mother_name">Mother's Name</label>
                                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Mother's Name">
                                </div>

                                <div class="form-group">
                                    <label for="mother_alive">Alive</label>
                                    <select class="form-control"  id="mother_alive" name="mother_alive">
                                        <option>Select </option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>        
                                <div class="form-group">
                                    <label for="father_occupation">Occupation</label>
                                    <input type="text" class="form-control" id="father_occupation" name="father_occupation" placeholder="Occupation">
                                </div>                    

                                <div class="form-group">
                                    <label for="no_of_siblings">Number of Siblings </label>
                                    <input type="number" class="form-control" id="no_of_siblings" name="no_of_siblings" placeholder="Number of Siblings ">
                                </div>                   

                                <div class="form-group">
                                    <label for="monthly_income">Family income monthly (Income from all sources)</label>
                                    <select class="form-control" id="monthly_income" name="monthly_income">
                                        <option>Select </option>
                                        <option>&lt;5000</option>
                                        <option>5000-10000</option>
                                        <option>&gt;10000</option>
                                    </select>
                                </div>                    

                                <div class="form-group">
                                    <label for="school_attended">Last School attended and the District </label>
                                    <input type="text" class="form-control" id="school_attended" name="school_attended" placeholder="School Name and District">
                                </div>                      

                                <div class="form-group">
                                    <label for="school_type">Type of School </label>
                                    <select class="form-control" id="school_type" name="school_type">
                                        <option>Select </option>
                                        <option>National</option>
                                        <option>Central</option>
                                        <option>Maha</option>
                                        <option>private</option>
                                        <option>piriven</option>
                                        <option>other</option>
                                    </select>
                                </div>                         

                                <div class="form-group">
                                    <label for="extra_activities_at_school">Extar Callicular Activities during school days </label>
                                    <select class="form-control" id="extra_activities_at_school" name="extra_activities_at_school">
                                        <option>Select </option>
                                        <option>Sports</option>
                                        <option>Music</option>
                                        <option>Dancing</option>
                                        <option>Lidership</option>
                                        <option>Religious Work</option>
                                        <option>Art</option>
                                        <option>None</option>
                                    </select>
                                </div>                     

                                <h4>*Person to contact in case of emmergancy</h4>                   
                                <div class="form-group">
                                    <label for="em_person_name">Name</label>
                                    <input type="text" class="form-control" id="em_person_name" name="em_person_name" placeholder="Name">
                                </div>                       

                                <div class="form-group">
                                    <label for="em_person_address">Address </label>
                                    <input type="text" class="form-control" id="em_person_address" name="em_person_address" placeholder="Address">
                                </div>                      

                                <div class="form-group">
                                    <label for="em_person_telephone">Telephone </label>
                                    <input type="text" class="form-control" id="em_person_telephone" name="em_person_telephone" placeholder="Telephone">
                                </div>                      

                                <div class="form-group">
                                    <label for="em_person_relationship">Relationship</label>
                                    <input type="text" class="form-control" id="em_person_relationship" name="em_person_relationship" placeholder="Relationship">
                                </div>                      





                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>
                                <br/> <br/> <br/>
                            </form>

                        </div>

                    </div>



                    <div role="tabpanel" class="tab-pane fade" id="section2a">

                        <div class="form-wrapper">   
                            <h3>A. Family Medical History</h3>

                            <p>If any of your blood relatives(Parents, Grandparents, Siblings, Childrens) have 
                                or had any of the following deseases. Check appropriate box.</p>


                            <form name="section2a" method="GET">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="Drug"/> Alchohol/ Drug problems
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="asthma"/>Asthma
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="cancer"/>Cancer
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="diabetes"/>Diabetes 
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="epilepsy"/>Epilepsy/ Seizures
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="heart_desease"/>Heart diseases 
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="heriditory"/>Heriditory disorder
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="hbp"/> High blood pressure
                                    </label>
                                </div>                                   
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="mental_illness"/>Mental illness
                                    </label>
                                </div>  
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="migraine"/>Migraine
                                    </label>
                                </div>                                  
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="tuberculosis"/>Tuberculosis
                                    </label>
                                </div>                                  
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="arthritis"/>Arthritis
                                    </label>
                                </div>                                  
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="other"/>Other 
                                    </label>
                                </div>                                  
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="familyHistory" value="none"/>None
                                    </label>
                                </div>                                  



                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>
                            </form>



                        </div>          

                    </div>



                    <div role="tabpanel" class="tab-pane fade" id="section2b">

                        <div class="form-wrapper">

                            <h3>B. Student Medical History</h3>
                            <p>Check any of the following that are, or has been significant concern to you.</p>

                            <form name="section2b" method="GET">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="Drug"/>Alchohol/ Drug problems
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="asthma"/>Asthma
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value=""/>Arthritis
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="tb"/>T.B.
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="diabetes "/>Diabetes 
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="heart_disease"/>Heart diseases 
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="epilepsy"/>Epilepsy/ Seizures 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value=""/>Allergies
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="mental_illness"/>Mental illness
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="anaemia"/>Anaemia
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="other"/>Other
                                    </label>
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="studentHistory" value="none"/>None
                                    </label>
                                </div>                                    

                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>
                            </form>
                        </div>                    






                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="section2c">

                        <div class="form-wrapper">

                            <h3>C. Drug Allergies</h3>
                            <p>Check any of the following that are, or has been significant concern to you.</p>

                            <form name="section2c" method="GET">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="drugAllergies" value="Aspirin"/>Aspirin
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="drugAllergies" value="Sulphar"/>Sulphar
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="drugAllergies" value="Food"/>Food
                                    </label>
                                </div>                                 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="drugAllergies" value="Penicillin"/>Penicillin
                                    </label>
                                </div> 
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="drugAllergies" value="Other"/>Other medications
                                    </label>
                                </div>                                 





                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>
                            </form>
                        </div>   



                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="section2d">



                        <div class="form-wrapper">

                            <h3>D. Miscellaneous History</h3>


                            <form name="section2d" method="GET">

                                <div class="form-group">
                                    <label for="school_interupted">Was your schooling interrupted due to any illness? </label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" name="school_interupted">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="school_interupted">No
                                    </label> 

                                </div>  

                                <div class="form-group">
                                    <label for="person_problems">Do you have any problems concerning followings? Please select the type of problem if any </label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="person_problems" value="financial"/>Financial
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="person_problems" value="social"/>Social
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="person_problems" value="family"/>Family
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="person_problems" value="sex"/>Sex
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="person_problems" value="studies"/>Studies
                                        </label>
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label for="foloowed_other_course">Have you worked/followed an outside course, before coming to the University?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes" name="foloowed_other_course">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="foloowed_other_course">No
                                    </label> 

                                </div>                                 
                                <div class="form-group">
                                    <label for="pass_grade5">Have you passed the Grade 5 Scholarship?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes" name="pass_grade5">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="pass_grade5">No
                                    </label> 
                                </div>                                      
                                <div class="form-group">
                                    <label for="smoke_ciga">Do you smoke cigarattes?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes" name="smoke_ciga">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="smoke_ciga">No
                                    </label> 
                                </div>                                     
                                <div class="form-group">
                                    <label for="take_alcohol">Do you take alcohol?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes" name="take_alcohol">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="take_alcohol">No
                                    </label> 
                                </div>                                      

                                <div class="form-group">
                                    <label for="take_narotic_drugs">Have you taken Narcotic drugs?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes" name="take_narotic_drugs">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="take_narotic_drugs">No
                                    </label> 
                                </div>                                     
                                <div class="form-group">
                                    <label for="pass_grade5">Have you ever attempted suiside?</label>
                                    </br>
                                    <label class="radio-inline">
                                        <input type="radio" value="yes"  name="attemted_suiside">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="no" name="attemted_suiside">No
                                    </label> 
                                </div>                                      


                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>
                            </form>
                        </div>   

                    </div>                 

                    <div role="tabpanel" class="tab-pane fade" id="section2e">

                        <div class="form-wrapper">

                            <h3>D. Disability</h3>


                            <form name="section2e" method="GET">


                                <p>Do you believe that you have a disability that in any way requires 
                                    you to receive special consideration from the University. If so, please indicate the type of 
                                    disability and give a brief description below.</p>    

                                <div class="form-group">
                                    <label for="visual_problem">Visual</label>
                                    <textarea class="form-control" id="visual_problem" name="visual_problem" placeholder="Visual Disabilities"></textarea>
                                </div>                                   
                                <div class="form-group">
                                    <label for="speach_problem">Speech</label>
                                    <textarea class="form-control" id="speach_problem" name="speach_problem" placeholder="Speech Disabilities"></textarea>                              
                                </div>                                    
                                <div class="form-group">
                                    <label for="hearing_problem">Hearing</label>
                                    <textarea class="form-control" id="hearing_problem" name="hearing_problem" placeholder="Hearing Disabilities"></textarea>                                      

                                </div>                                    
                                <div class="form-group">
                                    <label for="physical_problem">Physical</label>
                                    <textarea class="form-control" id="physical_problem" name="physical_problem" placeholder="Physical Disabilities"></textarea>
                                </div> 

                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>

                                <br/>  <br/>    <br/>  <br/>&nbsp;

                            </form>
                        </div>   




                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="section2f">


                        <div class="form-wrapper">

                            <h3>D. Vaccinations</h3>
<br/><br/>

                            <form name="section2f" method="GET">

                                <table>

                                    <tr><th><strong>Vaccinations</strong></th><th>Date</th></tr>

                                    <tr>
                                        <td width="157px">BCG</td>
                                        <td width="400px">
                                            <div class="form-group">
                                                <input type="text" name="bcg" id="bcg" class="form-control vacination"/>
                                            </div>
                                        </td>                                        

                                    </tr>
                                    <tr>
                                        <td>OPV</td>
                                        <td>
                                            <div class="form-group">
                                            <input type="text" name="opv" id="opv" class="form-control vacination"/>
                                         </div>
                                        </td>                                        
                                    </tr>                                    
                                    <tr>
                                        <td>DPT</td>
                                        <td><input type="text" name="dpt" id="dpt" class="vacination"/></td>                                        
                                    </tr>                                    
                                    <tr>
                                        <td>Measles</td>
                                        <td><input type="text" name="measles" id="measles" class="vacination"/></td>                                        
                                    </tr>                                      
                                    <tr>
                                        <td>MR/MMR</td>
                                        <td><input type="text" name="mmr" id="mmr" class="vacination"/></td>                                        
                                    </tr>  
                                    <tr>
                                        <td>PT/ADT/TT</td>
                                        <td><input type="text" name="adt" id="adt" class="vacination"/></td>                                        
                                    </tr>                                      
                                    <tr>
                                        <td>Rubella</td>
                                        <td><input type="text" name="rubella" id="rubella" class="vacination"/></td>                                        
                                    </tr>                                      
                                    <tr>
                                        <td>Hepatitis B</td>
                                        <td><input type="text" name="hepatitis" id="hepatitis" class="vacination"/></td>                                        
                                    </tr>                                      
                                    <tr>
                                        <td>Chickenpox</td>
                                        <td><input type="text" name="chickenpox" id="chickenpox" class="vacination"/></td>                                        
                                    </tr>                                      


                                </table>

                                <button style="float: right;" type="submit" class="btn btn-default">Save</button>

                                <br/>  <br/>    <br/>  <br/>&nbsp;

                            </form>

                        </div>



                    </div>
                </div>


            </div>
        </div>

    </body>
</html>
