   <?php 
   include "partials/head.php";
   include "partials/nav.php";

   $conn = mysqli_connect('localhost', 'root', '', 'fyp');
   if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $msg = $_POST['msg'];

     $send = mysqli_query($conn, "INSERT INTO feedbacks (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$msg')");
     
     if($send)
     {
      ?><script type="text/javascript">alert('Message Sent !!');</script><?php
     }
   }
   ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height" id="home">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>

    <section>
        <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Introduction</h1>
                    <!-- <p class="lead section-lead">Hello</p> -->
                    <p class="section-paragraph">Welcome to the website that helps you to know about the procedure for gaining the government approved citizenship. We help you to keep your personal update about the requirements and help you find the best possible way to get citizenship.</p>
                    <div class="col-lg-4 col-md-4  col-sm-4 "  >
                    <i  class="fa fa-desktop fa-5x  icon-round  faa-ring animated"></i>
                    <h4><strong>Easy to use</strong> </h4>
                    <p>
                        Just some easy steps then you are a citizen of the country. Follow the written steps. Very user friendly.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-4" >
                    <i class="fa fa-paper-plane-o  fa-5x icon-round  faa-pulse animated"></i>
                    <h4><strong>Official letter creating</strong> </h4>
                    <p>
                        You can now create your own letter to submit it in the office to gain your citizenship. All you need is to fill up the form and take it to your nearby CDO office for verification to do the final steps.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-4" >
                    <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                    <h4><strong>Informative</strong></h4>
                    <p>
                        We provide you all the information regarding the process for the citizenship. You can get it through the text format or in the
                    </p>
                </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Content Section -->
    <section>
    <aside id="img-bg" class="image-bg"></aside>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Procedure</h1>
                    <p class="lead section-lead" align="justify">
                        <section>
                        <div class="container">
                        
                          <ul class="nav nav-tabs">
                            <ul class="nav nav-tabs">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Introduction
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a data-toggle="tab" href="#procedure1">Short title and commencement</a></li>
                                  <li><a data-toggle="tab" href="#procedure2">Definitions</a></li>  
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Issuing New citizenship
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a data-toggle="tab" href="#procedure3">By Descent</a></li>
                                  <li><a data-toggle="tab" href="#procedure4">By Birth</a></li>  
                                  <li><a data-toggle="tab" href="#procedure5">On the basis of Matrimonial Relationship</a></li>
                                  <li><a data-toggle="tab" href="#procedure6">Information to be given to applicant</a></li>
                                  <li><a data-toggle="tab" href="#procedure16">By the family member of Employee </a></li>
                                  <li><a data-toggle="tab" href="#procedure7">Other procedures for obtaining certificate of naturalized citizenship</a></li> 
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Authority regarding Citizenship
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a data-toggle="tab" href="#procedure8">Authority to issue certificate</a></li>
                                  <li><a data-toggle="tab" href="#procedure15">Power to depute citizenship teams</a></li>
                                  <li><a data-toggle="tab" href="#procedure18">Power to alter Schedules</a></li>
                                  <li><a data-toggle="tab" href="#procedure13">Records of certificate of citizenship to be maintained</a></li>
                                  <li><a data-toggle="tab" href="#procedure17">Provisions relating to directives and procedures</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Editing/Dropping Citizenship
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a data-toggle="tab" href="#procedure9">Procedures for renouncing citizenship</a></li>
                                  <li><a data-toggle="tab" href="#procedure10">Decision making authority</a></li>
                                  <li><a data-toggle="tab" href="#procedure11">Resumption of citizenship of Nepal</a></li>
                                  <li><a data-toggle="tab" href="#procedure12">Revocation of Certificate</a></li>
                                  <li><a data-toggle="tab" href="#procedure14">Correction of details</a></li>
                                  <li><a data-toggle="tab" href="#procedure19">Repeal and saving</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Video
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a data-toggle="tab" href="#video">Procedure Video</a></li>
                                </ul>
                              </li>
                            </ul>

                        </ul>
                          

                          <div class="tab-content">
                            <div id="procedure1" class="tab-pane fade in active">
                              <h3>Short title and commencement:</h3>

                                    (Nepal Government, 2008) <br/>
                                    </ul>
                                    (1) These rules may be called the "Nepal Citizenship Rules, 2063 (2006)."
                                    <br/>
                                    (2) These Rules shall commence immediately.
                                    <ul></p>
                            </div>
                            <div id="procedure2" class="tab-pane fade">
                              <h3>Definations</h3>
                              <p>Unless the subject or the context otherwise requires, in this Rules: - <br/>
                                    (a) "Act" means the Nepal Citizenship Act, 2063 (2006). <br/>
                                    (b) "Ministry" means Ministry of Home Affairs, Government of Nepal. <br/>
                                    (c) "Local Body" means the Village Development Committee or Municipality formed pursuant to the laws in force; and this term also includes the Sub-Municipal Corporation and Municipal Corporation.<br/>
                            </p>
                            </div>

                            <div id="procedure3" class="tab-pane fade">
                              <h3>Procedures for obtaining certificate of citizenship of Nepal by descent:</h3>
                              <p>(1) A citizen of Nepal, who has completed the age of Sixteen years and intends to obtain the certificate of citizenship of Nepal by descent, has to make an application, in the format referred to in Schedule-1, and accompanied by the following documents, to the concerned Chief District Officer: 
                                    (a) The certificate of citizenship of Nepal of his or her father or mother or relative within three generations of his or her lineage,<br/>
                                    (b) A recommendation made by the concerned Local Body setting out his or her birth place and relationship or a certificate of birth registration, <br/>
                                    (c) In the case where the certificate of citizenship of a relative within three generations of his or her lineage has been submitted pursuant to Clause (a), a relationship certificate setting out the relationship with that relative. <br/>
                                    (2) The certificate of citizenship of Nepal may, based on the following documents, be provided to a citizen of Nepal who fails to submit the evidence referred to in Sub-rule (1) along with the application:<br/>
                                    (a) An on the spot deed of public inquiry, in the format referred to in Schedule-3, executed by local inhabitants, who have obtained the certificate of citizenship of Nepal, in presence of a representative of the Local Body, setting out that the applicant is a citizen of Nepal by descent by virtue of that his father or mother is a citizen of Nepal and that he or she was born in Nepal and has been residing permanently within the territory of Nepal continuingly,<br/>
                                    (b) Identification, in the format referred to in Schedule-4, made on the spot by three citizens of Nepal, who reside in the concerned Ward and have obtained the certificate of citizenship of Nepal.<br/>
                                    Provided that, if the authority making recommendation for citizenship or providing citizenship considers that the identifying persons have made identification doubtfully, such an authority may make further inquiry into the matter.<br/>
                                    (3) If a person who was found within the territory of Nepal and has completed the age of Sixteen years but the whereabouts of his or her father or mother are not known intends to obtain the certificate of citizenship of Nepal, such a person has to make an application, in the format referred to in Schedule-1, accompanied by the following documents, to the concerned Chief District Officer:<br/>
                                    (a) Where such a person has been brought up by a children home or orphan children protection organization or association or orphanage which has obtained approval from the Government of Nepal, the recommendation of such a home, organization, association or orphanage,<br/>
                                    (b) Where any person has obtained guardianship of and maintained and subsisted that person in accordance with the laws in force, a copy of the certificate of citizenship of such a person, <br/>
                                    (c) Identification made by the chief of organization maintaining and subsisting that person in the organization referred to in Clause (a) or by the person maintaining and subsisting that person pursuant to Clause (b).<br/>
                                    (4) If it is required to further inquire into the matter in relation to the fatherhood or motherhood of the applicant pursuant to Sub-rule (3), a recommendation of the Local Body or police report may be required, as per necessity <br/>
                                    (5) If, in examining the application received pursuant to Sub-rule (1) or (3), the applicant is found to be eligible to obtain the certificate of citizenship of Nepal by descent, the certificate of citizenship of Nepal by descent may be issued to him or her.<br/>
                                    (6) The column of the certificate of citizenship of the person, whose fatherhood or motherhood has not been settled, where the name of father or mother is to be specified shall indicate the matter that the fatherhood or motherhood has not been traced out and specify the name, surname and address of the guardian.<br/>
                                    (7) The certificate of citizenship may be issued also based on the registration records prepared by and provisional slips distributed by the citizenship teams deputed from time to time prior to the commencement of this Rule.<br/>
                                    (8) The list of persons who make application for the certificate of citizenship of Nepal pursuant to Sub-rule (2) has to be made public on the same day.<br/>
                        </p>
                            </div>

                            <div id="procedure4" class="tab-pane fade">
                              <h3>Procedures for obtaining the certificate of citizenship of Nepal by birth:</h3>
                              <p>(1) If a citizen of Nepal who has completed the age of Sixteen years intends to obtain the certificate of citizenship of Nepal by birth pursuant to Subsection (1) of Section 4 of the Act, such a citizen shall have to make an application, accompanied by the following documents, to the concerned Chief District Officer, in the format referred to in Schedule-1: <br/>
                                    (a) A recommendation made by the concerned Local Body setting out the matter that the applicant was born within Nepal and has been permanently residing in Nepal continuingly, <br/>
                                    (b) Land ownership registration certificate or tenancy right certificate or household certificate in his or her name or in the name of his or her family or an evidence indicating the inclusion of his or her name or his or her father’s or mother’s name in the electoral rolls prepared by the Election Commission. <br/>
                                    Explanation: For the purposes of this Clause, "family" includes father, mother, step mother, son, unmarried daughter and also daughter-in-law whether living in an undivided family or living separately. <br/>
                                    (2) A person who intends to obtain the certificate of citizenship pursuant to Sub-rule (1) shall have to make an application to the Chief District Officer prior to the election of the Constituent Assembly. <br/>
                                    (3) The certificate of citizenship of Nepal may, pursuant to Subsection (4) of Section 8 of the Act, and based on the following documents, be provided to a citizen of Nepal who fails to submit the evidence referred to in Sub-rule (1) along with the application: <br/>
                                    (a) An on the spot deed of public inquiry, in the format referred to in Schedule-5, executed by local inhabitants, who have obtained the certificate of citizenship of Nepal, in presence of a representative of the Local Body, setting out that the applicant was born in Nepal and has been residing permanently within the territory of Nepal continuingly, <br/>
                                    (b) Identification, in the format referred to in Schedule-4, made on the spot by three citizens of Nepal, who reside in the concerned Ward and have obtained the certificate of citizenship of Nepal. Provided that, if the authority making recommendation for citizenship or providing citizenship considers that the identifying persons have made identification doubtfully, such an authority may make further inquiry into the matter. <br/>
                                    (4) The Chief District Officer shall have to make decision on the applications received within the period referred to in Sub-section (3) of Section 4 of the Act within One month from the date of registration of such applications. <br/>
                                    (5) If, in examining the application received pursuant to Sub-rule (1) or (3), the applicant is found to be eligible to obtain the certificate of citizenship of Nepal by birth, the certificate of citizenship of Nepal by birth may be issued to him or her<br/>
                                    (6) The list of persons who make application for the certificate of citizenship of Nepal pursuant to Sub-rule (3) has to be made public on the same day. <br/>
                        </p>
                            </div>
                            <div id="procedure5" class="tab-pane fade">
                              <h3>Procedures for obtaining certificate of naturalized citizenship of Nepal on the basis of matrimonial relationship:</h3>
                              <p>(1) If a foreign woman who has matrimonial relationship with a citizen of Nepal intends to obtain the citizenship of Nepal, she has to make an application, accompanied by the following documents, to the concerned Chief District Officer, in the format referred to in Schedule-7: <br/>
                                (a) A recommendation made by the concerned Local Body specifying the matrimonial relationship with the citizen of Nepal, <br/>
                                (b) A proof showing that action has been instituted by her to renounce the foreign citizenship. <br/>
                                (2) If, in examining the application received pursuant to Sub-rule (1), the applicant is found to be eligible to obtain the certificate of naturalized citizenship of Nepal, the certificate of naturalized citizenship of Nepal may be issued to her. <br/>
                        </p>
                            </div>
                            <div id="procedure6" class="tab-pane fade">
                              <h3>Information to be given to applicant: </h3>
                              <p>If, in examining application received pursuant to Rule 3 or 4, any applicant is found ineligible to obtain the certificate of citizenship of Nepal, a decision has to be made to that effect and information given to the applicant within seven days.</p>
                            </div>
                            <div id="procedure7" class="tab-pane fade">
                              <h3>Other procedures for obtaining certificate of naturalized citizenship of Nepal:</h3>
                              <p>(1) In the case of an offspring born to a woman citizen of Nepal who has got married to a foreign citizen, an application, accompanied by the following documents, has to be made to the Chief District Officer, in the format referred to in Schedule-7: <br/>
                                    (a) A copy of the certificate of citizenship of Nepal of the mother, <br/>
                                    (b) A recommendation made by the concerned Local Body setting out that he or she was born in Nepal and has been permanently residing in Nepal, <br/>
                                    (c) A proof that he or she has not obtained the citizenship of a foreign country on the basis of his or her father's citizenship. <br/>
                                    (2) If any foreign citizen who has fulfilled the terms and conditions set forth in Sub-section (4) of Section 5 of the Act intends to acquire the citizenship of Nepal, he or she has to make an application, accompanied by the recommendation of the Local Body related with his or her abode, to the concerned Chief District Officer, in the format referred to in Schedule-7. <br/>
                                    (3) On receipt of an application pursuant to Sub-rule (1) or (2), the Chief District Officer may, if he or she considers necessary, inquire the Mayor of the concerned Municipality or Chairperson of the Village Development Committee into the matter and, if the applicant is found to have fulfilled the terms and conditions set forth in Sub-section (4) of Section 5 of the Act, forward the application, along with his or her opinion, to the Ministry. <br/>
                                    (4) Upon making examination of the application received pursuant to Sub-rule (3), the Ministry may provide the certificate of naturalized citizenship of Nepal in the format referred to in Schedule-8. <br/>
                                    (5) If, out of the offspring of the person who has acquired the naturalized citizenship of Nepal pursuant to Sub-section (5) of Section 5 of the Act, any offspring who was born prior to the acquisition of such citizenship by that person intends to acquire the naturalized citizenship of Nepal, he or she may make an application to the concerned Chief District Officer in the format referred to in Schedule-7. The application has to be accompanied by a relationship certification letter, a copy of the father's or mother's certificate of citizenship and a recommendation made by the Local Body that he or she has been residing in Nepal. <br/>
                                    (6) If, in examining any application received pursuant to Sub-rule (5), the applicant is found to be eligible to obtain the certificate of naturalized citizenship, the certificate of naturalized citizenship may be issued to him or her.
                                </p>
                            </div>
                            <div id="procedure8" class="tab-pane fade">
                              <h3>Authority to issue certificate of citizenship:</h3>
                              <p>(1) The Chief District Officer shall have the power to issue the certificate of citizenship of Nepal by descent, by birth, by the reason of matrimonial naturalized and certificate of naturalized citizenship of Nepal to those offspring of a person having obtained naturalized citizenship of Nepal who were born prior to the obtaining of such citizenship by that person. <br/>
                                    *(2) The Chief District Officer may delegate the powers conferred to him or her under Sub-rule (1) to his or her subordinate officer employee or to the chief of a team deputed by the Government of Nepal to distribute citizenship, from time to time. <br/>
                                    **(3) .................. <br/>
                                    (4) The Ministry shall have the power to issue the certificate of naturalized citizenship of Nepal other than that set forth in Sub-rule (1). <br/>
                                    (5) The Council of Ministers, Government of Nepal, shall have the power to grant the honorary citizenship of Nepal to be granted pursuant to Section 6 of the Act. <br/>
                                    (6) After a decision has been made to grant citizenship pursuant to Sub-rule (5), the Ministry shall issue the certificate of honorary citizenship of Nepal. <br/>
                                    (7) The authority issuing the certificate of citizenship pursuant to these Rules shall issue the certificate of citizenship of Nepal by descent or by birth in the format referred to in Schedule-2 and the certificate of naturalized citizenship of Nepal in the format referred to in Schedule-8. <br/><br/>
                                    *Amended by the First Amendment. <br/>
                                    **Deleted by the First Amendment.
                                </p>
                            </div>

                            <div id="procedure9" class="tab-pane fade">
                              <h3>Procedures for renouncing citizenship of Nepal:</h3>
                              <p>(1) If any citizen of Nepal intends to renounce the citizenship of Nepal, he or she shall have to give information thereof, accompanied by the original copy of the certificate of citizenship of Nepal, in the format referred to in Schedule-9, to the concerned Chief District Officer if he or she is domiciled within Nepal and to the concerned Nepalese ambassador or the chief of Nepalese mission or the consul general or the consul if he or she is domiciled in a foreign country. <br/>
                                (2) Where information has been given abroad pursuant to Sub-rule (1), the Nepalese ambassador or the chief of Nepalese mission or the consul general or the consul shall forward the full details thereof to the Ministry through the Ministry of Foreign Affairs within seven days. <br/>
                                (3) The Ministry shall forward the information received pursuant to Sub-rule (2) to the concerned Chief District Officer. <br/>
                                (4) On receipt of the information pursuant to Sub-rule (1), the Chief District Officer shall register such information in the register maintained in the format referred to in Schedule-10; and the citizenship of Nepal of such person shall cease to exist from the date of such registration. 
                        </p>
                            </div>
                            <div id="procedure10" class="tab-pane fade">
                              <h3>Decision making authority:</h3>
                              <p>If there arises a question of whether a citizen of Nepal has acquired the citizenship of a foreign country pursuant to Subsection (5) of Section 10 of the Act, the Ministry shall decide that question.</p>
                            </div>
                            <div id="procedure11" class="tab-pane fade">
                              <h3>Procedures for resumption of citizenship of Nepal:</h3>
                              <p>(1) If any person who has renounced the citizenship of Nepal pursuant to Section 11 of the Act and gone abroad intends to acquire the citizenship of Nepal again, such a person shall have to make an application, in the format referred to in Schedule-11, accompanied by a proof showing the renunciation of foreign citizenship, to the Ministry or the concerned Chief District Officer that has previously issued the certificate of citizenship to that person. <br/>
                        (2) On receipt of an application with information referred to in Sub-rule (1), the authority referred to in Rule 8 shall give information of the registration of that information in the format referred to in Schedule-12 and issue the certificate of citizenship of Nepal containing the same details as mentioned in the previous certificate of citizenship. <br/>
                        </p>
                            </div>
                            <div id="procedure12" class="tab-pane fade">
                              <h3>Procedures for revocation of certificate of citizenship: </h3>
                              <p>If it is proved that any person has obtained the certificate of citizenship of Nepal by giving false details pursuant to Section 12 of the Act, the following authority shall revoke such a certificate of citizenship of Nepal: <br/>
                        (a) The Ministry, if the certificate was issued by it, <br/>
                        (b) The concerned Chief District Office, if the certificate was issued by the District Administration Office or other body, <br/>
                        (c) Information along with the details of the certificate of citizenship of Nepal revoked by the Chief District Officer pursuant to Clause (b) shall be forwarded to the Regional Administration Office and the Ministry. 
                        </p>
                            </div>
                            <div id="procedure13" class="tab-pane fade">
                              <h3>Records of certificate of citizenship to be maintained: </h3>
                              <p>The records of the certificate of citizenship as referred to in Section 15 of the Act shall be maintained as follows: <br/>
                        (a) Details relating to citizenship shall be recorded and maintained systematically, and such details may also be maintained in electronic means. <br/>
                        (b) The District Administration Offices shall have to forward monthly details of the distribution of the certificates of citizenship to the Regional administration Office and the Ministry. 
                        </p>
                            </div>
                            <div id="procedure14" class="tab-pane fade">
                              <h3>Procedures for correction of details:</h3>
                              <p>(1) A person who intends to get corrected any matter contained in the certificate of citizenship of Nepal pursuant to Sub-sections (1) and (3) of Section 17 of the Act has to make an application to the Ministry or the Chief District Officer. <br/>
                        (2) If an application is made pursuant to Sub-rule (1), the Ministry or the Chief District Officer may, upon making necessary inquiry into the matter, take back the certificate of citizenship previously issued and provide another certificate of citizenship, as amended, pursuant to Sub-section (2) of Section 17 of the Act.
                        </p>
                            </div>
                            <div id="procedure15" class="tab-pane fade">
                              <h3>Power to depute citizenship teams: </h3>
                              <p>(1) The Government of Nepal may depute teams for the distribution of the certificates of citizenship pursuant to Sub-section (1) of Section 22 of the Act. <br/>
                        (2) In deputing a team pursuant to Sub-rule (1), the team shall be deputed in such a way that its chief is at least gazetted third class employee and it consists of other employees of the civil service itself. <br/>
                        (3) A team deputed pursuant to Sub-rule (1) shall distribute the certificates of citizenship of Nepal, subject to the direction given by the Government of Nepal pursuant to Sub-section (2) of Section 22 of the Act. <br/>
                        (4) A person who is not satisfied with the decision made by the team deputed pursuant to Sub-rule (1) not to issue the certificate of citizenship of Nepal may make an application to the concerned Chief District Officer within thirty days. The decision made by the Chief District Officer in this respect shall be final. <br/>
                        (5) The certificate of citizenship distribution team shall collect and maintain records of the minors who have not obtained the certificate of citizenship and the persons who have become major and are eligible to acquire citizenship but who could not obtain the certificate of citizen while the team was in mission.
                        </p>
                            </div>
                            <div id="procedure16" class="tab-pane fade">
                              <h3>Procedures for obtaining certificate of citizenship by the family member
                        of employee: 
                        </h3>
                              <p>(1) If the family of any employee intends to obtain the certificate of citizenship of Nepal from the District Administration Office in the district where such employee is in service, he or she has to make an application, in the format referred to in Schedule-1, accompanied by the following documents, to the Chief District Officer: <br/>
                        (a) The certificate of citizenship of Nepal of his or her father or mother, <br/>
                        (b) A recommendation by the office where the employee is in service, <br/>
                        (c) In the case of a married woman, the certificate of citizenship of her husband and the marriage registration evidence. <br/>
                        (2) The office issuing the citizenship shall issue the certificate of citizenship based on the documents received pursuant to Sub-rule (1), maintain the records of the certificate of citizenship so granted in that office and also give information thereof to the District Administration Office of the district where the concerned employee has permanent address <br/>
                        <strong>Explanation: </strong> <br/>
                        (1) For the purposes of this Rule, "employee" means an employee whose salary and allowance is paid from the funds of the Government of Nepal or an employee of a corporation or a teacher or professor. <br/>
                        (3) "Family" means the husband, wife, son, unmarried daughter, adopted son, unmarried adopted daughter, father, mother or step mother of the employee referred to in Clause (1) who lives with, and has to be maintained by the employee, and this term also includes, in the case of a male employee and unmarried woman employee, his or her grand-father and grand-mother, and in the case of a married employee, his or her mother-in-law and father-in-law. 

                        </p>
                            </div>
                            <div id="procedure17" class="tab-pane fade">
                              <h3>Provisions relating to directives and procedures</h3>
                              <p>The Ministry may, subject to the Act and this Rule, issue necessary directives and frame and enforce procedures, as required.</p>
                            </div>
                            <div id="procedure18" class="tab-pane fade">
                              <h3>Power to alter Schedules:</h3>
                              <p>The Government of Nepal may, by a Notification in the Nepal Gazette, make amendment or alteration in the Schedules, as required.</p>
                            </div>

                            <div id="procedure19" class="tab-pane fade">
                                <h3>Repeal and saving</h3>
                                <p>
                                  (1) The Nepal Citizenship Rules, 2049 (1992) is hereby repealed. <br/>
                                  (2) Any act done and action taken under the Nepal Citizenship Rules, 2049 (1992) shall be deemed to have been done and taken under these Rules.
                                </p>
                            </div>
                            <div id="video" class="tab-pane fade">
                                <p>
                                <video width="1140" height="400" controls>
                                <source src="procedure.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                                </video>
                                </p>
                            </div>
                          </div>
                        </div>
                        </section>
                    <p class="section-paragraph"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--     <section>    
    <aside id="detail-img-start" class="image-bg-fixed-height"></aside>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading"></h1>
                    <p class="lead section-lead">Hello</p>
                    <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                </div>
            </div>
        </div>
    </section> -->

    <aside id= "contact-img-start" class=""></aside>

    <section>
        <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea  id="message" name="msg" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                Setopool, Maitidevi<br>
                Kathmandu, Nepal<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Government Work Procedure</strong><br>
                <a href="mailto:#">government.work@procedure.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
    </section>


   <?php include 'partials/footer.php'; ?>

  
