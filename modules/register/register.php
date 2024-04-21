<?php include '../../views/includes/head.php'; ?>
<?php include '../../views/includes/navbar.php'; ?>
<section>
    <div class="container mt-3 mb-3">
        <!-- <div class="row">
            <div class="col-md-4">
                <img src="<?php echo BASE_URL . 'assets/images/img/model20.png';?>" class="img-fluid mt-4 rounded shadow">
            </div> -->
        <div class="card rounded-lg shadow mt-5">
            <div class="card-body">
                <div class="card-header p-4 rounded shadow">
                    <h3>Registration Form</h3>
                </div>
                <!-- <div class="col-md-6">
                    <a href="registration.php" type="button" class="shadow-lg btn btn-success form-control p-2 rounded">Signup as Ordinary User </a>
                </div> -->
                <div class="card-body">
                    <form id="register-user">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Last Name </label>
                                    <input type="text" id="lastname" class="form-control form-control-lg m-2" name="lastname" placeholder="Lastname" required autofocus>
                                    <i class="fa fa-user fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> First Name </label>
                                    <input type="text" id="firstname" class="form-control form-control-lg m-2" name="firstname" placeholder="Firstname" required autofocus>
                                    <i class="fa fa-user fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Birth Date </label>
                                    <input type="text" id="dob" class="form-control form-control-lg m-2" name="dob" placeholder="DD-MM-YYYY">
                                    <i class="fa fa-calendar fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> Gender </label>
                                    <select name="gender" class="form-control form-control-lg m-2" required>
                                        <option>Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                    <i class="fa fa-mars fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Barangay </label>
                                    <select name="barangay" class="form-control form-control-lg m-2" required>
                                        <option value="Adlaon">Adlaon</option>
                                        <option value="Agsungot">Agsungot</option>
                                        <option value="Apas">Apas</option>
                                        <option value="Babag">Babag</option>
                                        <option value="Bacayan">Bacayan</option>
                                        <option value="Banilad">Banilad</option>
                                        <option value="Basak Pardo">Basak Pardo</option>
                                        <option value="Basak San Nicolas">Basak Sanicolas</option>
                                        <option value="Binaliw">Binaliw</option>
                                        <option value="Bonbon">Bonbon</option>
                                        <option value="Budlaan">Budlaan</option>
                                        <option value="Buhisan">Buhisan</option>
                                        <option value="Bulakaw">Bulakaw</option>
                                        <option value="Buot Taup Pardo">Buot Taup Pardo</option>
                                        <option value="Busay">Busay</option>
                                        <option value="Calamba">Calamba</option>
                                        <option value="Cambinocot">Cambinocot</option>
                                        <option value="Camputhaw">Camputhaw</option>
                                        <option value="Capitol Site">Capitol Site</option>
                                        <option value="Carreta">Carreta</option>
                                        <option value="Central">Central</option>
                                        <option value="Cogon Pardo">Cogon Pardo</option>
                                        <option value="Cogon Ramos">Cgon Ramos</option>
                                        <option value="Day-as">Day-as</option>
                                        <option value="Duljo">Duljo</option>
                                        <option value="Ermita">Ermita</option>
                                        <option value="Guadalupe">Guadalupe</option>
                                        <option value="Guba">Guba</option>
                                        <option value="Hippodromo">Hippodromo</option>
                                        <option value="Inayawan">Inayawan</option>
                                        <option value="Kalubihan">Kalubihan</option>
                                        <option value="Kalunasan">Kalunasan</option>
                                        <option value="Kamagayan">Kamagayan</option>
                                        <option value="Kasambagan">Kasambagan</option>
                                        <option value="kinasang-an Pardo">Kinsang-an Pardo</option>
                                        <option value="Labangon">Labangon</option>
                                        <option value="Lahug">Lahug</option>
                                        <option value="Lorega">Lorega</option>
                                        <option value="Lusaran">Lusaran</option>
                                        <option value="Luz">Luz</option>
                                        <option value="Mabini">Mabini</option>
                                        <option value="Mabolo">Mabolo</option>
                                        <option value="Malubog">Malubog</option>
                                        <option value="Mambaling">Mambaling</option>
                                        <option value="Pahina Central">Pahina Central</option>
                                        <option value="Pahina San Nicolas">Pahina San Nicolas</option>
                                        <option value="Pamutan">Pamutan</option>
                                        <option value="Pardo">Pardo</option>
                                        <option value="Pari-an">Pari-an</option>
                                        <option value="Paril">Paril</option>
                                        <option value="Pasil">Pasil</option>
                                        <option value="Pit-os">Pit-os</option>
                                        <option value="Pulang Bato">Pulang Bato</option>
                                        <option value="Pung-ol Sibugay">Pung-ol Sibugay</option>
                                        <option value="Punta Princesa">Punta Princesa</option>
                                        <option value="Quiot Pardo">Quiot Pardo</option>
                                        <option value="Sambag 1">Sambag I</option>
                                        <option value="Sambag II">Sambag II</option>
                                        <option value="San Antonio">San Antonio</option>
                                        <option value="San Jose">San Jose</option>
                                        <option value="San Nicolas Central">San Nicolas Central</option>
                                        <option value="San Roque">San Roque</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Sapangdaku">Sapangdaku</option>
                                        <option value="Sawang Calero">Sawang Calero</option>
                                        <option value="Sinsin">Sinsin</option>
                                        <option value="Sirao">Sirao</option>
                                        <option value="Suba Poblacion">Suba Poblacion</option>
                                        <option value="Sudlon I">Sudlon I</option>
                                        <option value="Sudlon II">Sudlon II</option>
                                        <option value="Tabunan">Tabunan</option>
                                        <option value="Tagbao">Tagbao</option>
                                        <option value="Talamban">Talamban</option>
                                        <option value="Taptap">Taptap</option>
                                        <option value="Tejero">Tejero</option>
                                        <option value="Tinago">Tinago</option>
                                        <option value="Tisa">Tisa</option>
                                        <option value="To-ong Pardo">To-ong Pardo</option>
                                        <option value="T. Padilla">T. Padilla</option>
                                        <option value="Zapatera">Zapatera</option>
                                    </select>
                                    <i class="fa fa-map-marker fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> City </label>
                                    <select class="form-control form-control-lg m-2 mt-1" name="city">
                                        <option>City</option>
                                        <option value="Cebu City">Cebu City</option>
                                    </select>
                                    <i class="fa fa-map-marker fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- <div class="col-md-6">
                                    <label> Email </label>
                                    <input type="email" id="email" class="form-control form-control-lg m-2" name="email" placeholder="Email" required autofocus>
                                    <i class="fa fa-envelope fa-input-icon"></i>
                                </div> -->
                                <div class="col-md-6">
                                    <label> Email </label>
                                    <input type="email" id="email" class="form-control form-control-lg m-2" name="email" placeholder="Email" required autofocus>
                                    <i class="fa fa-envelope fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> Phone </label>
                                    <input type="text" id="contact_no" class="form-control form-control-lg m-2" name="contact_no" placeholder="Phone Number" required autofocus>
                                    <i class="fa fa-phone fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Password </label>
                                    <input type="password" class="form-control form-control-lg m-2" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninput="return validate_password()" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="required">
                                    <!--<i class="bi bi-eye-slash" id="togglePassword"></i>-->
                                    <i class="fa fa-key fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> Confirm Password </label>
                                    <input type="password" class="form-control form-control-lg m-2" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="required">
                                    <i class="fa fa-key fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Office Type </label>
                                    <input type="text" id="office_name" class="form-control form-control-lg m-2 mt-1" name="office_name" placeholder="Name of your organization" required autofocus>
                                    <i class="fa fa-info fa-input-icon"></i>
                                </div>
                                <div class="col-md-6">
                                    <label> Office Type </label>
                                    <select name="office_type" class="form-control form-control-lg m-2" required>
                                        <optgroup>
                                            <option value="">Type of Organization</option>
                                            <option value="NGO">NGO's</option>
                                            <option value="Government">Goverments</option>
                                        </optgroup>
                                    </select>
                                    <i class="fa fa-flag fa-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Office Days </label>
                                    <select name="days" class="form-control form-control-lg m-2" required>
                                        <optgroup>
                                            <option value="">Days Available</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Everyday">Sunday to Saturday</option>
                                        </optgroup>
                                    </select>
                                    <i class="fa fa-calendar fa-input-icon"></i>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="pt-5">
                                        <input type="checkbox" value="" id="flexCheckDefault" class="form-check-input" required>
                                        <button type="button" class="btn btn-terms" data-toggle="modal" data-target="#exampleModalLong">
                                        Please Confirm the terms and agreements</button>
                                    </div>
                                </div>
                            </div>
                                <!Terms and Agreements Modal -->
                            <div class="row d-flex justify-content-start">
                                <div class="col-md-4">
                                    <button type="submit" class="btn-button btn-lg">Register</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <class="modal-title" id="ModalLongTitle">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" p style="text-align:left" p style="line-height:200%">
            <br><b>  CAM2RESCUE Terms of Service </b></br>
            <br><b> 1. AGREEMENT TO TERMS </b></br>
            <br><p> These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Cam2Rescue (<b>"Company," “we," “us," or “our”</b>), concerning your access to and use of the cam2rescue website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). We are registered in the Philippines and have our registered office at Cebu City Philippines, cebu, cebu 6000. You agree that by accessing the Site, you have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY. </p></br>

            <br><p> Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use at any time and for any reason. We will alert you about any changes by updating the “Last updated” date of these Terms of Use, and you waive any right to receive specific notice of each such change. Please ensure that you check the applicable Terms every time you use our Site so that you understand which Terms apply. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the date such revised Terms of Use are posted. </p></br>

            <br><p> The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable. </p></br>

            <br><p><b> The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to use or register for the Site. </b> </p></br>

            <br><b> 2. INTELLECTUAL PROPERTY RIGHTS </b></br>
            <br><p> Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the United States, international copyright laws, and international conventions. The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms of Use, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission. </p></br>

            <br><p> Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks. </p></br>

            <br><b> 3. USER REPRESENTATIONS </b></br>
            <br><p> By using the Site, you represent and warrant that: (1) you have the legal capacity and you agree to comply with these Terms of Use; (2) you are not a minor in the jurisdiction in which you reside; (3) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise; (4) you will not use the Site for any illegal or unauthorized purpose; and (5) your use of the Site will not violate any applicable law or regulation. </p></br>

            <br><p> If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof). </p></br>

            <br><b> 4. PROHIBITED ACTIVITIES </b></br>

            <br><p> You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.As a user of the Site, you agree not to: </p></br>
            <br><ul>
            <br><li>Systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.</li></br> 
            <br><li>Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.</li></br> 
            <br><li>Circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Site and/or the Content contained therein.</li></br>
            <br><li>Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.</li></br>
            <br><li>Use any information obtained from the Site in order to harass, abuse, or harm another person.</li></br>
            <br><li>Make improper use of our support services or submit false reports of abuse or misconduct.</li></br>
            <br><li>Use the Site in a manner inconsistent with any applicable laws or regulations.</li></br>
            <br><li>Engage in unauthorized framing of or linking to the Site.</li></br>
            <br><li>Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Site.</li></br>
            <br><li>Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.</li></br>
            <br><li>Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats (“gifs”), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as “spyware” or “passive collection mechanisms” or “pcms”).</li></br>
            <br><li>Interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site.</li></br>
            <br><li>Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Site to you.</li></br>
            <br><li>Copy or adapt the Site’s software, including but not limited to Flash, PHP, HTML, JavaScript, or other code.</li></br>
            <br><li>Except as permitted by applicable law, decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site.</li></br>
            <br><li>Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software.</li></br>
            <br><li>Use a buying agent or purchasing agent to make purchases on the Site.</li></br>
            <br><li>Make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.</li></br>
            <br><li>Use the Site as part of any effort to compete with us or otherwise use the Site and/or the Content for any revenue-generating endeavor or commercial enterprise.</li></br>
            <br><li>Sell or otherwise transfer your profile.</li></br>
            </ul>

            <br><b> 5. USER GENERATED CONTRIBUTIONS </b></br>

            <br><p> The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "Contributions"). Contributions may be viewable by other users of the Site and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary. When you create or make available any Contributions, you thereby represent and warrant that: </p></br>

            <br><ul>
            <br><li>The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.</li></br>
            <br><li>You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Site, and other users of the Site to use your Contributions in any manner contemplated by the Site and these Terms of Use.</li></br>
            <br><li>You have the written consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Site and these Terms of Use.</li></br>
            <br><li>Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.</li></br>
            <br><li>Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).</li></br>
            <br><li>Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.</li></br>
            <br><li>Your Contributions are not used to harass or threaten (in the legal sense of those terms) any other person and to promote violence against a specific person or class of people.</li></br>
            <br><li>Your Contributions do not violate any applicable law, regulation, or rule.</li></br>
            <br><li>Your Contributions do not violate the privacy or publicity rights of any third party..</li></br>
            <br><li>Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.</li></br>
            <br><li>Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.</li></br>
            <br><li>Your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms of Use, or any applicable law or regulation.</li></br>
            </ul>

            <br><p> Any use of the Site in violation of the foregoing violates these Terms of Use and may result in, among other things, termination or suspension of your rights to use the Site. </p></br>

            <br><b> 6. CONTRIBUTION LICENSE </b></br>

            <br><p> By posting your Contributions to any part of the Site, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.: </p></br>
            <br><p> This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions. </p></br>
            <br><p> We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site. You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions. </p></br>
            <br><p> We have the right, in our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to re-categorize any Contributions to place them in more appropriate locations on the Site; and (3) to pre-screen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor your Contributions.</p></br>

            <br><b> 7. GUIDELINES FOR REVIEWS </b></br>

            <br><p> We may provide you areas on the Site to leave reviews or ratings. When posting a review, you must comply with the following criteria: (1) you should have firsthand experience with the person/entity being reviewed; (2) your reviews should not contain offensive profanity, or abusive, racist, offensive, or hate language; (3) your reviews should not contain discriminatory references based on religion, race, gender, national origin, age, marital status, sexual orientation, or disability; (4) your reviews should not contain references to illegal activity; (5) you should not be affiliated with competitors if posting negative reviews; (6) you should not make any conclusions as to the legality of conduct; (7) you may not post any false or misleading statements; and (8) you may not organize a campaign encouraging others to post reviews, whether positive or negative. </p></br>
            <br><p> We may accept, reject, or remove reviews in our sole discretion. We have absolutely no obligation to screen reviews or to delete reviews, even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us, and do not necessarily represent our opinions or the views of any of our affiliates or partners. We do not assume liability for any review or for any claims, liabilities, or losses resulting from any review. By posting a review, you hereby grant to us a perpetual, non-exclusive, worldwide, royalty-free, fully-paid, assignable, and sublicensable right and license to reproduce, modify, translate, transmit by any means, display, perform, and/or distribute all content relating to reviews. </p></br>

            <br><b> 8. MOBILE APPLICATION LICENSE </b></br>
            <br><b> Use License </b></br>

            <br><p> If you access the Site via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms of Use. You shall not: (1) except as permitted by applicable law, decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application; (2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application; (3) violate any applicable laws, rules, or regulations in connection with your access or use of the application; (4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application; (5) use the application for any revenue generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended; (6) make the application available over a network or other environment permitting access or use by multiple devices or users at the same time; (7) use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application; (8) use the application to send automated queries to any website or to send any unsolicited commercial e-mail; or (9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the application. </p></br>

            <br><b> Apple and Android Devices </b></br>

            <br><p> The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Site: (1) the license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service; (2) we are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms of Use or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application; (3) in the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application; (4) you represent and warrant that (i) you are not located in a country that is subject to a U.S. government embargo, or that has been designated by the U.S. government as a “terrorist supporting” country and (ii) you are not listed on any U.S. government list of prohibited or restricted parties; (5) you must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application; and (6) you acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms of Use, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms of Use against you as a third-party beneficiary thereof. </p></br>

            <br><b> 9. SUBMISSIONS </b></br>

            <br><p> You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site ("Submissions") provided by you to us are non-confidential and shall become our sole property. We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you. You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions. </p></br>

            <br><b> 10. SITE MANAGEMENT </b></br>

            <br><p> We reserve the right, but not the obligation, to: (1) monitor the Site for violations of these Terms of Use; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms of Use, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in our sole discretion and without limitation, notice, or liability, to remove from the Site or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; and (5) otherwise manage the Site in a manner designed to protect our rights and property and to facilitate the proper functioning of the Site. </p></br>

            <br><b> 11. PRIVACY POLICY </b></br>

            <br><p> We care about data privacy and security. By using the Site, you agree to be bound by our Privacy Policy posted on the Site, which is incorporated into these Terms of Use. Please be advised the Site is hosted in the Philippines. If you access the Site from any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the Philippines, then through your continued use of the Site, you are transferring your data to the Philippines, and you agree to have your data transferred to and processed in the Philippines. </p></br>

            <br><b> 12. COPYRIGHT INFRINGEMENTS </b></br>

            <br><p> We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify us using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to applicable law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney </p></br>

            <br><b> 13. TERM AND TERMINATION </b></br>

            <br><p> These Terms of Use shall remain in full force and effect while you use the Site. WITHOUT LIMITING ANY OTHER PROVISION OF THESE TERMS OF USE, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE TERMS OF USE OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION. </p></br>
            <br><p> If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress. </p></br>

            <br><b> 14. MODIFICATIONS AND INTERRUPTIONS </b></br>

            <br><p> We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site. </p></br>
            <br><p> We cannot guarantee the Site will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Site during any downtime or discontinuance of the Site. Nothing in these Terms of Use will be construed to obligate us to maintain and support the Site or to supply any corrections, updates, or releases in connection therewith. </p></br>

            <br><b> 15. GOVERNING LAW </b></br>
            <br><p> These Terms shall be governed by and defined following the laws of the Philippines. Cam2Rescue and yourself irrevocably consent that the courts of the Philippines shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these terms. </p></br>

            <br><b> 15. GOVERNING LAW </b></br>

            <br><b> Binding Arbitration </b></br>
            <br><p> These Terms shall be governed by and defined following the laws of the Philippines. Cam2Rescue and yourself irrevocably consent that the courts of the Philippines shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these terms. </p></br>
            <br><b> Restrictions </b></br>
            <br><p> The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons. </p></br>
            <br><b> Exceptions to Arbitration </b></br>
            <br><p> The Parties agree that the following Disputes are not subject to the above provisions concerning binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use; and (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court. </p></br>

            <br><b> 17. CORRECTIONS </b></br>
            <br><p> There may be information on the Site that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice. </p></br>

            <br><b> 18. DISCLAIMER </b></br>
            <br><p> There may be information on the Site that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice. </p></br>

            <br><b> 19. LIMITATIONS OF LIABILITY </b></br>
            <br><p> IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. </p></br>

            <br><b> 20. IDENTIFICATIONS </b></br>
            <br><p> You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) your Contributions; (2) use of the Site; (3) breach of these Terms of Use; (4) any breach of your representations and warranties set forth in these Terms of Use; (5) your violation of the rights of a third party, including but not limited to intellectual property rights; or (6) any overt harmful act toward any other user of the Site with whom you connected via the Site. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it. </p></br>

            <br><b> 21. USER DATA </b></br>
            <br><p> We will maintain certain data that you transmit to the Site for the purpose of managing the performance of the Site, as well as data relating to your use of the Site. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Site. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data. </p></br>

            <br><b> 23. MISCELLANEOUS </b></br>
            <br><p> These Terms of Use and any policies or operating rules posted by us on the Site or in respect to the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms of Use shall not operate as a waiver of such right or provision. These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Terms of Use is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms of Use and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms of Use or use of the Site. You agree that these Terms of Use will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of Use. </p></br>

            <br><b> 24. CONTACT US </b></br>
            <br><p> In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at: </p></br>
            <br><b> Cam2Rescue </b></br>
            <br><b> Cebu City Philippines </b></br>
            <br><b> Cebu, Cebu 6000 </b></br>
            <br><b> Philippines </b></br>
            <br><b> Phone: 09287643262 </b></br>
            <br><b> cam2rescue@gmail.com </b></br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-termscheck close"  name="agreement" data-dismiss="modal" aria-label="Close">CLOSE</button>
        </div>
        </div>
    </div>
</div>
<?php include '../../views/includes/script.php'; ?>