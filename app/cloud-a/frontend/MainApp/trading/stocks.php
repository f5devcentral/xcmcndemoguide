<?php
session_start();
session_regenerate_id(true); 

$error=0;
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
{
	header("Location: login.php"); 
	exit();
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Arcadia - Account Information</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
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
            <a class="mm-logo" href="index.php"><img src="img/logo9.png"><span>F5 Forum</span></a>
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
                <a href="stocks.php">
                  <div class="icon-w">
                    <div class="os-icon os-icon-bar-chart-stats-up"></div>
                  </div>
                  <span>Trading</span></a>
              </li>
			  <!-- <li>
                <a href="accounts.php">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Accounts</span></a>
              </li> -->
			  <li>
                <a href="mortgage.php">
                  <div class="icon-w">
                    <div class="os-icon os-icon-home"></div>
                  </div>
                  <span>Mortgage</span></a>
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
          <div class="logo-w" style="padding: 0px;">
            <a class="logo" href="index.php">
              <img src="img/logo9.png" style="width: 85px;">
              <div class="logo-label">
                F5 Forum
              </div>
            </a>
          </div>

          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="active">
              <a href="index.php">
                <div class="icon-w">
                  <div class="os-icon os-icon-bar-chart-stats-up"></div>
                </div>
                <span>Trading</span></a>
            </li>
			<li>
              <a href="mortgage.php">
                <div class="icon-w">
                  <div class="os-icon os-icon-home"></div>
                </div>
                <span>Mortgage</span></a>
            </li> 
            <!-- <li>
              <a href="accounts.php">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Accounts</span></a>
            </li> -->
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
            <div class="content-box" style="padding-top: 10px;">
              <div class="os-tabs-w">
                <div class="os-tabs-controls os-tabs-complex" style="margin-bottom:15px">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#tab_overview"><span class="tab-label">Stock Portfolio</span></a>
                    </li>

                  </ul>
			  
                </div>
              </div>

			   <div class="row">
				 <div class="col-sm-9">			  
						 <!-- start content -->
							<div class="row">
								<div id="myTabContent" class="tab-content col-sm-12 col-lg-9 col-xxl-9">
									<div role="tabpanel" class="tab-pane fade active in" id="tab_overview" aria-labelledby="home-tab">
										  <div class="element-balances justify-content-between row" style="padding-top: 0px;">
											<div class="balance balance-v2 col-sm-4">
											  <div class="balance-title">
												Your Portfolio Balance
											  </div>
											  <div class="balance-value">
												<span class="d-xxl-inline-block" id="balance">$-</span><span class="trending d-lg-none d-xl-block d-xxl-inline-block" id="profit"><span id="profit_value">%-</span><i class="os-icon" id="profit_icon"></i></span>
											  </div>
											</div>
											<div class="balance-table col-sm-8">
											  <ul class="nav nav-tabs justify-content-center">
												<li class="nav-item" style="margin-right:0px">
												  <a class="nav-link"><span class="tab-label" style="font-size:14px;color:#047bf8;font-weight:bold;float: left;padding-right: 2px;">AMZN</span><span class="badge" id="amazon_color" style="float: right;"><i class="os-icon" id="amazon_arrow" style="font-size: 14px;color: white;margin-bottom: 0px;"></i><span id="amazon_profit" style=" float: right; padding-top: 2px;">-%</span></span>
												  <span class="tab-value" id="amazon_value" style="text-align:center;font-weight:bold;font-size: 20px;">$-</span></a>
												</li>
												<li class="nav-item" style="margin-right:0px">
												  <a class="nav-link"><span class="tab-label" style="font-size:14px;color:#047bf8;font-weight:bold;float: left;padding-right: 2px;">MSFT</span><span class="badge" id="microsoft_color" style="float: right;"><i class="os-icon" id="microsoft_arrow" style="font-size: 14px;color: white;margin-bottom: 0px;"></i><span id="microsoft_profit" style=" float: right; padding-top: 2px;">-%</span></span>
												  <span class="tab-value" id="microsoft_value" style="text-align:center;font-weight:bold;font-size: 20px;">$-</span></a>
												</li>

												<li class="nav-item" style="margin-right:0px">
												  <a class="nav-link"><span class="tab-label" style="font-size:14px;color:#047bf8;font-weight:bold;float: left;padding-right: 2px;">GOOGL</span><span class="badge" id="google_color" style="float: right;"><i class="os-icon" id="google_arrow" style="font-size: 14px;color: white;margin-bottom: 0px;"></i><span id="google_profit" style=" float: right; padding-top: 2px;">-%</span></span>
												  <span class="tab-value" id="google_value" style="text-align:center;font-weight:bold;font-size: 20px;">$-</span></a>
												</li>												

												<li class="nav-item" style="margin-right:0px">
												  <a class="nav-link"><span class="tab-label" style="font-size:14px;color:#047bf8;font-weight:bold;float: left;padding-right: 2px;">FFIV</span><span class="badge" id="f5_color" style="float: right;"><i class="os-icon" id="f5_arrow" style="font-size: 14px;color: white;margin-bottom: 0px;"></i><span id="f5_profit" style=" float: right; padding-top: 2px;">-%</span></span>
												  <span class="tab-value" id="f5_value" style="text-align:center;font-weight:bold;font-size: 20px;">$-</span></a>
												</li>	

											  </ul>
											</div>
										  </div>
										  <div class="element-wrapper pb-4 mb-4 border-bottom">
											<div class="element-box-tp">
											  <button class="btn btn-primary" data-target="#buy_stocks" data-toggle="modal" type="button" id="buy_stocks_modal"><i class="os-icon os-icon-refresh-ccw"></i><span>Buy Stocks</span></button><button class="btn btn-grey" data-target="#sell_stocks" data-toggle="modal" type="button"><i class="os-icon os-icon-log-out"></i><span>Sell Stocks</span></button>
											</div>
										  </div>
										  
										  <div class="element-wrapper compact">
											<div class="element-box-tp">
											  <h6 class="element-box-header">
												Last 180 days Balance History
											  </h6>
											  <div class="el-chart-w">
												<canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="80" id="liteLineChartV3" width="300"></canvas>
											  </div>
											</div>
										  </div>

								
									</div>
									 
								</div>
								
								<div class="col-sm-3" style="d-none d-xxl-block">
								  <div class="element-box less-padding">
									<h6 class="element-box-header text-center">
									  Portfolio Distribution
									</h6>
									<div class="el-chart-w">
									  <canvas height="120" id="donutChart12" width="120"></canvas>
									  <div class="inside-donut-chart-label">
										<strong id="total_shares_circle">-</strong><span>Stocks</span>
									  </div>
									</div>
									<div class="el-legend condensed">
									  <div class="row">
										<div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto">
										  <div class="legend-value-w">
											<div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
											<div class="legend-value">
											  <span>Microsoft</span>
											  <div class="legend-sub-value" id="ms_stocks">
												-%,  - Stocks 
											  </div>
											</div>
										  </div>
										  <div class="legend-value-w">
											<div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
											<div class="legend-value">
											  <span>Amazon</span>
											  <div class="legend-sub-value" id="amazon_stocks">
												-%,  - Stocks 
											  </div>
											</div>
										  </div>
										</div>
										<div class="col-sm-6 d-none d-xxxxl-block">
										  <div class="legend-value-w">
											<div class="legend-pin legend-pin-squared" style="background-color: #806ef9;"></div>
											<div class="legend-value">
											  <span>Google</span>
											  <div class="legend-sub-value" id="google_stocks">
												-%,  - Stocks 
											  </div>
											</div>
										  </div>
										  <div class="legend-value-w">
											<div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
											<div class="legend-value">
											  <span>F5 Networks</span>
											  <div class="legend-sub-value" id="f5_stocks">
												-%,  - Stocks 
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>

								<div class="element-wrapper" style="margin-bottom:0px; padding-bottom:0px">
									<h6 class="element-header" style="padding-bottom:10px; margin-bottom:5px">
									  Profit
									</h6>
								</div>
							  <div class="row pt-2">
								<div class="col-6 col-sm-3 col-xxl-3">
								  <a class="element-box el-tablo centered trend-in-corner smaller" style="padding-top: 0.5rem;padding-bottom: 0.5rem;">
									<div class="label">
									  Yesterday
									</div>
									<div class="value" id="yesterday_value">
									  $-
									</div>
									<div class="trending" id="yesterday_profit_color">
									  <span id="yesterday_profit">-%</span><i class="os-icon" id="yesterday_profit_icon"></i>
									</div>
								  </a>
								</div>
								<div class="col-6 col-sm-3 col-xxl-3">
								  <a class="element-box el-tablo centered trend-in-corner smaller" style="padding-top: 0.5rem;padding-bottom: 0.5rem;">
									<div class="label">
									  Last Week
									</div>
									<div class="value" id="week_value">
									  $-
									</div>
									<div class="trending" id="week_profit_color">
									  <span id="week_profit">-%</span><i class="os-icon" id="week_profit_icon"></i>
									</div>
								  </a>
								</div>
								<div class="col-6 col-sm-3 col-xxl-3">
								  <a class="element-box el-tablo centered trend-in-corner smaller" style="padding-top: 0.5rem;padding-bottom: 0.5rem;">
									<div class="label">
									  Last Month
									</div>
									<div class="value" id="month_value">
									  $-
									</div>
									<div class="trending" id="month_profit_color">
									  <span id="month_profit">-%</span><i class="os-icon" id="month_profit_icon"></i>
									</div>
								  </a>
								</div>
								<div class="col-6 col-sm-3 col-xxl-3">
								  <a class="element-box el-tablo centered trend-in-corner smaller" style="padding-top: 0.5rem;padding-bottom: 0.5rem;">
									<div class="label">
									  This Year
									</div>
									<div class="value" id="year_value">
									  $-
									</div>
									<div class="trending" id="year_profit_color">
									  <span id="year_profit">-%</span><i class="os-icon" id="year_profit_icon"></i>
									</div>
								  </a>
								</div>
							   </div>

				   <div class="row">
					<div class="col-sm-12">
					  <div class="element-wrapper compact pt-4">
						<h6 class="element-header">
						  Send Money To
						</h6>
						<div class="element-box-tp">
						  <div class="inline-profile-tiles">
							<div class="row" id="lower_bar" style="display:none">

								<div class="cta-w orange text-center" style="width:100%; background-image:url(../img/cta-pattern-light.png), linear-gradient(-180deg, #2122ff 0%, #0fe3e3 100%);">
								  <div class="cta-content" style="padding:20px 20px">
									<div class="row">
										<div class="col-3" style="padding-top: 15px; margin: auto;"> 
											<h3 class="cta-header">
											  Coming Soon
											</h3>
										</div>
									
										<div class="col-9"> 
										  <div class="newsletter-field-w">
																
												<div class="countdown" style="color:white">
													<ul class="list-unstyled list-inline text-left text-uppercase">
														<li class="list-inline-item">
															<h5 class="days_ref text-left text-bold" style="color:white">Days</h5>
															<h1 class="days text-spl-color" style="color:white">00</h1>
														</li>
														<li class="list-inline-item">
															<h5 class="hours_ref text-left text-bold" style="color:white">Hours</h5>
															<h1 style="color:white">
																<span class="hours">00</span>:<span class="minutes text-spl-color">00</span>:<span class="seconds">00</span> 
															</h1>
														</li>
													</ul>
												</div>		
										  </div>

										</div>						
									</div>

								  </div>
								</div>
									
							
							
								
							</div>
							
							<div class="row" id="lower_bar2" style="display:none">

								  <div class="col-4 col-sm-3 col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
									  <a class="profile-tile-box faded" href="stored_files.php" target="_blank">
										<div class="pt-new-icon">
										  <i class="os-icon os-icon-plus"></i>
										</div>
										<div class="pt-user-name">
										  New<br/> Account
										</div>
									  </a>
									</div>
								  </div>
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
									  <a class="profile-tile-box profile-tile-modal" data-target="#money_transfer" data-toggle="modal" id="Phillipe">
										<div class="pt-avatar-w">
										  <img alt="" src="img/Phillipe.jpg">
										</div>
										<div class="pt-user-name">
										  Philippe<br/>Cloup
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
							</div>							
							
							
						  </div>
						</div>
					  </div>

					  
					</div>
				  </div><!--------------------
				  START - Color Scheme Toggler
				  -------------------->
				 </div>
				 <div class="col-sm-3">			  
					<div class="cta-w orange text-center" style= "display:none" id="app3_1">
					  <div class="cta-content" style="padding:20px 20px">
						
						<h5 class="cta-header">
						  Invite your friends and make $100 with referrals
						</h5>
						  <div class="newsletter-field-w">
							<input placeholder="Email address..." type="text" id="email"><button class="btn btn-sm btn-primary" id="email_send" data-target="#result_email" data-toggle="modal" >Send</button>
						  </div>
					  </div>
					</div>

					<div class="cta-w orange text-center"  style= "display:none"  id="app3_2">
					  <div class="cta-content" style="padding:20px 20px">
						<br>
						<h5 class="cta-header">
						  ***** Coming Soon *****
						</h5>

					  </div>
					</div>


					
					<div id="transactions" style="margin-top:15px">


												
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
            <div class="content-panel compact color-scheme-dark" style="text-align: center;">

				<div id="side_bar">
	
				  <div class="content-panel-close">
					<i class="os-icon os-icon-close"></i>
				  </div>
				  <div class="element-wrapper">

					<h6 class="element-header">
					  Quick Money Transfer
					</h6>
					<div class="element-box-tp">
						<div class="countdown side_bar_attributes" style="color:white; display:none">
						
							<h5 style="color:E36C0F; text-align:left">Coming Soon</h5>
							<br>
							<ul class="list-unstyled list-inline text-left text-uppercase">
								<li class="list-inline-item">
									<h6 class="days_ref text-left text-bold" style="color:#E36C0F">Days</h6>
									<h4 class="days text-spl-color" style="color:#E36C0F">00</h4>
								</li>
								<li class="list-inline-item">
									<h6 class="hours_ref text-left text-bold" style="color:#E36C0F">Hours</h6>
									<h4 style="color:#E36C0F">
										<span class="hours">00</span>:<span class="minutes text-spl-color">00</span>:<span class="seconds">00</span> 
									</h4>
								</li>
							</ul>
						</div>	
					</div>
				  </div>
				  
					  <div class="element-wrapper compact">
						<h6 class="element-header">
						  Transfer History
						</h6>
						<div class="element-box-tp" id="side_bar_table">
						  
							<div class="countdown side_bar_attributes" style="color:white; display:none">
							
								<h5 style="color:white; text-align:left">Coming Soon</h5>
								<br>
								<ul class="list-unstyled list-inline text-left text-uppercase">
									<li class="list-inline-item">
										<h6 class="days_ref text-left text-bold" style="color:#E36C0F">Days</h6>
										<h4 class="days text-spl-color" style="color:#E36C0F">00</h4>
									</li>
									<li class="list-inline-item">
										<h6 class="hours_ref text-left text-bold" style="color:#E36C0F">Hours</h6>
										<h4 style="color:#E36C0F">
											<span class="hours">00</span>:<span class="minutes text-spl-color">00</span>:<span class="seconds">00</span> 
										</h4>
									</li>
								</ul>
							</div>	
						  
						</div>
					  </div>
				</div>		

				<div id="side_bar_upload" style="display: none;">

				</div>
							
			
			
			
            </div>
            <!--------------------
            END - Sidebar
            -------------------->
          </div>
        </div>
      </div>
	  

	  
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

              <div class="row sell_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold"># of stocks owned in "<span class="sell_company_name_modal">Company</span>": </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" id="sell_owned_qty">$-</span>
                </div>
              </div>			  
			  
              <div class="row sell_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Current Assets in "<span class="sell_company_name_modal">Company</span>": </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_assets">$-</span>
                </div>
              </div>			  
			  
              <div class="row sell_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Price per stock: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price_initial d-none"></span>
					<span style="font-weight:bold; font-size:22px" class="sell_unit_stock_price_static d-none"></span>
                </div>
              </div>
			  
              <div class="row sell_second" id="div_trans_value" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Transaction Value: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="sell_trans_value">$-</span>
					<span style="font-weight:bold; font-size:22px" class="sell_trans_value_initial d-none">$-</span>
                </div>
              </div>			  

              <div class="row sell_second" id="div_total_assets" style="display:none">
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

              <div class="row buy_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold"># of stocks owned in "<span class="company_name_modal">Company</span>": </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" id="buy_owned_qty">$-</span>
                </div>
              </div>			  
			  
              <div class="row buy_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Current Assets in "<span class="company_name_modal">Company</span>": </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" id="buy_initial_assets">$-</span>
                </div>
              </div>				  
			  
			  
              <div class="row buy_first" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Price per stock: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price">$-</span>
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price_initial d-none"></span>
					<span style="font-weight:bold; font-size:22px" class="unit_stock_price_static d-none"></span>
                </div>
              </div>
			  
              <div class="row buy_second" id="div_trans_value" style="display:none">
                <div class="col-sm-6 text-right" style="margin:auto">
					<span  style="font-weight:bold">Transaction Value: </span>
                </div>
                <div class="col-sm-6">
					<span style="font-weight:bold; font-size:22px" class="trans_value">$-</span>
					<span style="font-weight:bold; font-size:22px" class="trans_value_initial d-none">$-</span>
                </div>
              </div>			  

              <div class="row buy_second" id="div_total_assets" style="display:none">
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

  		<div class="row justify-content-center result_reference_wait">
			<div class="col-2">
			  <img src="img/loading.gif" height="64">
			</div>
		</div>

		<div class="row justify-content-center result_reference_fail" style="display:none">
			<div class="col-2">
			  <img src="img/failed.png" height="64">
			</div>
		</div>
		
		<div class="row justify-content-center result_reference_fail" style="display:none">
			<div class="col-6" style="text-align:center">
				<br>
			  <h6 id="result_title_stocks"> Email Failed!!! </h6>
			</div>
		</div> 		
		<div class="row justify-content-center border-bottom result_reference_fail_details" style="display:none">
			<div class="col-12" style="text-align:center">
				<br>
				<span> The Referral to <b><span class="email_rcpt"></span></b> has failed. <br> <span class="email_reason"></span>.</span>
			   	<br><br>
				<h5> <span id="result_amount_stocks"></span></h5>
				<br>
			</div>
		</div>


		
		<div class="row justify-content-center result_reference">
			<div class="col-2">
			  <img src="img/email_sent.png" height="64">
			</div>
		</div>
		
		<div class="row justify-content-center result_reference">
			<div class="col-6" style="text-align:center">
				<br>
			  <h6 id="result_title_stocks"> Email sent successfully </h6>
			</div>
		</div> 

		<div class="row justify-content-center border-bottom result_reference">
			<div class="col-12" style="text-align:center">
				<br>
				<span> The Referral to <b><span class="email_rcpt"></span></b> has been registered successfully. <br> Once the user registers for a credit card you <br>will receive the referral <b>Bonus</b>.</span>
			   	<br><br>
				<h5> <span id="result_amount_stocks"></span></h5>
				<br>
			</div>
		</div>
		
		<div class="row justify-content-center border-bottom result_reference result_reference_fail">
			<div class="col-12" style="text-align:center; padding-bottom:15px; padding-top:15px;">
				
			    <span style="font-size:11px" id="trans_id_email"> Transaction ID: 485495695758 </span>

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
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
	<script src="../js/plugins/countdown/jquery.downCount.js"></script>
    <script src="js/main.js?version=4.4.0"></script>

	<script>
		$(function() {
			
			// Countdown
			$(".countdown").downCount({
				date: '<?php $timestamp = time()+3600; echo date('m/d/Y H:i:s',$timestamp);?>'
			});
			
		});	 
		</script>
	
	<script>
		function portfolio(link) {
			$.ajax({
					type: "GET",
					timeout:3000,
					url: link,
					headers: {
					'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
					},						
					error: function(xhr, statusText) {},
					success: function(data){  
					
						var results = JSON.parse(data);
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
					}
				);			
	}
	</script>		
	
	
	
	<script>
		$(document).on('click', '#email_send', function(){
			
			$(".result_reference").hide();
			$(".result_reference_fail").hide();
			$(".result_reference_wait").show();
			$(".result_reference_fail_details").hide();
			
			var email = $('#email').val();
			if ($('#email').val() =="")
			{
				$('.email_rcpt').html(email);

			}
			else
			{
				$('.email_rcpt').html(email);
			}
			
			$.ajax({
				type: "GET",
				timeout:3000,
				url: "reference.php?bank_id=5473893784863&user_name=phillipe&email="+email,
				error: function(xhr, statusText) {
					$(".result_reference_wait").hide();
					$(".result_reference_fail").show();
					var token = Math.floor(Math.random() * 1000000000);
					$('#trans_id_email').html("Transaction ID: " + token);
				},
				success: function(data){  
					var results = JSON.parse(data);
					if (results["status"]=="success")
					{
						$("#lower_bar2" ).show();
						$(".result_reference_wait").hide();
						$(".result_reference").show();
						var token = Math.floor(Math.random() * 1000000000);
						$('#trans_id_email').html("Transaction ID: " + token);
					}
					if (results["status"]=="failure")
					{
						$(".result_reference_wait").hide();
						$(".result_reference_fail").show();
						$(".result_reference_fail_details").show();
						$('.email_reason').html(results["reason"]);
						var token = Math.floor(Math.random() * 1000000000);
						$('#trans_id_email').html("Transaction ID: " + token);
					}					
					
				}
				}
			);
		});
	</script>	

	
	
	<script>
	$(document).ready(function() {

	
		portfolio("rest/portfolio.php");

		$.ajax({
				type: "GET",
				timeout:10000,
				url: "/app3/index.php",
				error: function(xhr, statusText) {$("#app3_2" ).show(); },
				success: function(data){ $("#app3_1" ).show(); }
			});
			
	
		$.ajax({
				type: "GET",
				timeout:10000,
				url: "transactions.php",
				headers: {
				'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
				},				
				error: function(xhr, statusText) { 
					
					var error_msg = ' <div class="element-wrapper compact"> \
								<h6 class="element-header">\
								  Last Transactions\
								</h6>\
								<div class="element-box-tp">\
								  <table class="table table-clean">\
									<tbody>\
									  <tr>\
										  <td>\
											<div class="value">\
											  ---- (--)\
											</div>\
											<span class="sub-value">-.-.-</span>\
										  </td>\
										  <td class="text-right">\
											<div class="value text-danger">\
											  <b>$-</b> <br> - Stocks\
											</div>\
										  </td>\
										</tr>		\
									  <tr>\
										  <td>\
											<div class="value">\
											  ---- (--)\
											</div>\
											<span class="sub-value">-.-.-</span>\
										  </td>\
										  <td class="text-right">\
											<div class="value text-danger">\
											  <b>$-</b> <br> - Stocks\
											</div>\
										  </td>\
										</tr>		\
									  <tr>\
										  <td>\
											<div class="value">\
											  ---- (--)\
											</div>\
											<span class="sub-value">-.-.-</span>\
										  </td>\
										  <td class="text-right">\
											<div class="value text-danger">\
											  <b>$-</b> <br> - Stocks\
											</div>\
										  </td>\
										</tr>		\
									  <tr>\
										  <td>\
											<div class="value">\
											  ---- (--)\
											</div>\
											<span class="sub-value">-.-.-</span>\
										  </td>\
										  <td class="text-right">\
											<div class="value text-danger">\
											  <b>$-</b> <br> - Stocks\
											</div>\
										  </td>\
										</tr>		\
									</tbody></table>\
								</div>\
							  </div>';
				
					$( "#transactions" ).html( error_msg );
				
				
				},
				success: function(data){   $( "#transactions" ).html( data );}
				}
			);

	
		$.ajax({
				type: "GET",
				timeout:10000,
				url: "/api/lower_bar.php",
				error: function(xhr, statusText) {$( "#lower_bar" ).show();},
				success: function(data){  $("#lower_bar2" ).show();}
				}
			);


		$.ajax({
				type: "GET",
				timeout:10000,
				url: "/api/side_bar_accounts.php",
				success: function(data3){  $( "#account_select_2" ).html( data3);}
				}
			);

		$.ajax({
				type: "GET",
				timeout:10000,
				url: "/api/side_bar.php",
				error: function(xhr, statusText) {$( ".side_bar_attributes" ).show();},
				success: function(data2){  $( "#side_bar" ).html(data2);}
				}
			);
		
			
		
	});
	</script>	


	<script>
	$(document).ready(function() {
		$.get("side_bar_upload.php", function(data, status){
			if (status=="success")
			{
				  $( "#side_bar_upload" ).html( data );
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
				
				$.ajax({
						type: "GET",
						timeout:3000,
						url: "rest/portfolio.php",
						headers: {
						'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
						},							
						error: function(xhr, statusText) {},
						success: function(data){ 
							var results = JSON.parse(data);
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
						});				
				
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
				url: 'rest/buy_stocks.php',
				type: 'post',
				data: JSON.stringify({trans_value: trans_value, qty: qty, company: company, action:"buy", stock_price:stock_price}),
				dataType: 'json',
				headers: {
                'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
                },
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
						$.ajax({
							type: "GET",
							timeout:10000,
							url: "transactions_v2.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#transactions" ).html( data );
								  $( "#transactions" ).removeClass("text-center");	
							}
							});		
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
				
				$.ajax({
						type: "GET",
						timeout:3000,
						url: "rest/portfolio.php",
						headers: {
						'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
						},							
						error: function(xhr, statusText) {},
						success: function(data){ 
							var results = JSON.parse(data);
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
						});					
				
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
				url: 'rest/sell_stocks.php',
				type: 'post',
				data: JSON.stringify({trans_value: trans_value, qty: qty, company: company, action:"sell", stock_price:stock_price}),
				dataType: 'json',
				headers: {
                'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
                },
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
						$.ajax({
							type: "GET",
							timeout:10000,
							url: "transactions_v2.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#transactions" ).html( data );
								  $( "#transactions" ).removeClass("text-center");	
							}
						});	
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
				url: '/api/rest/execute_money_transfer.php',
				type: 'post',
				data: JSON.stringify({amount: amount, account: account, currency: currency, friend: friend}),
				dataType: 'json',
				headers: {
                'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
                },				
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
						$.ajax({
							type: "GET",
							timeout:5000,
							url: "/api/side_bar_table.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#side_bar_table" ).html( data );	
							}
						});
						$.ajax({
							type: "GET",
							timeout:5000,
							url: "/api/side_bar_accounts.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#account_select_2" ).html( data );
								  $( "#account_select" ).html( data );
							}
						});						
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
				url: '/api/rest/execute_money_transfer.php',
				type: 'post',
				data: JSON.stringify({amount: amount, account: account, currency: currency, friend: friend}),
				dataType: 'json',
				headers: {
                'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
                },
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
						$.ajax({
							type: "GET",
							timeout:10000,
							url: "/api/side_bar_table.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#side_bar_table" ).html( data );
							}
						});	
						$.ajax({
							type: "GET",
							timeout:10000,
							url: "/api/side_bar_accounts.php",
							headers: {
							'Authorization': 'Basic YWRtaW46aWxvdmVibHVl',
							},							
							error: function(xhr, statusText) {},
							success: function(data){ 
								  $( "#account_select_2" ).html( data );
								  $( "#account_select" ).html( data );
							}
						});	
		
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
					$.get("side_bar_upload.php", function(data, status){
						if (status=="success")
						{
							  $( "#side_bar_upload" ).html( data );
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
						$.get("side_bar_upload.php", function(data, status){
							if (status=="success")
							{
								  $( "#side_bar_upload" ).html( data );
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
