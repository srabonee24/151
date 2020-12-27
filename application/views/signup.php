
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="">Name</label>
                                                        <input class="form-control py-4"  type="text"  value="<?=set_value('user_name')?>" placeholder="Enter your Name" name="user_name"/>
														<div class="error"><?=form_error('user_name')?></div>
                                                    </div>
                                                </div>
                                     
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="">Email</label>
                                                <input class="form-control py-4"  type="email" aria-describedby="emailHelp" value="<?=set_value('user_email')?>" placeholder="Enter email address" name="user_email"/>
												<div class="error"><?=form_error('user_email')?></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="">Password</label>
                                                        <input class="form-control py-4"  type="password" value="<?=set_value('user_password')?>" placeholder="Enter password" name="user_password" />
														<div class="error"><?=form_error('user_password')?></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
											
											
											<div class="form-end">
                                            <input type="submit" class="btn btn-danger form-control input-lg" value="SIGNUP">
                                            </div>
                                           
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?=base_url()?>login">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
			
			
            <div id="layoutAuthentication_footer">
                </br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
       
				<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"</div>
                            <div>
                              
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
		