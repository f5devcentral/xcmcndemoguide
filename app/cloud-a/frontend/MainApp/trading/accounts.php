<?php
session_start();
session_regenerate_id(true); 

$error=0;
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
{
	header("Location: login.php"); 
	exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Arcadia - Stock Portfolio</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
    <link href="css/additional.css" rel="stylesheet">
<link href="icon_fonts_assets/picons-thin/style.css" rel="stylesheet">

  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="accounts.php"><img src="img/logo.png"><span>F5 Forum</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="img/Phillipe.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  Phillipe Cloup
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li>
                <a href="accounts.php">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Accounts</span></a>
              </li>
              <li>
                <a href="index.php">
                  <div class="icon-w">
                    <div class="os-icon os-icon-bar-chart-stats-up"></div>
                  </div>
                  <span>Trading</span></a>
              </li>
			  <li >
				<a href="logout.php">
				<div class="icon-w">
				  <div class="os-icon os-icon-signs-11"></div>
				</div>
				<span>Logout</span></a>
			  </li>
			 </ul>
			 <!--------------------
            END - Mobile Menu List
            -------------------->
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-dark color-style-bright menu-position-side menu-side-left menu-layout-mini sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="accounts.php">
              <div class="logo-element"></div>
              <div class="logo-label">
                Arcadia Fianance
              </div>
            </a>
          </div>
         <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Layouts</span>
            </li>
            <li class="active">
              <a href="accounts.php">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Accounts</span></a>
            </li>
            <li>
              <a href="index.php">
                <div class="icon-w">
                  <div class="os-icon os-icon-bar-chart-stats-up"></div>
                </div>
                <span>Trading</span></a>
            </li>
			  <li >
				<a href="logout.php">
				<div class="icon-w">
				  <div class="os-icon os-icon-signs-11"></div>
				</div>
				<span>Logout</span></a>
			  </li>
          </ul>

        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-bright">

		  
		 <div class="fancy-selector-w">
          <div class="fancy-selector-current">
            <div class="fs-img">
              <img alt="" src="img/card1.png">
            </div>
            <div class="fs-main-info">
              <div class="fs-name">
                American Express Platinum
              </div>
              <div class="fs-sub">
                <span>Balance:</span><strong>$5,304</strong>
              </div>
            </div>
            <div class="fs-extra-info">
              <strong>5476</strong><span>ending</span>
            </div>
            <div class="fs-selector-trigger">
              <i class="os-icon os-icon-arrow-down4"></i>
            </div>
          </div>
          <div class="fancy-selector-options">
            <div class="fancy-selector-option">
              <div class="fs-img">
                <img alt="" src="img/card2.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  American Express Platinum
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$5,304</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>5476</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-option active">
              <div class="fs-img">
                <img alt="" src="img/card1.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  Capital One Venture Card
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$8,274</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>2523</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-option">
              <div class="fs-img">
                <img alt="" src="img/card3.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  CitiBank Preferred Credit
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$1,202</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>6345</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-actions text-right">
              <a class="btn btn-warning" href="#"><i class="os-icon os-icon-ui-22"></i><span>Make Payment</span></a>
            </div>
          </div>
        </div>

            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div>
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
             <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->

              <!--------------------
              END - Settings Link in secondary top menu
              --------------------><!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="img/Phillipe.jpg">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="img/Phillipe.jpg">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          Phillipe Cloup
                        </div>
                        <div class="logged-user-role">
                          Administrator
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="#"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                      </li>
                      <li>
                        <a href="logout.php"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box">
			
			
			<div class="element-wrapper compact pt-4">
                <div class="element-actions">
                  <a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a>
                </div>
                <h6 class="element-header">
                  Financial Overview
                </h6>
                <div class="element-box-tp">
                  <div class="row">
                    <div class="col-lg-7 col-xxl-6">
                      <!--START - BALANCES-->
                      <div class="element-balances">
                        <div class="balance hidden-mobile">
                          <div class="balance-title">
                            Total Balance
                          </div>
                          <div class="balance-value">
                            <span>$23,506</span><span class="trending trending-down-basic"><span>%12</span><i class="os-icon os-icon-arrow-2-down"></i></span>
                          </div>
                          <div class="balance-link">
                            <a class="btn btn-link btn-underlined" href="#"><span>View Statement</span><i class="os-icon os-icon-arrow-right4"></i></a>
                          </div>
                        </div>
                        <div class="balance">
                          <div class="balance-title">
                            Credit Available
                          </div>
                          <div class="balance-value">
                            $17,800
                          </div>
                          <div class="balance-link">
                            <a class="btn btn-link btn-underlined" href="#"><span>Request Increase</span><i class="os-icon os-icon-arrow-right4"></i></a>
                          </div>
                        </div>
                        <div class="balance">
                          <div class="balance-title">
                            Due Today
                          </div>
                          <div class="balance-value danger">
                            $180
                          </div>
                          <div class="balance-link">
                            <a class="btn btn-link btn-underlined btn-gold" href="#"><span>Pay Now</span><i class="os-icon os-icon-arrow-right4"></i></a>
                          </div>
                        </div>
                      </div>
                      <!--END - BALANCES-->
                    </div>
                    <div class="col-lg-5 col-xxl-6">
                      <!--START - MESSAGE ALERT-->
                      <div class="alert alert-warning borderless">
                        <h5 class="alert-heading">
                          Refer Friends. Get Rewarded
                        </h5>
                        <p>
                          You can earn: 15,000 Membership Rewards points for each approved referral – up to 55,000 Membership Rewards points per calendar year.
                        </p>
                        <div class="alert-btn">
                          <a class="btn btn-white-gold" href="#"><i class="os-icon os-icon-ui-92"></i><span>Send Referral</span></a>
                        </div>
                      </div>
                      <!--END - MESSAGE ALERT-->
                    </div>
                  </div>
                </div>
              </div>
			
             <div class="row">
                <div class="col-lg-8 col-xxl-8">
                  <!--START - CHART-->
					  <div class="element-wrapper">
						<div class="element-box-tp">
						  <div class="table-responsive">
							<table class="table table-padded">
							  <thead>
								<tr>
								  <th>
									Status
								  </th>
								  <th>
									Date
								  </th>
								  <th>
									Description
								  </th>
								  <th class="text-center">
									Category
								  </th>
								  <th class="text-right">
									Amount
								  </th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller green"></span><span>Complete</span>
								  </td>
								  <td>
									<span>Today</span><span class="smaller lighter">1:52am</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company1.png" style="height: 25px;"><span>Banana Shakes LLC</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-success" href="">Shopping</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-success">+ 1,250 USD</span>
								  </td>
								</tr>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller red"></span><span>Declined</span>
								  </td>
								  <td>
									<span>Jan 19th</span><span class="smaller lighter">3:22pm</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company2.png" style="height: 25px;"><span>Stripe Payment Processing</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-danger" href="">Cafe</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-success">+ 952.23 USD</span>
								  </td>
								</tr>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller yellow"></span><span>Pending</span>
								  </td>
								  <td>
									<span>Yesterday</span><span class="smaller lighter">7:45am</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company3.png" style="height: 25px;"><span>MailChimp Services</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-warning" href="">Restaurants</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-danger">- 320 USD</span>
								  </td>
								</tr>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller yellow"></span><span>Pending</span>
								  </td>
								  <td>
									<span>Jan 23rd</span><span class="smaller lighter">2:12pm</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company1.png" style="height: 25px;"><span>Starbucks Cafe</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-primary" href="">Shopping</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-success">+ 17.99 USD</span>
								  </td>
								</tr>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller green"></span><span>Complete</span>
								  </td>
								  <td>
									<span>Jan 12th</span><span class="smaller lighter">9:51am</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company4.png" style="height: 25px;"><span>Ebay Marketplace</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-danger" href="">Groceries</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-danger">- 244 USD</span>
								  </td>
								</tr>
								<tr>
								  <td class="nowrap">
									<span class="status-pill smaller yellow"></span><span>Pending</span>
								  </td>
								  <td>
									<span>Jan 9th</span><span class="smaller lighter">12:45pm</span>
								  </td>
								  <td class="cell-with-media">
									<img alt="" src="img/company2.png" style="height: 25px;"><span>Envato Templates Inc</span>
								  </td>
								  <td class="text-center">
									<a class="badge badge-primary" href="">Business</a>
								  </td>
								  <td class="text-right bolder nowrap">
									<span class="text-success">+ 340 USD</span>
								  </td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					  </div>
                 <!--END - CHART-->
                </div>
                <div class="col-lg-4 col-xxl-4">
                  <!--START - Money Withdraw Form-->
				<br>
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form>
                        <h5 class="element-box-header">
                          Withdraw Money
                        </h5>
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label class="lighter" for="">Select Amount</label>
                              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input class="form-control" placeholder="Enter Amount..." type="text" value="0">
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    USD
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <label class="lighter" for="">Transfer to</label><select class="form-control">
                                <option value="">
                                  Citibank *6382
                                </option>
                                <option value="">
                                  Chase *8372
                                </option>
                                <option value="">
                                  Bank of America *7363
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w text-right compact">
                          <a class="btn btn-primary" href="#"><span>Transfer</span><i class="os-icon os-icon-grid-18"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--END - Money Withdraw Form-->
                </div>
              </div>
              <!--START - Transactions Table-->
 
			
		   <div class="row">
					<div class="col-sm-12">
					  <div class="element-wrapper compact pt-4">
						<h6 class="element-header">
						  Send Money To
						</h6>
						<div class="element-box-tp">
						  <div class="inline-profile-tiles">
							<div class="row">
							  <div class="col-4 col-sm-3 col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Vincent">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Vincent.jpg">
									</div>
									<div class="pt-user-name">
									  Vincent<br/>Lavergne
									</div>
								  </a>
								</div>
							  </div>
							  <div class="col-4 col-sm-3 col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Bart">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Bart.jpg">
									</div>
									<div class="pt-user-name">
									  Bart<br/>Salaets
									</div>
								  </a>
								</div>
							  </div>
							  <div class="col-4 col-sm-3 col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Or">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Or.jpg">
									</div>
									<div class="pt-user-name">
									  Or<br/>Yaacov
									</div>
								  </a>
								</div>
							  </div>
							  <div class="col-4 d-sm-none d-xxl-block col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Sven">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Sven.jpg">
									</div>
									<div class="pt-user-name">
									  Philippe<br/>Mueller
									</div>
								  </a>
								</div>
							  </div>
							  <div class="col-4 d-sm-none d-xxl-block col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Alfredo">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Alfredo.jpg">
									</div>
									<div class="pt-user-name">
									  Alfredo<br/>Vistola
									</div>
								  </a>
								</div>
							  </div>
							  <div class="col-4 d-sm-none d-xxl-block col-xxl-2">
								<div class="profile-tile profile-tile-inlined">
								  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Gert">
									<div class="pt-avatar-w">
									  <img alt="" src="img/Gert.jpg">
									</div>
									<div class="pt-user-name">
									  Gert<br/>Wolfs
									</div>
								  </a>
								</div>
							  </div>
							  


    					    </div>
						  </div>
						</div>
					  </div>

					  
					</div>

				
			   </div>







              <div class="floated-colors-btn" style="display:none">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Colors</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------->
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
               <!--------------------
              END - Chat Popup Box
              -------------------->
            </div>
            <!--------------------
            START - Sidebar
            -------------------->
            <div class="content-panel compact color-scheme-dark" id="side_bar" style="text-align: center;>


            </div>
            <!--------------------
            END - Sidebar
            -------------------->
          </div>
        </div>
      </div>
      <div class="display-type"></div>
	  

	  
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="sell_stocks" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Sell Stocks
            </h5>
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		  
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Stock</label><select class="form-control" id="sell_stock_selected">
						<option value="1">
						  Select Stock...
						</option>
						<option value="f5" id="FFIV">
						  F5 Networks
						</option>
						<option value="microsoft" id="MSFT">
						  Microsoft
						</option>
						<option value="amazon" id="AMZN">
						  Amazon
						</option>						
						<option value="google" id="GOOGL">
						  Google
						</option>
					</select>
					</div>
                </div>
                <div class="col-sm-6">
					<label for="">Qty</label>
					<div class="form-group">
						<input class="form-control" placeholder="i.e. 180" type="number" min="0" value="" id="sell_stock_qty" disabled>
					</div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Buy on market value</label><select class="form-control" id="sell_market_value" disabled>
						<option value="yes">
						  Yes
						</option>
						<option value="no">
						  No
						</option>
  					</select>
					</div>
                </div>
                <div class="col-sm-6 div_sell_custom_stock_price" style="display:none">
					<label for="">Choose your selling price ($)</label>
					<div class="form-group">
						<input class="form-control" placeholder="i.e. $500" type="number" min="0" max="5000" value="" id="sell_custom_stock_price" >
					</div>
                </div>				
				
              </div>			  

              <div class="row" id="div_stock_price">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Current Assets in "<span class="sell_company_name_modal">Company</span>": </span> </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_assets">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_assets_initial d-none"></span>
                </div>
              </div>			  
			  
              <div class="row" id="div_stock_price">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Price per stock: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price_initial d-none"></span>
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price_static d-none"></span>
                </div>
              </div>
			  
              <div class="row" id="div_trans_value">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Transaction Value: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_trans_value">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_trans_value_initial d-none">$-</span>
                </div>
              </div>			  

              <div class="row" id="div_total_assets">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Your Assets in "<span class="sell_company_name_modal">Company</span>" will be: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_total_assets">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_total_assets_initial d-none"></span>
                </div>
              </div>				  

            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" type="button" id="sell_stocks_button_close"> Close</button><button class="btn btn-primary" type="button" id="sell_stocks_button" data-target="#result_stocks" data-toggle="modal"  disabled> Sell</button>
          </div>
        </div>
      </div>
    </div>

	  
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="buy_stocks" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Buy Stocks
            </h5>
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		  
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Stock</label><select class="form-control" id="stock_selected">
						<option value="1">
						  Select Stock...
						</option>
						<option value="f5" id="FFIV">
						  F5 Networks
						</option>
						<option value="microsoft" id="MSFT">
						  Microsoft
						</option>
						<option value="amazon" id="AMZN">
						  Amazon
						</option>						
						<option value="google" id="GOOGL">
						  Google
						</option>
					</select>
					</div>
                </div>
                <div class="col-sm-6">
					<label for="">Qty</label>
					<div class="form-group">
						<input class="form-control" placeholder="i.e. 180" type="number" min="0" value="" id="stock_qty" disabled>
					</div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Buy on market value</label><select class="form-control" id="market_value" disabled>
						<option value="yes">
						  Yes
						</option>
						<option value="no">
						  No
						</option>
  					</select>
					</div>
                </div>
                <div class="col-sm-6 div_custom_stock_price" style="display:none">
					<label for="">Choose your buying price ($)</label>
					<div class="form-group">
						<input class="form-control" placeholder="i.e. $500" type="number" min="0" max="5000" value="" id="custom_stock_price" >
					</div>
                </div>				
				
              </div>			  

              <div class="row" id="div_stock_price">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Price per stock: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price">$-</span>
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price_initial d-none"></span>
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price_static d-none"></span>
                </div>
              </div>
			  
              <div class="row" id="div_trans_value">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Transaction Value: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="trans_value">$-</span>
					<span style="font-weight:bold; font-size:22px" class="trans_value_initial d-none">$-</span>
                </div>
              </div>			  

              <div class="row" id="div_total_assets">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Your Assets in "<span class="company_name_modal">Company</span>" will be: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="total_assets">$-</span>
					<span style="font-weight:bold; font-size:22px" class="total_assets_initial d-none"></span>
                </div>
              </div>				  

            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" type="button" id="buy_stocks_button_close"> Close</button><button class="btn btn-primary" type="button" id="buy_stocks_button" data-target="#result_stocks" data-toggle="modal"  disabled> Buy</button>
          </div>
        </div>
      </div>
    </div>
	  
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="money_transfer" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Transfer Money
            </h5>
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
          <div class="modal-body">
			
	          <div class="row justify-content-md-center">
			    <div class="col-sm-1 align-middle" style="margin-top: auto; margin-bottom: auto;">
					<label> <b>To: </b></label>
			    </div>
			    <div class="col-sm-4">
					<div class="profile-tile" style="border-bottom: none;">
					  <a class="profile-tile-box">
						<div class="pt-avatar-w">
						  <img alt="" src="img/question_mark.png" id="select_friend_image_2">
						</div>
						<div class="pt-user-name_2">
						  <span id="select_friend_2">First Name</span>
						</div>
					  </a>
					</div>	
				</div>	
              </div>
			
              <div class="row">
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Account</label>
					  <select class="form-control" id="account_select_2">
		
						</select>
					</div>
                </div>
                <div class="col-sm-6">
					<div class="form-group">
					  <label for="">Amount</label>
					  <div class="input-group">
						<input class="form-control" placeholder="i.e. 180" type="number" min="1" value="" id="transfer_value_2">
						<div class="input-group-append">
						  <div class="input-group-text" id="curr_2">
							EUR
						  </div>
						</div>
					  </div>
					</div>
                </div>
              </div>
			  
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" type="button" id="cancel_transfer"> Cancel</button><button data-target="#result" data-toggle="modal" class="btn btn-primary" type="button" id="transfer_now_2" disabled> Transfer Now</button>
          </div>
        </div>
      </div>
    </div>
	  
	<div aria-labelledby="exampleModalLabel" class="modal fade" id="result" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		<div class="row justify-content-center">
			<div class="col-2">
			  <img src="img/question_mark.png" height="64" id="result_img">
			</div>
		</div>
		<div class="row justify-content-center result_details">
			<div class="col-6" style="text-align:center">
				<br>
			  <h6 id="result_title"> PAYMENT COMPLETED</h6>
			</div>
		</div> 

		<div class="row justify-content-center border-bottom result_details">
			<div class="col-12" style="text-align:center">
				<br>
				<span id="result_msg">......... </span>
			   	<br><br>
				<h5> <span id="result_amount">-</span> <span id="result_currency">Euro </span></h5>
				<br>
			</div>
		</div> 
		<div class="row justify-content-center border-bottom result_details">
			<div class="col-12" style="text-align:center; padding-bottom:15px; padding-top:15px;">
				
			    <span style="font-size:11px"> Transaction ID: <span id="result_id">........ </span></span>

			</div>
		</div> 
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="button" id="result_button"> Close</button>
          </div>
        </div>
      </div>
    </div>
		  
 	<div aria-labelledby="exampleModalLabel" class="modal fade" id="result_stocks" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		<div class="row justify-content-center">
			<div class="col-2">
			  <img src="img/question_mark.png" height="64" id="result_img_stocks">
			</div>
		</div>
		<div class="row justify-content-center result_details">
			<div class="col-6" style="text-align:center">
				<br>
			  <h6 id="result_title_stocks"> TRANSACTION COMPLETED</h6>
			</div>
		</div> 

		<div class="row justify-content-center border-bottom result_details result_details_msg_1">
			<div class="col-12" style="text-align:center">
				<br>
				<span><b><span class="result_qty_stocks"></span></b> stocks of <b> <span class="result_company_stocks"></span></b> have been successfully <br> transacted. <br>Total value of transaction is:</span>
			   	<br><br>
				<h5> <span id="result_amount_stocks"></span></h5>
				<br>
			</div>
		</div>
		<div class="row justify-content-center border-bottom result_details result_details_msg_2" style="display: none;">
			<div class="col-12" style="text-align:center">
				<br>
				<span><b><span class="result_qty_stocks"></span></b> stocks of <b> <span class="result_company_stocks"></span></b> <u>have not been</u> sold. <br> because it exceeds your current stock quantity</span>
				<br><br>
			</div>
		</div> 		
		<div class="row justify-content-center border-bottom result_details">
			<div class="col-12" style="text-align:center; padding-bottom:15px; padding-top:15px;">
				
			    <span style="font-size:11px"> Transaction ID: <span class="result_id_stocks">........ </span></span>

			</div>
		</div> 
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="button" id="result_button_stocks"> Close</button>
          </div>
        </div>
      </div>
    </div>


 	<div aria-labelledby="exampleModalLabel" class="modal fade" id="result_email" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		<div class="row justify-content-center">
			<div class="col-2">
			  <img src="img/email_sent.png" height="64" id="result_img_stocks">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-6" style="text-align:center">
				<br>
			  <h6 id="result_title_stocks"> Email sent successfully </h6>
			</div>
		</div> 

		<div class="row justify-content-center border-bottom">
			<div class="col-12" style="text-align:center">
				<br>
				<span> The invitation has been sent successfully to <b><span id="email_rcpt"></span></b>. <br> Once the user registers for a credit card you <br>will receive the referal <b>Bonus</b>.</span>
			   	<br><br>
				<h5> <span id="result_amount_stocks"></span></h5>
				<br>
			</div>
		</div>
		
		<div class="row justify-content-center border-bottom">
			<div class="col-12" style="text-align:center; padding-bottom:15px; padding-top:15px;">
				
			    <span style="font-size:11px"> Transaction ID: 485495695758 </span>

			</div>
		</div> 
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="button"> Close</button>
          </div>
        </div>
      </div>
    </div>
	
 	<div aria-labelledby="myLargeModalLabel" class="modal fade bd-example-modal-lg" id="uploaded_doc" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
          </div>
		  
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="x_panel">
				  <div class="element-wrapper compact" style="padding-left:10px">
					<form id="upload_file" method="post" enctype="multipart/form-data">
						<h6 class="element-header"> Upload New Documents: </h6>
						<input type="file" name="fileToUpload" id="fileToUpload" style="margin:auto; margin-bottom:10px">
						<br>
						<button class="btn btn-success" type="submit" style="float:left; margin-top: 10px"> Upload doc</button>
					</form>
				  </div>
				</div>
			</div>

			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="x_panel">
				  <div class="element-wrapper compact" style="padding-left:10px; padding-bottom:0px">
					<h6 class="element-header" style="padding-bottom:10px"> Uploaded Documents </h6>
				  </div>
				  <div class="element-box-tp" style="padding-right:40px; padding-left:10px" id="my_files">
					  <table class="table table-clean">
						<tbody>
						  <tr>
							  <td>
								<div class="value">
								  <b>Amazon</b>
								</div>
								
							  </td>
							  <td class="text-right">
								<div class="value text-danger">
								  <a href="delete_file.php?file=amazon"><i class="picons-thin-icon-thin-0018_office_trash_bin"></i></a>
								</div>
								
							  </td>
							</tr>	
					  </tbody>
					 </table>
					</div>
				</div>
			</div>



		</div>		  
		  
		  
	
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="button" id="result_button_stocks"> Close</button>
          </div>
        </div>
      </div>
    </div>
	
   
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>

 
	
	
	<script>
		function portfolio(link) { 
			$.get(link, function(data, status){
				var results = JSON.parse(data);
				if (status=="success")
				{
					$('#balance').html(results["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0, currency: 'USD' }));
					$('#amazon_balance').html(results["amazon"]["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0, currency: 'USD' }));
					$('#microsoft_balance').html(results["microsoft"]["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0, currency: 'USD' }));
					$('#f5_balance').html(results["f5"]["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0, currency: 'USD' }));
					$('#google_balance').html(results["google"]["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0, currency: 'USD' }));
					
					$('#profit_value').html(results["profit"]+"%");
					$('#amazon_profit').html(results["amazon"]["profit"]+"%");
					$('#microsoft_profit').html(results["microsoft"]["profit"]+"%");
					$('#google_profit').html(results["google"]["profit"]+"%");
					$('#f5_profit').html(results["f5"]["profit"]+"%");
					
					if (results["profit"]>=0)
					{
						$('#profit').addClass("trending-up-basic");
						$('#profit_icon').addClass("os-icon-arrow-2-up");
					}
					else
					{
						$('#profit').addClass("trending-down-basic");
						$('#profit_icon').addClass("os-icon-arrow-2-down");
					}

					if (results["microsoft"]["profit"]>=0)
					{
						$('#microsoft_color').addClass("badge-success");
						$('#microsoft_arrow').addClass("os-icon-arrow-up6");				
					}
					else 
					{
						$('#microsoft_color').addClass("badge-danger");
						$('#microsoft_arrow').addClass("os-icon-arrow-down6");
					}

					if (results["amazon"]["profit"]>=0)
					{
						$('#amazon_color').addClass("badge-success");
						$('#amazon_arrow').addClass("os-icon-arrow-up6");				
					}
					else 
					{
						$('#amazon_color').addClass("badge-danger");
						$('#amazon_arrow').addClass("os-icon-arrow-down6");
					}
					
					if (results["google"]["profit"]>=0)
					{
						$('#google_color').addClass("badge-success");
						$('#google_arrow').addClass("os-icon-arrow-up6");				
					}
					else 
					{
						$('#google_color').addClass("badge-danger");
						$('#google_arrow').addClass("os-icon-arrow-down6");
					}				

					if (results["f5"]["profit"]>=0)
					{
						$('#f5_color').addClass("badge-success");
						$('#f5_arrow').addClass("os-icon-arrow-up6");			
					}
					else 
					{
						$('#f5_color').addClass("badge-danger");
						$('#f5_arrow').addClass("os-icon-arrow-down6");
					}	
					

					if (results["yesterday_profit"]>=0)
					{
						$('#yesterday_value').addClass("text-success");
						$('#yesterday_profit_color').addClass("trending-up");				
						$('#yesterday_profit_icon').addClass("os-icon-arrow-up6");				
					
					}
					else
					{
						$('#yesterday_value').addClass("text-danger");
						$('#yesterday_profit_color').addClass("trending-down");				
						$('#yesterday_profit_icon').addClass("os-icon-arrow-down6");				
					}
					
					if (results["week_profit"]>=0)
					{
						$('#week_value').addClass("text-success");
						$('#week_profit_color').addClass("trending-up");				
						$('#week_profit_icon').addClass("os-icon-arrow-up6");				
					
					}
					else
					{
						$('#week_value').addClass("text-danger");
						$('#week_profit_color').addClass("trending-down");				
						$('#week_profit_icon').addClass("os-icon-arrow-down6");				
					}
					
					if (results["month_profit"]>=0)
					{
						$('#month_value').addClass("text-success");
						$('#month_profit_color').addClass("trending-up");				
						$('#month_profit_icon').addClass("os-icon-arrow-up6");				
					
					}
					else
					{
						$('#month_value').addClass("text-danger");
						$('#month_profit_color').addClass("trending-down");				
						$('#month_profit_icon').addClass("os-icon-arrow-down6");				
					}

					if (results["year_profit"]>=0)
					{
						$('#year_value').addClass("text-success");
						$('#year_profit_color').addClass("trending-up");				
						$('#year_profit_icon').addClass("os-icon-arrow-up6");				
					
					}
					else
					{
						$('#year_value').addClass("text-danger");
						$('#year_profit_color').addClass("trending-down");				
						$('#year_profit_icon').addClass("os-icon-arrow-down6");				
					}				
					
					$('.microsoft_stock_price').html(results["microsoft"]["price"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 2,  currency: 'USD' }));
					$('.amazon_stock_price').html(results["amazon"]["price"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 2, currency: 'USD' }));
					$('.google_stock_price').html(results["google"]["price"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 2, maximumFractionDigits: 2,  currency: 'USD' }));
					$('.f5_stock_price').html(results["f5"]["price"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 2, maximumFractionDigits: 2,  currency: 'USD' }));

					$('#microsoft_value').html(results["microsoft"]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#amazon_value').html(results["amazon"]["balance"].toLocaleString('en-US',  { style: 'currency', minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#google_value').html(results["google"]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#f5_value').html(results["f5"]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));


					$('#year_value').html(results["year"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#month_value').html(results["month"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#week_value').html(results["week"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('#yesterday_value').html(results["yesterday"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));


					$('#year_profit').html(results["year_profit"]);
					$('#month_profit').html(results["month_profit"]);
					$('#week_profit').html(results["week_profit"]);
					$('#yesterday_profit').html(results["yesterday_profit"]);

					$('#ms_stocks').html(results["microsoft"]["percentage"]+"% <br> "+ results["microsoft"]["qty"] + " Stocks");
					$('#amazon_stocks').html(results["amazon"]["percentage"]+"% <br> "+ results["amazon"]["qty"] + " Stocks");
					$('#google_stocks').html(results["google"]["percentage"]+"% <br> "+ results["google"]["qty"] + " Stocks");
					$('#f5_stocks').html(results["f5"]["percentage"]+"% <br> "+ results["f5"]["qty"] + " Stocks");

					var total_shares_circle = parseInt(results["f5"]["qty"]) + parseInt(results["google"]["qty"]) +parseInt(results["amazon"]["qty"]) +parseInt(results["microsoft"]["qty"]);
					$('#total_shares_circle').html(total_shares_circle);
					
				}
			});
	}
	</script>	

	<script>
		$(document).on('click', '#email_send', function(){
			
			if ($('#email').val() =="")
			{
				$('#email_rcpt').html("k.skenderidis@f5.com");

			}
			else
			{
				$('#email_rcpt').html($('#email').val());
			}
		});
	</script>	
	<script>
		$(document).ready(function() {
		
			portfolio("rest/portfolio.php");

		});
	</script>
	
	<script>
/*		$(document).ready(function() {
			$.ajaxSetup({
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json'
			}
})
		});		*/
	</script>
	
	
	<script>
	$(document).ready(function() {
		$.get("transactions.php", function(data, status){
			if (status=="success")
			{
				  $( "#transactions" ).html( data );
			}
		})

	});
	</script>	
	
	<script>
	$(document).ready(function() {
		$.get("side_bar_accounts.php", function(data3, status){
			if (status=="success")
			{
				  $( "#account_select_2" ).html( data3);
			}
		})	
		$.get("side_bar.php", function(data, status){
			if (status=="success")
			{
				  $( "#side_bar" ).html( data );
			}
		})

	});
	</script>		

	<script>
    if ($("#donutChart12").length) {
      var donutChart12 = $("#donutChart12");

      // donut chart data
      var data1 = {
        labels: ["Microsoft", "Google", "Amazon", "F5 Networks"],
        datasets: [{
          data: [27.12, 18.83, 23.2, 30.48],
          backgroundColor: ["#5797fc", "#7e6fff", "#4ecc48", "#d97b70"],
          hoverBackgroundColor: ["#5797fc", "#7e6fff", "#4ecc48", "#d97b70"],
          borderWidth: 6,
          hoverBorderColor: 'transparent'
        }]
      };

      // -----------------
      // init donut chart
      // -----------------
      new Chart(donutChart12, {
        type: 'doughnut',
        data: data1,
        options: {
          legend: {
            display: false
          },
          animation: {
            animateScale: true
          },
          cutoutPercentage: 80
        }
      });
    }	
	</script>

	<script>
		$(document).on('change', '#stock_selected', function(){

			$('.trans_value').html("$-");
			$('.total_assets').html("$-");
			$('.unit_stock_price').html("$-");
			$('#stock_qty').val("");
			$('#stock_qty').attr("disabled","disabled");
			$('#market_value').attr("disabled","disabled");
			$('.total_assets').removeClass("text-success");
			$('#buy_initial_assets').html("$-");	
			$('#buy_owned_qty').html("-");
			$('.buy_first').fadeIn();
			$('.buy_second').hide();
				
			var name = $(this).children(":selected").val();
			if (name == "1")
			{
				$('.trans_value').html("$-");
				$('.total_assets').html("$-");
				$('.unit_stock_price').html("$-");
				$('#stock_qty').attr("disabled","disabled");
				$('#market_value').attr("disabled","disabled");
				$('#custom_stock_price').attr("disabled","disabled");
				$(".div_custom_stock_price").hide();
				$('.company_name_modal').html("Company");
				$('#buy_initial_assets').html("$-");	
				$('#buy_owned_qty').html("-");				
				$('.buy_first').hide();

			}
			else
			{
				$.get("rest/portfolio.php", function(data, status){
					var results = JSON.parse(data);
					if (status=="success")
					{
						$('.unit_stock_price').html(parseInt(results[name]["price"]).toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$('.unit_stock_price_initial').html(parseInt(results[name]["price"]));
						$('.unit_stock_price_static').html(parseInt(results[name]["price"]));
						$('#custom_stock_price').val(results[name]["price"]);
						$('.total_assets_initial').html(results[name]["balance"]);
						$('.total_assets').html(results[name]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$('.company_name_modal').html($('#stock_selected').children(":selected").attr("id"));
						$('#buy_initial_assets').html(results[name]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$('#buy_owned_qty').html(results[name]["qty"]);			
					}
				})			
				
				$('#stock_qty').removeAttr("disabled");

			}
		});	
	</script>
	
	<script>
		$(document).on('change', '#stock_qty', function(){

			var name = $("#stock_selected").children(":selected").val();
//			$('.unit_stock_price').html( '<img src="img/loading_v3.gif" height=32>');
			$('.trans_value').html( '<img src="img/loading_v3.gif" height=32>' );
			$('.total_assets').html( '<img src="img/loading_v3.gif" height=32>' );
			var stock_qty = parseInt($('#stock_qty').val());
			if (stock_qty>0)
			{
				var stock_price = parseInt($('.unit_stock_price_static').html());
				var total_assets = parseInt($('.total_assets_initial').html());
				var trans_value = stock_qty * stock_price;			
				var new_total_assets = trans_value + total_assets;
				$('#market_value').removeAttr("disabled");
				$('.trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));	
				$('.trans_value_initial').html(trans_value);
				$('.total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('.total_assets').addClass("text-success");
				$('#buy_stocks_button').removeAttr("disabled");
				$('.buy_second').fadeIn();
			}
			else 
			{
				$('.trans_value').html("$-");							
				$('.trans_value_initial').html("");							
				$('.total_assets').html("$-");			
				$('#market_value').attr("disabled","disabled");
				$('.total_assets').removeClass("text-success");
				var total_assets = parseInt($('.total_assets_initial').html());
				$('.total_assets').html(total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#buy_stocks_button').attr("disabled", "disabled");
				$('.buy_second').hide();

			}
		});	
	</script>

	<script>
		$(document).on('change', '#market_value', function(){
			var stock_qty = parseInt($('#stock_qty').val());
			var stock_price = parseInt($('.unit_stock_price_static').html());
			var total_assets = parseInt($('.total_assets_initial').html());
			var trans_value = stock_qty * stock_price;			
			var new_total_assets = trans_value + total_assets;
			$('.trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));	
			$('.trans_value_initial').html(trans_value);
			$('.total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.total_assets').addClass("text-success");
			$('.unit_stock_price_initial').html($('.unit_stock_price_static').html());
			$('#custom_stock_price').val(stock_price);
			if($(this).children(":selected").val()=="no")
			{
				$(".div_custom_stock_price").show();
				var stock_price = parseInt($('#custom_stock_price').val());
				$('.unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#custom_stock_price').removeAttr("disabled");
				
			}
			else
			{
				var stock_price = parseInt($('.unit_stock_price_static').html());
				$('.unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#custom_stock_price').val(stock_price);
				$(".div_custom_stock_price").hide();
				$('#custom_stock_price').attr("disabled","disabled");
			}
			//alert($(this).children(":selected").val());
		});	
	</script>

	<script>
		$(document).on('change', '#custom_stock_price', function(){
			
			var stock_price = parseInt($('#custom_stock_price').val());
			
			if (stock_price == "0" || $('#custom_stock_price').val()==="")
			{
				stock_price = 1;
				$('#custom_stock_price').val(1);
			}
	
			$('.unit_stock_price_initial').html(stock_price);
			$('.unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			var stock_qty = parseInt($('#stock_qty').val());
			var total_assets = parseInt($('.total_assets_initial').html());
			var trans_value = stock_qty * stock_price;			
			var new_total_assets = trans_value + total_assets;
			$('.trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.trans_value_initial').html(trans_value);
			$('.total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.total_assets').addClass("text-success");
			

		});	
	</script>
	
	<script>
		$(document).on('click', '#buy_stocks_button', function(){
			$('#buy_stocks').removeClass('fade');
			$('#buy_stocks').modal('hide');
			$('#buy_stocks').addClass('fade');
			$(".result_details").hide();
			$("#result_img_stocks").attr("src","img/loading_v2.gif");
			$("#result_button_stocks").attr("disabled", "disabled");
			var trans_value = parseInt($(".trans_value_initial").html());
			var qty = parseInt($("#stock_qty").val());
			var company = $("#stock_selected").children(":selected").attr("id");
			var stock_price = parseInt($(".unit_stock_price_static").html());
			$.ajax({
				url: 'rest/execute_stock.php',
				type: 'post',
				data: JSON.stringify({trans_value: trans_value, qty: qty, company: company, action:"buy", stock_price:stock_price}),
				dataType: 'json',
				contentType: "application/json; charset=utf-8",			
				success: function (results){
					
					if (results["status"]=="success")
					{
						$("#result_img_stocks").attr("src","img/success.png");
						$("#result_title_stocks").html("TRANSACTION COMPLETED");
						$(".result_company_stocks").html(results["name"]);		
						$(".result_qty_stocks").html(results["qty"]);
						var temp_amount =  parseInt(results["amount"]);
						$("#result_amount_stocks").html(temp_amount.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$(".result_id_stocks").html(results["transid"]);
						
						$("#amazon_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#f5_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#google_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#microsoft_value").html("<img src='img/loading_v3.gif'height=32>");
						$("#portfolio_profit").html("<img src='img/loading_v3.gif'height=16>");
						$("#balance").html("<img src='img/loading_v3.gif'height=64>");
						$("#yesterday_value").html("<img src='img/loading_v3.gif'height=48>");
						$("#week_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#month_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#year_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#yesterday_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#week_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#month_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#year_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#profit_value").html("<img src='img/loading_v3.gif'height=32>");
						$("#total_shares_circle").html("<img src='img/loading_v3.gif'height=48>");
						$( "#transactions" ).addClass("text-center");
						$( "#transactions" ).html("<img src='img/loading_v3.gif'height=96>");
						portfolio("rest/portfolio_v2.php");
						$.get("transactions_v2.php", function(data, status){
							if (status=="success")
							{
								  $( "#transactions" ).html( data );
								  $( "#transactions" ).removeClass("text-center");
							}
						})
						$(".result_details").show();
						$(".result_details_msg_2").hide();
						
					}
					else{
						
					}
					$("#result_button_stocks").removeAttr('disabled');
					$(".result_details_stocks").show();
					
					$("#stock_selected").val(1);
					$("#stock_qty").val("");
					$("#stock_qty").attr("disabled", "disabled");
					$("#market_value").val("yes");
					$("#market_value").attr("disabled", "disabled");
					$('.trans_value').html("$-");							
					$('.trans_value_initial').html("");							
					$('.total_assets').html("$-");					
					$('.unit_stock_price').html("$-");	
					$('.unit_stock_price_initial').html("");	
					$('.unit_stock_price_static').html("");	
					$('.trans_value_initial').html("");	
					$('.total_assets_initial').html("");	
					$('.total_assets').removeClass("text-success");
					$('.div_custom_stock_price').hide();
					$('.company_name_modal').html("Company");
					$('#buy_initial_assets').html("$-");	
					$('#buy_owned_qty').html("-");		
					$('.buy_first').hide();
					$('.buy_second').hide();
					
				},
				error: function (data){
					$(".result_details_stocks").show();
					$("#result_button_stocks").removeAttr('disabled');
					$("#stock_selected").val(1);
					$("#stock_qty").val("");
					$("#stock_qty").attr("disabled", "disabled");
					$("#market_value").val("yes");
					$("#market_value").attr("disabled", "disabled");
					$('.trans_value').html("$-");							
					$('.trans_value_initial').html("");							
					$('.total_assets').html("$-");					
					$('.unit_stock_price').html("$-");	
					$('.unit_stock_price_initial').html("");	
					$('.unit_stock_price_static').html("");	
					$('.trans_value_initial').html("");	
					$('.total_assets_initial').html("");	
					$('.total_assets').removeClass("text-success");
					$('.div_custom_stock_price').hide();
					$('.company_name_modal').html("Company");
					$('#buy_initial_assets').html("$-");	
					$('#buy_owned_qty').html("-");		
					$('.buy_first').hide();
					$('.buy_second').hide();
				}			
			});
	
		});	
	
	</script>	

	<script>
		$(document).on('click', '#buy_stocks_button_close', function(){
				
				$("#stock_selected").val(1);
				$("#stock_qty").val("");
				$("#stock_qty").attr("disabled", "disabled");
				$("#market_value").val("yes");
				$("#market_value").attr("disabled", "disabled");
				$('.trans_value').html("$-");							
				$('.trans_value_initial').html("");							
				$('.total_assets').html("$-");					
				$('.unit_stock_price').html("$-");	
				$('.unit_stock_price_initial').html("");	
				$('.unit_stock_price_static').html("");	
				$('.trans_value_initial').html("");	
				$('.total_assets_initial').html("");	
				$('.total_assets').removeClass("text-success");
				$('.div_custom_stock_price').hide();
				$('.company_name_modal').html("Company");
				$('#buy_initial_assets').html("$-");	
				$('#buy_owned_qty').html("-");	
				$('.buy_first').hide();
				$('.buy_second').hide();				
	});	
	</script>	

	<script>
		$(document).on('click', '#buy_stocks_modal', function(){
				
				$("#stock_selected").val(1);
				$("#stock_qty").val("");
				$("#stock_qty").attr("disabled", "disabled");
				$("#market_value").val("yes");
				$("#market_value").attr("disabled", "disabled");
				$('.trans_value').html("$-");							
				$('.trans_value_initial').html("");							
				$('.total_assets').html("$-");					
				$('.unit_stock_price').html("$-");	
				$('.unit_stock_price_initial').html("");	
				$('.unit_stock_price_static').html("");	
				$('.trans_value_initial').html("");	
				$('.total_assets_initial').html("");	
				$('.total_assets').removeClass("text-success");
				$('.div_custom_stock_price').hide();
				$('.company_name_modal').html("Company");
				$('#buy_initial_assets').html("$-");	
				$('#buy_owned_qty').html("-");	
				$('.buy_first').hide();
				$('.buy_second').hide();				
		});	
	</script>		
	
	<script>
		$(document).on('change', '#sell_stock_selected', function(){

			$('.sell_trans_value').html("$-");
			$('.sell_total_assets').html("$-");
			$('.sell_assets').html("$-");
			$('.sell_unit_stock_price').html("$-");
			$('#sell_stock_qty').val("");
			$('#sell_stock_qty').attr("disabled","disabled");
			$('#sell_market_value').attr("disabled","disabled");
			$('.sell_total_assets').removeClass("text-success");

			var name = $(this).children(":selected").val();
			if (name == "1")
			{
				$('.sell_trans_value').html("$-");
				$('.sell_total_assets').html("$-");
				$('.sell_assets').html("$-");
				$('.sell_unit_stock_price').html("$-");
				$('#sell_stock_qty').attr("disabled","disabled");
				$('#sell_market_value').attr("disabled","disabled");
				$('#sell_custom_stock_price').attr("disabled","disabled");
				$(".div_sell_custom_stock_price").hide();
				$('.sell_company_name_modal').html("Company");
				$('.sell_first').hide();
				$('.sell_second').hide();
				
			}
			else
			{
				$.get("rest/portfolio.php", function(data, status){
					var results = JSON.parse(data);
					if (status=="success")
					{
						$('.sell_unit_stock_price').html(parseInt(results[name]["price"]).toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$('.sell_unit_stock_price_initial').html(parseInt(results[name]["price"]));
						$('.sell_unit_stock_price_static').html(parseInt(results[name]["price"]));
						$('#sell_custom_stock_price').val(parseInt(results[name]["price"]));
						$('.sell_total_assets_initial').html(results[name]["balance"]);
						$('#sell_owned_qty').html(results[name]["qty"]);
						$('.sell_assets').html(results[name]["balance"].toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$('.sell_company_name_modal').html($('#sell_stock_selected').children(":selected").attr("id"));
						$('.sell_first').fadeIn();
						$('.sell_second').hide();

					}
				})			
				
				$('#sell_stock_qty').removeAttr("disabled");

			}
		});	
	</script>

	<script>
		$(document).on('change', '#sell_stock_qty', function(){
			
			var name = $("#sell_stock_selected").children(":selected").val();
			$('.sell_trans_value').html( '<img src="img/loading_v3.gif" height=32>' );
			$('.sell_total_assets').html( '<img src="img/loading_v3.gif" height=32>' );
			var stock_qty = parseInt($('#sell_stock_qty').val());
			$('.sell_second').fadeIn();	
			if (stock_qty>0)
			{
				var stock_price = parseInt($('.sell_unit_stock_price_initial').html());
				var total_assets = parseInt($('.sell_total_assets_initial').html());
				var trans_value = stock_qty * stock_price;			
				var new_total_assets = total_assets - trans_value;
				if (new_total_assets >= 0)
				{
					$('#sell_market_value').removeAttr("disabled");
					$('.sell_trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));	
					$('.sell_trans_value_initial').html(trans_value);
					$('.sell_total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('.sell_total_assets').addClass("text-success");
					$('.sell_total_assets').removeClass("text-danger");
					$('#sell_stocks_button').removeAttr("disabled");	
				}
				else
				{
					$('#sell_market_value').attr("disabled", "disabled");
					$('.sell_trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));	
					$('.sell_trans_value_initial').html(trans_value);
					$('.sell_total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
					$('.sell_total_assets').addClass("text-danger");
					$('#sell_stocks_button').attr("disabled", "disabled");		
					$('.sell_total_assets').removeClass("text-success");
				}

			}
			else 
			{
				$('.sell_trans_value').html("$-");							
				$('.sell_trans_value_initial').html("");							
				$('.sell_total_assets').html("$-");			
				$('#sell_market_value').attr("disabled","disabled");
				$('.sell_total_assets').removeClass("text-success");
				var total_assets = parseInt($('.sell_total_assets_initial').html());
				$('.sell_total_assets').html(total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#sell_stocks_button').attr("disabled", "disabled");
				$('.sell_second').hide();	
				
			}
		});	
	</script>

	<script>
		$(document).on('change', '#sell_market_value', function(){

			var stock_qty = parseInt($('#sell_stock_qty').val());
			var stock_price = parseInt($('.sell_unit_stock_price_static').html());
			var total_assets = parseInt($('.sell_total_assets_initial').html());
			var trans_value = stock_qty * stock_price;			
			var new_total_assets = total_assets - trans_value;
			
			$('.sell_trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));	
			$('.sell_trans_value_initial').html(trans_value);
			$('.sell_total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.sell_total_assets').addClass("text-success");
			$('.sell_unit_stock_price_initial').html($('.sell_unit_stock_price_static').html());
			$('#sell_custom_stock_price').val(stock_price);

		
			if($(this).children(":selected").val()=="no")
			{
				$(".div_sell_custom_stock_price").show();
				var stock_price = parseInt($('#sell_custom_stock_price').val());
				$('.sell_unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#sell_custom_stock_price').removeAttr("disabled");
				
			}
			else
			{
				var stock_price = parseInt($('.sell_unit_stock_price_static').html());
				$('.sell_unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
				$('#sell_custom_stock_price').val(stock_price);
				$(".div_sell_custom_stock_price").hide();
				$('#sell_custom_stock_price').attr("disabled","disabled");
			}
		});	
	</script>

	<script>
		$(document).on('change', '#sell_custom_stock_price', function(){
			var stock_price = parseInt($('#sell_custom_stock_price').val());
			var stock_price_static = parseInt($('.sell_unit_stock_price_static').html());
			if (stock_price == "0" || $('#sell_custom_stock_price').val()==="")
			{
				stock_price = 1;
				$('#custom_stock_price').val(1);
			}
			$('.sell_unit_stock_price_initial').html(stock_price);
			$('.sell_unit_stock_price').html(stock_price.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			var stock_qty = parseInt($('#sell_stock_qty').val());
			var total_assets = parseInt($('.sell_total_assets_initial').html());
			var trans_value = stock_qty * stock_price;
			var trans_value_static = stock_qty * stock_price_static;
			var new_total_assets = total_assets - trans_value_static;
			$('.sell_trans_value').html(trans_value.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.sell_trans_value_initial').html(trans_value);
			$('.sell_total_assets').html(new_total_assets.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
			$('.sell_total_assets').addClass("text-success");
		});	
	</script>


	<script>
		$(document).on('click', '#sell_stocks_button', function(){
			$('#sell_stocks').removeClass('fade');
			$('#sell_stocks').modal('hide');
			$('#sell_stocks').addClass('fade');
			$(".result_details").hide();
			$("#result_img_stocks").attr("src","img/loading_v2.gif");
			$("#result_button_stocks").attr("disabled", "disabled");
			var trans_value = parseInt($(".sell_trans_value_initial").html());
			var qty = parseInt($("#sell_stock_qty").val());
			var stock_price = parseInt($(".sell_unit_stock_price_static").html());
			var company = $("#sell_stock_selected").children(":selected").attr("id");
			
			$.ajax({
				url: 'rest/execute_stock.php',
				type: 'post',
				data: JSON.stringify({trans_value: trans_value, qty: qty, company: company, action:"sell", stock_price:stock_price}),
				dataType: 'json',
				contentType: "application/json; charset=utf-8",			
				success: function (results){
					
					if (results["status"]=="success")
					{
						$("#result_img_stocks").attr("src","img/success.png");
						$("#result_title_stocks").html("TRANSACTION COMPLETED");
						$(".result_company_stocks").html(results["name"]);		
						$(".result_qty_stocks").html(results["qty"]);
						var temp_amount =  parseInt(results["amount"]);
						$("#result_amount_stocks").html(temp_amount.toLocaleString('en-US',  { style: 'currency',  minimumFractionDigits: 0, maximumFractionDigits: 0,  currency: 'USD' }));
						$(".result_id_stocks").html(results["transid"]);
						
						$("#amazon_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#f5_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#google_value").html("<img src='img/loading_v3.gif' height=32>");
						$("#microsoft_value").html("<img src='img/loading_v3.gif'height=32>");
						$("#portfolio_profit").html("<img src='img/loading_v3.gif'height=16>");
						$("#balance").html("<img src='img/loading_v3.gif'height=64>");
						$("#yesterday_value").html("<img src='img/loading_v3.gif'height=48>");
						$("#week_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#month_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#year_value").html("<img src='img/loading_v3.gif'height=64>");
						$("#yesterday_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#week_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#month_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#year_profit").html("<img src='img/loading_v3.gif'height=32>");
						$("#profit_value").html("<img src='img/loading_v3.gif'height=32>");
						$("#total_shares_circle").html("<img src='img/loading_v3.gif'height=48>");
						$( "#transactions" ).addClass("text-center");
						$( "#transactions" ).html("<img src='img/loading_v3.gif'height=96>");
						portfolio("rest/portfolio_v2.php");
						$.get("transactions_v2.php", function(data, status){
							if (status=="success")
							{
								  $( "#transactions" ).html( data );
								  $( "#transactions" ).removeClass("text-center");
							}
						})
						$(".result_details").show();
						$(".result_details_msg_1").show();
						$(".result_details_msg_2").hide();	
					}
					else{
						$(".result_details").show();					
						$("#result_img_stocks").attr("src","img/failed.png");
						$("#result_title_stocks").html("TRANSACTION FAILED");
						$(".result_qty_stocks").html(results["qty"]);
						$(".result_company_stocks").html(results["name"]);		

						$(".result_details_msg_2").show();
						$(".result_details_msg_1").hide();
					}
					$("#result_button_stocks").removeAttr('disabled');
					$(".result_details_stocks").show();
					$("#sell_stock_selected").val(1);
					$("#sell_stock_qty").val("");
					$("#sell_stock_qty").attr("disabled", "disabled");
					$("#sell_market_value").val("yes");
					$("#sell_market_value").attr("disabled", "disabled");
					$('.sell_trans_value').html("$-");							
					$('.sell_trans_value_initial').html("");							
					$('.sell_total_assets').html("$-");					
					$('.sell_unit_stock_price').html("$-");	
					$('.sell_unit_stock_price_initial').html("");	
					$('.sell_unit_stock_price_static').html("");	
					$('.sell_trans_value_initial').html("");	
					$('.sell_total_assets_initial').html("");	
					$('.sell_total_assets').removeClass("text-success");
					$('.div_sell_custom_stock_price').hide();					
					
					
				},
				error: function (data){
					$(".result_details_stocks").show();
					$("#result_button_stocks").removeAttr('disabled');
					$("#sell_stock_selected").val(1);
					$("#sell_stock_qty").val("");
					$("#sell_stock_qty").attr("disabled", "disabled");
					$("#sell_market_value").val("yes");
					$("#sell_market_value").attr("disabled", "disabled");
					$('.sell_trans_value').html("$-");							
					$('.sell_trans_value_initial').html("");							
					$('.sell_total_assets').html("$-");					
					$('.sell_unit_stock_price').html("$-");	
					$('.sell_unit_stock_price_initial').html("");	
					$('.sell_unit_stock_price_static').html("");	
					$('.sell_trans_value_initial').html("");	
					$('.sell_total_assets_initial').html("");	
					$('.sell_total_assets').removeClass("text-success");
					$('.div_sell_custom_stock_price').hide();					
					
				}			
			});		
	
		});	
	
	</script>	

	<script>
		$(document).on('click', '#sell_stocks_button_close', function(){
				
				$("#sell_stock_selected").val(1);
				$("#sell_stock_qty").val("");
				$("#sell_stock_qty").attr("disabled", "disabled");
				$("#sell_market_value").val("yes");
				$("#sell_market_value").attr("disabled", "disabled");
				$('.sell_trans_value').html("$-");							
				$('.sell_trans_value_initial').html("");							
				$('.sell_total_assets').html("$-");					
				$('.sell_unit_stock_price').html("$-");	
				$('.sell_unit_stock_price_initial').html("");	
				$('.sell_unit_stock_price_static').html("");	
				$('.sell_trans_value_initial').html("");	
				$('.sell_total_assets_initial').html("");	
				$('.sell_total_assets').removeClass("text-success");
				$('.div_sell_custom_stock_price').hide();
				$('.sell_first').hide();
				$('.sell_second').hide();
	});	
	</script>	


	<script>
		$(document).on('click', '#result_button', function(){
				
				$('.result_details').hide();
	});	
	</script>	

	<script>
		//****************Script to enable/disable "Tranfer Now" button on the side bar. 
		$(document).on('change', '#account_select', function(){
			if ($(this).children(":selected").hasClass("EUR"))
			{
				$("#curr").html("EUR");
			}
			if ($(this).children(":selected").hasClass("GBP"))
			{
				$("#curr").html("GBP");
			}
			if ($("#account_select").children(":selected").attr("id")!="select_1" && $("#friend_select").children(":selected").attr("id")!="select_2" && $("#transfer_value").val()!="")
			{
				$("#transfer_now").removeAttr('disabled');
			}
			else
			{
				$("#transfer_now").attr("disabled", "disabled");
			}			
		});

		$(document).on('change', '#friend_select', function(){
			if ($("#account_select").children(":selected").attr("id")!="select_1" && $("#friend_select").children(":selected").attr("id")!="select_2" && $("#transfer_value").val()!="")
			{
				$("#transfer_now").removeAttr('disabled');
			}
			else
			{
				$("#transfer_now").attr("disabled", "disabled");
			}			
		});

		$(document).on('input', '#transfer_value', function(){
			if ($("#account_select").children(":selected").attr("id")!="select_1" && $("#friend_select").children(":selected").attr("id")!="select_2" && $("#transfer_value").val()!="")
			{
				$("#transfer_now").removeAttr('disabled');
			}
			else
			{
				$("#transfer_now").attr("disabled", "disabled");
			}			
		});
	</script>	

	<script>
		//***************Script to execute "Tranfer Now" from the side bar.
		$(document).on('click', '#transfer_now', function(){
			$(".result_details").hide();
			$("#result_img").attr("src","img/loading_v2.gif");
			$("#result_button").attr("disabled", "disabled");
			var amount = $("#transfer_value").val();
			var account = $("#account_select").children(":selected").attr("id");
			var currency = $("#curr").html();
			var friend = $("#friend_select").children(":selected").attr("id");
			
			$.ajax({
				url: 'rest/execute_money_transfer.php',
				type: 'post',
				data: JSON.stringify({amount: amount, account: account, currency: currency, friend: friend}),
				dataType: 'json',
				contentType: "application/json; charset=utf-8",			
				success: function (results){			
			
					if (results["status"]=="success")
					{
						$("#transfer_now").attr("disabled", "disabled");
						$("#result_img").attr("src","img/success.png");
						$("#result_title").html("PAYMENT COMPLETED");
						$("#result_msg").html(results["msg"] + ' to "' + results["name"] +'"');		
						$("#result_currency").html(results["currency"]);
						$("#result_amount").html(results["amount"]);
						$("#result_id").html(results["transid"]);
						$("#account_select").val(1);
						$("#friend_select").val(1);
						$("#transfer_value").val("");
						$("#curr").html("EUR");
						$( "#side_bar_table" ).html( '<img src="img/loading_v3.gif" height=32>' );			
						$.get("side_bar_table.php", function(data, status){
							if (status=="success")
							{
								  $( "#side_bar_table" ).html( data );
							}
						})
						$.get("side_bar_accounts.php", function(data2, status){
							if (status=="success")
							{
								  $( "#account_select_2" ).html( data2 );
								  $( "#account_select" ).html( data2 );
							}
						})			
					}
					else{
						$("#result_img").attr("src","img/failed.png");
						$("#result_title").html("PAYMENT FAILED");					
						$("#result_msg").html(results["msg"] + 'to "' + results["name"] +'"');						
						$("#result_currency").html(results["currency"]);
						$("#result_amount").html(results["amount"]);
					}
					
					$("#result_button").removeAttr('disabled');
					$(".result_details").show();		
			
				},
				error: function (data){
					$(".result_details").show();
					$("#result_button").removeAttr('disabled');				
				}			
			});		

		});	
	
	</script>	

	<script>
		//***************Script to enable/disable "Tranfer Now" button on the modal. 
		$(document).on('change', '#account_select_2', function(){
			if ($(this).children(":selected").hasClass("EUR"))
			{
				$("#curr_2").html("EUR");
			}
			if ($(this).children(":selected").hasClass("GBP"))
			{
				$("#curr_2").html("GBP");
			}
			if ($("#account_select_2").children(":selected").attr("id")!="select_1" && $("#transfer_value_2").val()!="")
			{
				$("#transfer_now_2").removeAttr('disabled');
			}
			else
			{
				$("#transfer_now_2").attr("disabled", "disabled");
			}			
		});

		$(document).on('input', '#transfer_value_2', function(){
			if ($("#account_select_2").children(":selected").attr("id")!="select_1" && $("#transfer_value_2").val()!="")
			{
				$("#transfer_now_2").removeAttr('disabled');
			}
			else
			{
				$("#transfer_now_2").attr("disabled", "disabled");
			}			
		});
	</script>	

	<script>
		$(document).on('click', '.profile-tile-modal', function(){
			var name = $(this).attr("id");
			$("#select_friend_2").html(name);
			$("#select_friend_image_2").attr("src","img/"+name+".jpg");
			$("#account_select_2").val(1);
			$("#curr").html("EUR");
			$("#transfer_value_2").val("");
			$("#transfer_now_2").attr("disabled", "disabled");			
		});	
	
	</script>

	<script>
		$(document).on('click', '#transfer_now_2', function(){
			$('#money_transfer').removeClass('fade');
			$('#money_transfer').modal('hide');
			$('#money_transfer').addClass('fade');
			$(".result_details").hide();
			$("#result_img").attr("src","img/loading_v2.gif");
			$("#result_button").attr("disabled", "disabled");
			var amount = $("#transfer_value_2").val();
			var account = $("#account_select_2").children(":selected").attr("id");
			var currency = $("#curr_2").html();
			var friend = $("#select_friend_2").html();
			
			$.ajax({
				url: 'rest/execute_money_transfer.php',
				type: 'post',
				data: JSON.stringify({amount: amount, account: account, currency: currency, friend: friend}),
				dataType: 'json',
				contentType: "application/json; charset=utf-8",			
				success: function (results){			
					if (results["status"]=="success")
					{
						$("#result_img").attr("src","img/success.png");
						$("#result_title").html("PAYMENT COMPLETED");
						$("#result_msg").html(results["msg"] + ' to "' + results["name"] +'"');		
						$("#result_currency").html(results["currency"]);
						$("#result_amount").html(results["amount"]);
						$("#result_id").html(results["transid"]);
						$("#account_select_2").val(1);
						$("#select_friend_2").html("First Name");
						$("#select_friend_image_2").attr("src","img/question_mark.png");
						
						$("#curr").html("EUR");
						$( "#side_bar_table" ).html( '<img src="img/loading_v3.gif" height=32>' );			
						$.get("side_bar_table.php", function(data, status){
							if (status=="success")
							{
								  $( "#side_bar_table" ).html( data );
							}
						})
						$.get("side_bar_accounts.php", function(data2, status){
							if (status=="success")
							{
								  $( "#account_select_2" ).html( data2 );
								  $( "#account_select" ).html( data2 );
								  
							}
						})			
					}
					else{
						$("#result_img").attr("src","img/failed.png");
						$("#result_title").html("PAYMENT FAILED");					
						$("#result_msg").html(results["msg"] + 'to "' + results["name"] +'"');
						$("#result_currency").html(results["currency"]);
						$("#result_amount").html(results["amount"]);
						$("#select_friend_image_2").attr("src","img/question_mark.png");
					}
					
					$("#result_button").removeAttr('disabled');
					$(".result_details").show();			
				},			
				error: function (data){
					$(".result_details").show();
					$("#result_button").removeAttr('disabled');
					$("#select_friend_image_2").attr("src","img/question_mark.png");
				}
			});				
		
		});	
	
	</script>	

	<script>
		$(document).on('click', '#my_docs', function(){
				
		$.get("file_tables.php", function(data, status){
			if (status=="success")
			{
				  $( "#my_files" ).html( data );
			}
		})
		
	});	
	</script>	

	<script>
		$(document).on('click', '.my_file_delete', function(){
			
			$("#my_files").html("<img src='img/loading_v3.gif' height=32>");
			var file = 	$(this).attr("id");
			$.get("file_tables.php?delete="+file, function(data, status){
				if (status=="success")
				{
					$( "#my_files" ).html( data );  
					$.get("side_bar.php", function(data, status){
						if (status=="success")
						{
							  $( "#side_bar" ).html( data );
						}
					})			
					  
					  
					  
				}
			})
			
		
	});	
	</script>

	<script>
		$("#upload_file").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
			url: "upload_file.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data)   // A function to be called if request succeeds
			{
					
				$("#my_files").html("<img src='img/loading_v3.gif' height=32>");
				$.get("file_tables.php?add=1", function(data, status){
					if (status=="success")
					{
						$( "#my_files" ).html( data );  
						$.get("side_bar.php", function(data, status){
							if (status=="success")
							{
								  $( "#side_bar" ).html( data );
							}
						})
					$("#fileToUpload").val("");	  
					}
				})

			}
			}).done(function() {
  $( this ).addClass( "done" );
});
			
			
			
		}));
	</script>



	
  </body>
</html>
