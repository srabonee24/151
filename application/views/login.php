 
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
										<?=$this->session->flashdata('message');?>
										<div id="e_message"></div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="Email" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="error"><?=form_error('Email')?></div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name=
                                                "Password" placeholder="Enter password" />
                                            </div>
                                              <div class="error"><?=form_error('Password')?></div>
                                            
                                            <div class="form-end">
                                            <input type="submit" class="btn btn-danger form-control input-lg" value="LOGIN">
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
			</br>
			</br>
			</br>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            
                            <div>
                                <a href="#"></a>
                               
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>