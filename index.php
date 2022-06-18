<!DOCTYPE html>
<html lang="en" ng-app="smartkycApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Registration</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/registration.css">
</head>

<body ng-controller="crypbrokersCntl">

    <div class="outer">
        <div class="header">
            <div class="logo">
                <a href="#">SmartKYC</a>
            </div>
            <div class="nav_bar">
                <a href="verify.html">
                    <div class="nav_com">
                        HOME
                    </div>
                </a>
                <a href="#" ng-click="logout()">
                    <div class="nav_com">
                        Logout
                    </div>
                </a>
            </div>

            <div class="ham_icon">
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="sub_head">
            <div class="sub_capt">
                Registration
            </div>
            <div class="sub_path">
                <a href="verify.html"> HOME</a> / REGISTRATION
            </div>
            <div style="clear: both"></div>
        </div>

        <div class="content_navigation">
            <p>Choose Account Type</p>
            <div class="to_nav_tab indiv">
                <img src="images/business.png">
                <div class="nav_desc">Individual</div>
            </div>
            <div class="to_nav_tab">
                <img src="images/busines.png">
                <div class="nav_desc">Company</div>
            </div>
        </div>

        <div class="content_wrap" ng-show="thankhide">
            <div class="content_nav">
                <div class="blocks">
                    <div class="blocks_no green person_blk" id="one" data-id="#two">
                        1
                    </div>
                    <div class="blocks_capt">
                        Personal Information
                    </div>
                </div>
                <div class="blocks comp_blk_dis">
                    <div class="blocks_no comp_blk" id="two" data-id="#three">
                        2
                    </div>
                    <div class="blocks_capt">
                        Company Information
                    </div>
                </div>
                <div class="blocks">
                    <div class="blocks_no req_blk" id="three">
                        3
                    </div>
                    <div class="blocks_capt">
                        Required Documents,<br> Terms and Conditions
                    </div>
                </div>
            </div>

            <div class="main_container">
                <div class="personal_wrap wraps_common" id="personal_1">
                    <h2>
                        Personal Information
                    </h2>
                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">First Name</div>
                            <input type="text" ng-model="user.firstName">
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Last Name</div>
                            <input type="text" ng-model="user.lastName">
                        </div>

                        <div style="clear: both"></div>
                    </div>
                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Gender</div>
                            <div class="radio_outer">
                                <div class="male_out">
                                    <!-- <div class="radio" id="1" ng-class="{active: user.gender == 1}">
                                        <div class="checked"></div>
                                    </div> -->
                                    <input type="radio" id="male" name="fav_language" value="Male">
                                    <label for="html">Male</label><br>
                                </div>
                                <div class="male_out">
                                    <!-- <div class="radio" id="0" ng-class="{active: user.gender == 0}">
                                        <div class="checked"></div>
                                    </div> -->
                                    <input type="radio" id="female" name="fav_language" value="Female">
                                    <label for="css">Female</label><br>
                                    
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">Address Line 1</div>
                            <input type="text" ng-model="user.address1">
                        </div>
                    </div>
                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">Address Line 2</div>
                            <input type="text" ng-model="user.address2">
                        </div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">City</div>
                            <input type='text' ng-model="user.city">
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">State/Province/Region</div>
                            <input type='text' ng-model="user.state">
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Country of Residence</div>
                            <select data-ng-model="user.countryOfResidence" data-ng-options="v.name as v.name for v in countries"></select>
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Zip/Postal Code</div>
                            <input type='text' ng-model="user.zip" onkeypress='return (event.charCode >= 48 && event.charCode <= 57 )||event.charCode == 43 '>
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Mobile (With Country Code)</div>
                            <input type='text' ng-model="user.mobile" onkeypress='return (event.charCode >= 48 && event.charCode <= 57 )||event.charCode == 43 '>
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Date Of Birth (YYYY-MM-DD)</div>
                            <input type='text' ng-model="user.dateOfBirth" id="dob" class="datepicker-here" data-language='en' />
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">ID Type</div>
                            <select data-ng-model="user.idType" data-ng-options="v for v in idType"></select>
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">ID number</div>
                            <input type="text" ng-model="user.idNumber">
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">ID Issue date (YYYY-MM-DD)</div>
                            <input type='text' id="issueDate" ng-model="user.idIssueDate" class="datepicker-here" data-language='en' />
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">ID Expiry date (YYYY-MM-DD)</div>
                            <input type='text' id="validTo" ng-model="user.idValidTo" class="datepicker-here" data-language='en' />
                        </div>

                        <div style="clear: both"></div>
                    </div>


                    <div class="bottom_button_wrap">
                        <div class="next_button go_btn personal" ng-click="addUserInformation($event)" data-id="#personal_2">
                            Next
                        </div>
                    </div>

                </div>


                <div class="company_wrap wraps_common" id="personal_2" data-id="#one">
                    <h2>
                        Company Information
                    </h2>
                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Company Name</div>
                            <input type="text" ng-model="company.name">
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Phone</div>
                            <input type="text" ng-model="company.phone" onkeypress='return (event.charCode >= 48 && event.charCode <= 57 )||event.charCode == 43 '>
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Website URL</div>
                            <input type="text" ng-model="company.url">
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Nature of business</div>
                            <input type="text" ng-model="company.bussibessNature">
                        </div>

                        <div style="clear: both"></div>
                    </div>


                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">Who are your customers? Where are they located?</div>
                            <input type="text" ng-model="company.custmerType">
                        </div>
                    </div>
                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">Do you have a KYC policy in place for your customers? If so, please provide a URL to your policy page.</div>
                            <input type="text" ng-model="company.userUrlQ">
                        </div>
                    </div>
                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">Do you perform due to dilligence on your customers? what information do you collect from them?</div>
                            <input type="text" ng-model="company.customerInfoQ">
                        </div>
                    </div>


                    <div class="text_box_wrap">
                        <div class="text_box_left txt_bx">
                            <div class="text_desc">Expected Average Order Size (USD)</div>
                            <select ng-model="company.exptAvgOrder">
                                <option value="">--Select--</option>
                                <option>$10,000 - $99,000</option>
                                <option>$100,000 - $499,000</option>
                                <option>$500,000 - $999,000</option>
                                <option>$1 Million - $9.9 Million</option>
                                <option>$10 Million +</option>
                            </select>
                        </div>
                        <div class="text_box_right txt_bx">
                            <div class="text_desc">Nature of activity</div>
                            <select ng-model="company.activityNatureQ">
                                <option value="" >--Select--</option>
                                <option>Buying Digital Assets For Lawful Use</option>
                                <option>Selling Digital Assets For Lawful Use</option>
                                <option>Buying And Selling Digital Assets For Lawful Use</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div style="clear: both"></div>
                    </div>

                    <div class="text_box_wrap">
                        <div class="text_box_full txt_bx">
                            <div class="text_desc">What bank will you be using for deposits and withdrawals,and where is it located?</div>
                            <input type="text" ng-model="company.bankDetailsQ">
                        </div>
                    </div>

                    <div class="bottom_button_wrap">
                        <div class="prev_button pr_company go_btn" data-id="#personal_1">
                            Previous
                        </div>
                        <div class="next_button company go_btn" ng-click="addCompanyInformation($event)" data-id="#personal_3">
                            Next
                        </div>
                    </div>

                </div>


                <div class="documents_wrap wraps_common" id="personal_3" data-id="#two">
                    <h2>
                        Required Documents
                    </h2>

                    <div class="docs_list">

                        <div class="left_docs_out">
                            <div class="doc_blocks">
                                <p>Individual</p>
                                <ul>
                                    <li>Gov issued ID (Passport, Driver’s License, Other)</li>
                                    <li>Selfie holding the government issued ID</li>
                                    <li>Proof of Home Address (Utility Bill or Bank Statement) issued within the last 3 months containing your name on the account</li>
                                </ul>
                                <!-- - Gov Issued ID (Passport,Drivers License, Other)<br>-->
                                <!-- - Selfie Picture of You Holding Gov Issued ID<br>-->
                                <!-- - Proof of Home Address( Utility Bill or Bank Statement) issued within the last 3 months containing your name on the account-->
                            </div>
                            <div class="doc_blocks">
                                <p>Document Guide</p>
                                <ul>
                                    <li>Documents must be in the following format: jpg, png, gif, pdf</li>
                                    <li>Documents must be scanned in color</li>
                                    <li>Documents must be clearly visible</li>
                                    <li>Selfie with the required IDs</li>
                                </ul>
                                <!-- - Documents must be in the following format : jpg, png, gif, pdf<br>-->
                                <!-- - Documents must be scanned in color <br>-->
                                <!-- - Documents must be clearly visible<br>-->
                                <!-- - Selfie with ID requirements<br>-->

                            </div>




                        </div>


                        <div class="left_docs_out">
                            <div class="doc_blocks">
                                <p>Company</p>
                                <ul>
                                    <li>Gov issued ID (Passport, Driver’s License, Other)</li>
                                    <li>Selfie holding the government issued ID</li>
                                    <li>Proof of Home Address (Utility Bill or Bank Statement) issued within the last 3 months containing your name on the account</li>
                                    <li>Company registration document</li>
                                    <li>Proof of Company Address (Utility Bill, Bank Statement or Rental/Lease Agreement)</li>
                                </ul>
                            </div>
                            <div class="doc_blocks">
                                <p>Photo Guide</p>
                                <ul class="star_style">
                                    <li>Look straight into the camera</li>
                                    <li>Your face and card information should be clearly visible</li>
                                    <li>Do not wear sunglasses, a hat or a headband</li>
                                    <li>Photo should be recent</li>
                                    <li>Photo should be in color</li>
                                    <li>Image should be in high resolution (min 300 dpi)</li>
                                </ul>
                            </div>
                        </div>


                        <!--<div class="doc_blocks">-->
                        <!---->
                        <!--</div>-->
                    </div>
                    <div class="image_upload">
                        <div class="file_upload">
                            <input name="file" type="file" id="files" class="uploadFile" onchange="angular.element(this).scope().imageUpload()" />
                        </div>
                        <div class="add_new">Attach More</div>
                    </div>

                    <p>No. Of Documents Submitted: {{userImage.length}}</p>
                    <!--<form class="dropzone" ng-model="data.images" id="my-awesome-dropzone"></form>-->

                    <form style="display: none" action="http://52.220.41.10/crypbrokers/users/uploadDocuments.php" method="POST" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                        <input type="text" name="usersImage_users_unique_id" value="uniqueId">
                        <div class="fallback">
                            <input name="file" type="file" multiple id="" />
                        </div>

                        <input type="submit" value="Hellow" />
                    </form>
                    <div class="declaration">
                        <input type="checkbox" id="declaration" />
                        <label for="declaration">I hereby solemnly declare that the information provided is up-to-date and correct. The documents provided as proof of identity and proof of address has been self-attested. I authorize CrypBrokers to verify the information provided to confirm its accuracy.
                        </label>
                    </div>

                    <div class="bottom_button_wrap">

                        <div class="prev_button pr_doc go_btn" data-id="#personal_2">
                            Previous
                        </div>
                        <div class="next_button company go_btn" ng-click="verifyDoc()">
                            Verify
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thankyou" ng-show="thankshow">
            <div>
                <img class="thankyou_image" src="images/thankyou.png">
            </div>
            <div class="thankyou_content">
                <h2>Thank You</h2>
                <p>Thank you for providing your details and documents. We will notify you via email with updates regarding your file.</p>
            </div>
        </div>
        <footer>
            <!--<div class="to_top">-->
            <!--</div>-->
            <div class="copy_right">
                Copyright © 2017 SmartKYC.com. All Rights Reserved.
            </div>
            <div class="copy_links" style="display: none;">
                <div class="copy_blocks">
                    About Us
                </div>
                <div class="copy_blocks">
                    Fees
                </div>
                <div class="copy_blocks">
                    Terms of use
                </div>
                <div class="copy_blocks">
                    Privacy Policy
                </div>
                <div class="copy_blocks">
                    Contact Us
                </div>
            </div>
            <div style="clear:both;"></div>
        </footer>
    </div>    
</body>

</html>