

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">
								<i class="ace-icon fa fa-book home-icon"></i>
								<a href="#">Duty Chart</a>
								
							</li>
						</ul><!-- /.breadcrumb -->
						
						<!-- 
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
						
					</div>

					
						
					<div class="page-content">	
						<div class="page-header">
							<h1>
								Create Duty
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>									
								</small>
							</h1>
						</div><!-- /.page-header -->	
						
						
						<div class="widget-body">
													<div class="widget-main">
														<label for="id-date-picker-1">Date Picker</label>
														<div class="row">
															<div class="col-xs-8 col-sm-12">
																<div class="input-group">
																	<input class="form-control date-picker" id="datepicker" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
						<div class="row">
						
									<div class="col-xs-12">
									
										<div class="widget-body">
											<div class="widget-main">													
														<div>
															<label for="form-field-select-1">Select Department</label>
															<select class="form-control" id="section" name="section">
																<option value="Select">Select</option>
																
																<?php foreach ($rec as $r) { ?>
																	<option value="<?=$r->id?>"><?=$r->name?></option>
																<?php } ?>												
															</select>
														</div>
											</div>
										</div>
									</div>
									
									<div class="col-xs-12">
									
										<div class="widget-body">
											<div class="widget-main">													
														<div>
															<label for="form-field-select-1">Select Staff</label>
															<select class="form-control" id="staff" name="staff">
																<option value="Select">Select</option>	
															</select>
														</div>
											</div>
										</div>
									</div>
									
									<!--<div class="col-xs-12">
												<div class="widget-body">
													<div class="widget-main">
														<label for="id-date-picker-1">Date Picker</label>
														<div class="row">
															<div class="col-xs-8 col-sm-12">
																<div class="input-group">
																	<input class="form-control date-picker" id="datepicker" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
									</div>	-->
									
									<div class="col-xs-12">
									
										<div class="widget-body">
											<div class="widget-main">													
														<div>
															<label for="form-field-select-1">Enter duty shift</label>
															<select class="form-control" id="staff" name="staff">
																<option value="Select">Select</option>	
															</select>
														</div>
											</div>
										</div>
									</div>
									
									
						</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			
			