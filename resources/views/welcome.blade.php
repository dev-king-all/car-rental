@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
            <!-- main header @e -->

                @include ('admin/layouts/sidebar_nav')
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-content nk-content-fluid">
	<div class="container-xl wide-lg">
		<div class="nk-content-body">			
			<div class="nk-block">
				<div class="row g-gs">
					<div class="col-lg-8">
						<div class="card card-bordered h-100">
							<div class="card-inner">
								<div class="card-title-group align-start mb-3">
									<div class="card-title">
										<h6 class="title">Leads Overview</h6>
										<p>Leads and Conversions fort the last 15 Days. 
										</p>
									</div>
									<div class="card-tools mt-n1 mr-n1">
										<div class="drodown">
											<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
												<em class="icon ni ni-more-h"></em>
											</a>
											<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
												<ul class="link-list-opt no-bdr">
													<li>
														<a href="#" class="active">
															<span>15 Days</span>
														</a>
													</li>
													<li>
														<a href="#">
															<span>30 Days</span>
														</a>
													</li>
													<li>
														<a href="#">
															<span>3 Months</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="nk-order-ovwg">
									<div class="row g-4 align-end">
										<div class="col-xxl-8">
											<div class="nk-order-ovwg-ck">
												<div class="chartjs-size-monitor">
													<div class="chartjs-size-monitor-expand">
														<div class=""></div>
													</div>
													<div class="chartjs-size-monitor-shrink">
														<div class=""></div>
													</div>
												</div>
												<canvas class="order-overview-chart chartjs-render-monitor" id="orderOverview" style="display: block; height: 180px; width: 623px;" width="1246" height="360"></canvas>
											</div>
										</div>
										<div class="col-xxl-4">
											<div class="row g-4">
												<div class="col-sm-6 col-xxl-12">
													<div class="nk-order-ovwg-data buy">
														<div class="amount">120 
															<small class="currenct currency-usd">leads</small>
														</div>
														<div class="info">Last month 
															<strong><u>20</u>
															</strong>Conversions
														</div>
														<div class="title">
															<em class="icon ni ni-arrow-down-left"></em> DOWN 30%
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xxl-12">
													<div class="nk-order-ovwg-data sell">
														<div class="amount">420
															<small class="currenct currency-usd">Leads</small>
														</div>
														<div class="info">This month 
															<strong><u>39</u>
																<span class="currenct currency-usd"></span>
															</strong>Conversions
														</div>
														<div class="title">
															<em class="icon ni ni-arrow-up-left"></em>UP 30%
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-bordered h-100">
							<div class="card-inner-group">
								<div class="card-inner card-inner-md">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Upcoming Tasks</h6>
										</div>
										<div class="card-tools mr-n1">
											<div class="drodown">
												<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false">
													<em class="icon ni ni-more-h"></em>
												</a>
												<div class="dropdown-menu dropdown-menu-right" style="">
													<ul class="link-list-opt no-bdr">
														<li>
															<a href="#">
																<em class="icon ni ni-setting"></em>
																<span>View All</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-inner">
									<div class="nk-wg-action">
										<div class="nk-wg-action-content">
											<em class="icon ni ni-cc-alt-fill"></em>
											<div class="title">Pending Client Invoices</div>
											<p>We have still 
												<strong>40 Client Invoices</strong> and 
												<strong>10 Clients</strong>, partially paid, <strong>30 haven't paid</strong>
											</p>
										</div>
										<a href="#" class="btn btn-icon btn-trigger mr-n2">
											<em class="icon ni ni-forward-ios"></em>
										</a>
									</div>
								</div>
								<div class="card-inner">
									<div class="nk-wg-action">
										<div class="nk-wg-action-content">
										      <em class="icon ni ni-mic"></em>											
											  <div class="title">Show Related</div>
											<p>Reminder to write down points on the upcoming show with
												<strong>James Saleskey</strong>
											</p>
										</div>
										<a href="#" class="btn btn-icon btn-trigger mr-n2">
											<em class="icon ni ni-forward-ios"></em>
										</a>
									</div>
								</div>
								<div class="card-inner">
									<div class="nk-wg-action">
										<div class="nk-wg-action-content">
											<em class="icon ni ni-wallet-fill"></em>
											<div class="title">Upcoming Staff Payroll</div>
											<p>
												<strong>20 upcoming</strong> staff payments.
											</p>
										</div>
										<a href="#" class="btn btn-icon btn-trigger mr-n2">
											<em class="icon ni ni-forward-ios"></em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-xxl-8">
						<div class="card card-bordered card-full">
							<div class="card-inner">
								<div class="card-title-group">
									<div class="card-title">
										<h6 class="title">
											<span class="mr-2">Orders Activities</span>
											<a href="#" class="link d-none d-sm-inline">See History</a>
										</h6>
									</div>
									<div class="card-tools">
										<ul class="card-tools-nav">
											<li>
												<a href="#">
													<span>Buy</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>Sell</span>
												</a>
											</li>
											<li class="active">
												<a href="#">
													<span>All</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-inner p-0 border-top">
								<div class="nk-tb-list nk-tb-orders">
									<div class="nk-tb-item nk-tb-head">
										<div class="nk-tb-col nk-tb-orders-type">
											<span>Type</span>
										</div>
										<div class="nk-tb-col">
											<span>Desc</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span>Date</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span>Time</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span>Ref</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span>USD Amount</span>
										</div>
										<div class="nk-tb-col text-right">
											<span>Amount</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
												</li>
												<li>
													<em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Buy Bitcoin</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/10/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">11:37 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">4,565.75 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.2040 
												<span>BTC</span>
											</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
												</li>
												<li>
													<em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Buy Ethereum</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/10/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">10:37 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">2,039.39 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.12600 
												<span>BTC</span>
											</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
												</li>
												<li>
													<em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Sell Bitcoin</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/10/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">10:45 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">9,285.71 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.94750 
												<span>BTC</span>
											</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
												</li>
												<li>
													<em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Sell Etherum</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/11/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">10:25 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">12,596.75 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 1.02050 
												<span>BTC</span>
											</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
												</li>
												<li>
													<em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Buy Bitcoin</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/10/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">10:12 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">400.00 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.00056 
												<span>BTC</span>
											</span>
										</div>
									</div>
									<div class="nk-tb-item">
										<div class="nk-tb-col nk-tb-orders-type">
											<ul class="icon-overlap">
												<li>
													<em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
												</li>
												<li>
													<em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
												</li>
											</ul>
										</div>
										<div class="nk-tb-col">
											<span class="tb-lead">Sell Etherum</span>
										</div>
										<div class="nk-tb-col tb-col-sm">
											<span class="tb-sub">02/09/2020</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub">05:15 PM</span>
										</div>
										<div class="nk-tb-col tb-col-xxl">
											<span class="tb-sub text-primary">RE2309232</span>
										</div>
										<div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">6,246.50 
												<span>USD</span>
											</span>
										</div>
										<div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.02575 
												<span>BTC</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-inner-sm border-top text-center d-sm-none">
								<a href="#" class="btn btn-link btn-block">See History</a>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-xxl-4">
						<div class="row g-gs">
							<div class="col-md-6 col-lg-12">
								<div class="card card-bordered card-full">
									<div class="card-inner">
										<div class="card-title-group align-start mb-2">
											<div class="card-title">
												<h6 class="title">Top Coin in Orders</h6>
												<p>In last 15 days buy and sells overview.</p>
											</div>
											<div class="card-tools mt-n1 mr-n1">
												<div class="drodown">
													<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
														<em class="icon ni ni-more-h"></em>
													</a>
													<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
														<ul class="link-list-opt no-bdr">
															<li>
																<a href="#" class="active">
																	<span>15 Days</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>30 Days</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>3 Months</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="nk-coin-ovwg">
											<div class="nk-coin-ovwg-ck">
												<div class="chartjs-size-monitor">
													<div class="chartjs-size-monitor-expand">
														<div class=""></div>
													</div>
													<div class="chartjs-size-monitor-shrink">
														<div class=""></div>
													</div>
												</div>
												<canvas class="coin-overview-chart chartjs-render-monitor" id="coinOverview" style="display: block; height: 165px; width: 260px;" width="520" height="330"></canvas>
											</div>
											<ul class="nk-coin-ovwg-legends">
												<li>
													<span class="dot dot-lg sq" data-bg="#f98c45" style="background: rgb(249, 140, 69) none repeat scroll 0% 0%;"></span>
													<span>Bitcoin</span>
												</li>
												<li>
													<span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;"></span>
													<span>Ethereum</span>
												</li>
												<li>
													<span class="dot dot-lg sq" data-bg="#8feac5" style="background: rgb(143, 234, 197) none repeat scroll 0% 0%;"></span>
													<span>NioCoin</span>
												</li>
												<li>
													<span class="dot dot-lg sq" data-bg="#6b79c8" style="background: rgb(107, 121, 200) none repeat scroll 0% 0%;"></span>
													<span>Litecoin</span>
												</li>
												<li>
													<span class="dot dot-lg sq" data-bg="#79f1dc" style="background: rgb(121, 241, 220) none repeat scroll 0% 0%;"></span>
													<span>Bitcoin Cash</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12">
								<div class="card card-bordered card-full">
									<div class="card-inner">
										<div class="card-title-group align-start mb-3">
											<div class="card-title">
												<h6 class="title">User Activities</h6>
												<p>In last 30 days 
													<em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Referral Informations"></em>
												</p>
											</div>
											<div class="card-tools mt-n1 mr-n1">
												<div class="drodown">
													<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
														<em class="icon ni ni-more-h"></em>
													</a>
													<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
														<ul class="link-list-opt no-bdr">
															<li>
																<a href="#">
																	<span>15 Days</span>
																</a>
															</li>
															<li>
																<a href="#" class="active">
																	<span>30 Days</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>3 Months</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="user-activity-group g-4">
											<div class="user-activity">
												<em class="icon ni ni-users"></em>
												<div class="info">
													<span class="amount">345</span>
													<span class="title">Direct Join</span>
												</div>
											</div>
											<div class="user-activity">
												<em class="icon ni ni-users"></em>
												<div class="info">
													<span class="amount">49</span>
													<span class="title">Referral Join</span>
												</div>
											</div>
										</div>
									</div>
									<div class="user-activity-ck">
										<div class="chartjs-size-monitor">
											<div class="chartjs-size-monitor-expand">
												<div class=""></div>
											</div>
											<div class="chartjs-size-monitor-shrink">
												<div class=""></div>
											</div>
										</div>
										<canvas class="usera-activity-chart chartjs-render-monitor" id="userActivity" style="display: block; height: 102px; width: 396px;" width="792" height="204"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="html/crypto/buy-sell.html">Buy Coin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Sell Coin</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <h2 class="title">What do you want to buy!</h2>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                                    <form action="#" class="buysell-form">
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Choose what you want to get</label>
                                            </div>
                                            <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency">
                                            <div class="dropdown buysell-cc-dropdown">
                                                <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                                    <div class="coin-item coin-btc">
                                                        <div class="coin-icon">
                                                            <em class="icon ni ni-sign-btc-alt"></em>
                                                        </div>
                                                        <div class="coin-info">
                                                            <span class="coin-name">Bitcoin (BTC)</span>
                                                            <span class="coin-text">Last Order: Nov 23, 2019</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                    <ul class="buysell-cc-list">
                                                        <li class="buysell-cc-item selected">
                                                            <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                                <div class="coin-item coin-btc">
                                                                    <div class="coin-icon">
                                                                        <em class="icon ni ni-sign-btc-alt"></em>
                                                                    </div>
                                                                    <div class="coin-info">
                                                                        <span class="coin-name">Bitcoin (BTC)</span>
                                                                        <span class="coin-text">Last Order: Nov 23, 2019</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="buysell-cc-item">
                                                            <a href="#" class="buysell-cc-opt" data-currency="eth">
                                                                <div class="coin-item coin-eth">
                                                                    <div class="coin-icon">
                                                                        <em class="icon ni ni-sign-eth-alt"></em>
                                                                    </div>
                                                                    <div class="coin-info">
                                                                        <span class="coin-name">Ethereum (ETH)</span>
                                                                        <span class="coin-text">Not order yet!</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- .dropdown-menu -->
                                            </div><!-- .dropdown -->
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Amount to Buy</label>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" name="bs-amount" placeholder="0.055960">
                                                <div class="form-dropdown">
                                                    <div class="text">BTC<span>/</span></div>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2">USD</a>
                                                        <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-right text-center">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">EUR</a></li>
                                                                <li><a href="#">CAD</a></li>
                                                                <li><a href="#">YEN</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-note-group">
                                                <span class="buysell-min form-note-alt">Minimum: 10.00 USD</span>
                                                <span class="buysell-rate form-note-alt">1 USD = 0.000016 BTC</span>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Payment Method</label>
                                            </div>
                                            <div class="form-pm-group">
                                                <ul class="buysell-pm-list">
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-paypal" />
                                                        <label class="buysell-pm-label" for="pm-paypal">
                                                            <span class="pm-name">PayPal</span>
                                                            <span class="pm-icon"><em class="icon ni ni-paypal-alt"></em></span>
                                                        </label>
                                                    </li>
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-bank" />
                                                        <label class="buysell-pm-label" for="pm-bank">
                                                            <span class="pm-name">Bank Transfer</span>
                                                            <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                                        </label>
                                                    </li>
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-card" />
                                                        <label class="buysell-pm-label" for="pm-card">
                                                            <span class="pm-name">Credit / Debit Card</span>
                                                            <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-action">
                                            <a href="#" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#buy-coin">Continue to Buy</a>
                                        </div><!-- .buysell-field -->
                                        <div class="form-note text-base text-center">Note: our transfer fee included, <a href="#">see our fees</a>.</div>
                                    </form><!-- .buysell-form -->
                                </div><!-- .buysell-block -->
                            </div><!-- .buysell -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@include('admin/layouts/footer_scripts')
