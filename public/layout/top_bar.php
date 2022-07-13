<?php
// $store_query = "SELECT * FROM users ";
// $store_sql = mysqli_query($con, $store_query) or die(mysqli_error($con));
// $get_store = mysqli_fetch_array($store_sql);
// $store_name = $get_store['usernamname'];
// $no_of_branch = $get_store['no_of_branch'];

// $branch_query = "SELECT * FROM tbl_branch WHERE branch_id='$branch_id'";
// $branch_sql = mysqli_query($con, $branch_query) or die(mysqli_error($con));
// $get_branch = mysqli_num_rows($branch_sql);
?>
<div class="top-bar color-scheme-transparent">
<!--            <div class="logo-w menu-size">
                <a class="logo" href="index.html">
                    <div class="logo-element"></div>
                    <div class="logo-label">Clean Admin</div>
                </a>
            </div>-->
            <div class="fancy-selector-w color-scheme-transparent">
                <!-- <div class="fancy-selector-current">
                    <div class="fs-img"><img alt="" src="img/card1.png"></div>
                    <div class="fs-main-info">
                        <div class="fs-name"><?php //echo $store_name; ?></div>
                        <div class="fs-sub"><span>Balance:</span><strong>$5,304</strong></div>
                    </div>
                    <div class="fs-extra-info"><strong><?php //echo $get_branch; ?></strong><span>users</span></div>
                    <?php //if($no_of_branch > 1){ ?><div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div><?php //} ?>
                </div> -->
                <?php 
                //if($no_of_branch > 1){
                ?>
                <!-- <div class="fancy-selector-options">
                    <div class="fancy-selector-option">
                        <div class="fs-img"><img alt="" src="img/card2.png"></div>
                        <div class="fs-main-info">
                            <div class="fs-name">Capital One Venture Card</div>
                            <div class="fs-sub"><span>Balance:</span><strong>$5,304</strong></div>
                        </div>
                        <div class="fs-extra-info"><strong>5476</strong><span>ending</span></div>
                    </div>
                    <div class="fancy-selector-option active">
                        <div class="fs-img"><img alt="" src="img/card1.png"></div>
                        <div class="fs-main-info">
                            <div class="fs-name">American Express Platinum</div>
                            <div class="fs-sub"><span>Balance:</span><strong>$8,274</strong></div>
                        </div>
                        <div class="fs-extra-info"><strong>2523</strong><span>ending</span></div>
                    </div>
                    <div class="fancy-selector-option">
                        <div class="fs-img"><img alt="" src="img/card3.png"></div>
                        <div class="fs-main-info">
                            <div class="fs-name">CitiBank Preferred Credit</div>
                            <div class="fs-sub"><span>Balance:</span><strong>$1,202</strong></div>
                        </div>
                        <div class="fs-extra-info"><strong>6345</strong><span>ending</span></div>
                    </div>
                    <div class="fancy-selector-actions text-right"><a class="btn btn-primary" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a></div>
                </div> -->
                <?php // } ?>
            </div>
                    <!--------------------START - Top Menu Controls-------------------->
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator">
                            <input placeholder="Start typing to search..." type="text">
                        </div>
                        <!-------------------- START - Messages Link in secondary top menu -------------------->
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i>
                            <div class="new-messages-count">12</div>
                            <div class="os-dropdown light message-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="images/shadow_man.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">John Mayers</h6>
                                                <h6 class="message-title">Account Update</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="images/shadow_man.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Phil Jones</h6>
                                                <h6 class="message-title">Secutiry Updates</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="images/shadow_man.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Bekky Simpson</h6>
                                                <h6 class="message-title">Vacation Rentals</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="images/shadow_man.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Alice Priskon</h6>
                                                <h6 class="message-title">Payment Confirmation</h6></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------END - Messages Link in secondary top menu-------------------->
                        <!--------------------START - Settings Link in secondary top menu-------------------->
                        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-ui-46"></i>
                            <div class="os-dropdown">
                                <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                <ul>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------END - Settings Link in secondary top menu-------------------->
                        <!--------------------START - User avatar and menu in secondary top menu-------------------->
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="<?php if($profile_pic !=""){echo $profile_pic; }else{ echo 'images/shadow_man.jpg';}?>"></div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w"><img alt="" src="<?php if($profile_pic !=""){echo $profile_pic; }else{ echo 'images/shadow_man.jpg';}?>"></div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name"><?php echo $first_name." ".$last_name; ?></div>
                                            <div class="logged-user-role"><?php echo $username; ?></div>
                                        </div>
                                    </div>
                                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                    <ul>
                                        <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                                        <li><a href="logout.php"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------END - User avatar and menu in secondary top menu-------------------->
                    </div>
                    <!--------------------END - Top Menu Controls-------------------->
                </div>