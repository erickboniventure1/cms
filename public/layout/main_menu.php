<div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                <div class="logo-w">
                    <a class="logo" href="?dashboard">
                        <img src="images/logo.png" alt="SR Logo" />
                        <div class="logo-label">Client Records</div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="images/download.png" src="images/download.png"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php echo $fname." ".$lname; ?></div>
                            <div class="logged-user-role">Admin</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="images/download.png" src="images/download.png"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name"><?php echo $fname." ".$lname; ?></div>
                                    <div class="logged-user-role"><?php echo $user_type; ?></div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                <li><a href="?page=mails"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                                <li><a href="?page=profile details"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                <li><a href="?page=subscription"><i class="os-icon os-icon-coins-4"></i><span>Subscription</span></a></li>
                                <li><a href="?page=notification"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                                <li><a href="logout.php"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
<!--                <div class="menu-actions">
                    ------------------START - Messages Link in secondary top menu------------------
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count">12</div>
                        <div class="os-dropdown light message-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">John Mayers</h6>
                                            <h6 class="message-title">Account Update</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Phil Jones</h6>
                                            <h6 class="message-title">Secutiry Updates</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Bekky Simpson</h6>
                                            <h6 class="message-title">Vacation Rentals</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Alice Priskon</h6>
                                            <h6 class="message-title">Payment Confirmation</h6></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    ------------------END - Messages Link in secondary top menu------------------
                    ------------------START - Settings Link in secondary top menu------------------
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-ui-46"></i>
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
                    ------------------END - Settings Link in secondary top menu------------------
                    ------------------START - Messages Link in secondary top menu------------------
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-zap"></i>
                        <div class="new-messages-count">4</div>
                        <div class="os-dropdown light message-list">
                            <div class="icon-w"><i class="os-icon os-icon-zap"></i></div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">John Mayers</h6>
                                            <h6 class="message-title">Account Update</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Phil Jones</h6>
                                            <h6 class="message-title">Secutiry Updates</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Bekky Simpson</h6>
                                            <h6 class="message-title">Vacation Rentals</h6></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Alice Priskon</h6>
                                            <h6 class="message-title">Payment Confirmation</h6></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    ------------------ END - Messages Link in secondary top menu ------------------
                </div>
                <div class="element-search autosuggest-search-activator">
                    <input placeholder="Start typing to search..." type="text">
                </div>-->
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>Client Manager</span></li>
                    <li class="selected has-sub-menu">
                        <a href="?page=client_list">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Client List</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="?page=create_client">
                            <div class="icon-w">
                                <div class="os-icon os-icon-plus"></div>
                            </div><span>New Client</span>
                        </a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="?page=reports">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Reports</span>
                        </a>
                    </li>
<!--                    <li class=" has-sub-menu">
                        <a href="layouts_menu_top_image.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Manage Order</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Manage Order</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="?page=view order">View Order</a></li>
                                    <li><a href="?page=order configuration">Configuration</a></li>
                                 </ul>
                            </div>
                        </div>
                    </li>-->
                    <li class="sub-header"><span>Settings</span></li>
                    <li class=" has-sub-menu">
                        <a href="?page=setting">
                            <div class="icon-w">
                                <div class="os-icon os-icon-ui-46"></div>
                            </div><span>System Setting</span>
                        </a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="?page=logout">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div><span>Logout</span>
                        </a>
                    </li>
                    <!-- <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-life-buoy"></div>
                            </div><span>Business</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Business</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-life-buoy"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="?page=quote">Quote</a></li>
                                    <li><a href="?page=profoma invoice">Profoma Invoice</a></li>
                                    <li><a href="?page=invoice">Invoice</a></li>
                                    <li><a href="?page=delivery note">Delivery Note</a></li>
                                    <li><a href="?page=lpo">LPO</a></li>-
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="?page=bill">Bill</a></li>
                                    <li><a href="?page=petty cash">Petty Cash</a></li>
                                    <li><a href="?page=letterhead">Letterhead</a></li>
                                    <li><a href="?page=other">Others</a></li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li class="sub-header"><span>Store</span></li>
                    <li class=" has-sub-menu">
                        <a href="?page=products">
                            <div class="icon-w">
                                <div class="os-icon os-icon-zap"></div>
                            </div><span>Products</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="?page=store manager">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Store Manager</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="?page=user manager">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>User Manager</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-edit-32"></div>
                            </div><span>Contacts</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Contacts</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-edit-32"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="?page=customers">Customers</a></li>
                                    <li><a href="?page=suppliers">Suppliers</a></li>
                                    <li><a href="?page=employees">Employees</a></li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li class=" has-sub-menu">
                        <a href="?page=payroll">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Payroll</span></a>
                    </li>
                    <li class="sub-header"><span>Reports</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Reports</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Reports</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-grid"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="?page=sales reports">Sales Reports</a></li>
                                    <li><a href="?page=stock reports">Stock Reports</a></li>
                                    <li><a href="?page=store reports">Store Reports</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="?page=income reports">Income Reports</a></li>
                                    <li><a href="?page=expenses reports">Expenses Reports</a></li>
                                    <li><a href="?page=profit and loss">Profit & Loss</a></li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                </ul>
<!--                <div class="side-menu-magic">
                    <h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a></div>
                </div>-->
            </div>