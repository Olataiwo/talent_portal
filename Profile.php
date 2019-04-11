<?php
include("header.php");
?>

 <?php
$Query1 = mysqli_query($Link,"select * from tbl_students_portfolio where _fid='".$GlobalId."'");
while($r = mysqli_fetch_array($Query1)) 
	{
				$_title = $r['_title'];
				$_description = $r['_description'];
				
	}
	?>

<!-- Sidebar chat start -->
    <div id="sidebar" class="users p-chat-user showChat">
        <div class="had-container">
            <div class="card card_main p-fixed users-main">
                <div class="user-box">
                    <div class="card-block">
                        <div class="right-icon-control">
                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                            <div class="form-icon">
                                <i class="icofont icofont-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="main-friend-list">
                        <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header"><?php echo $Name; ?></div>
                            </div>

                        </div>
                        <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Lary Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alice</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alia</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Suzen</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Michael Scofield</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Irina Shayk</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Sara Tancredi</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Samon</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Daizy Mendize</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Loren Scofield</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Shayk</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Sara</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Lary</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar inner chat start-->
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> <?php echo $Name; ?>
            </a>
        </div>

        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                </a>
            </div>
        </div>
        <div class="chat-reply-box p-b-20">
            <div class="right-icon-control">
                <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                <div class="form-icon">
                    <i class="icofont icofont-paper-plane"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar inner chat end-->
    <!-- Main body start -->
    <div class="main-body user-profile">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>User Profile</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page-body start -->
            <div class="page-body">
                <!--profile cover start-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-circle" src="<?php echo $_Picture; ?>" style="width: 150px; height: 150px; margin-bottom: 20%; position: relative;" alt="user-img">
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                            
                                                   
                                                <div class="user-title">
                                                    <h2> <?php echo $Name; ?></h2>
                                                     <?php 
                                                    // if($UserType == "Student")
                                                    //{
                                                    ?>
                                                    <span class="text-white"><?php echo $_title; ?></span>
                                                     <?php
                                                 //}
                                                ?>
                                                </div>
                                               
                                            </div>
                                            <div>
                                                <div class="pull-right cover-btn">
                                                    <a href="Profile.php?_Edit=<?php echo $GlobalId; ?>"><button type="button" class="btn btn-primary m-r-10"><i class="icofont icofont-plus"></i> Edit Profile</button></a>
                                                    <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-user"></i> Change Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile cover end-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Profilo</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Talent Pool Work</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">About Me</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Full Name</th>
                                                                            <td><?php echo $Name; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Gender</th>
                                                                            <td>Male</td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a href="#!"><?php echo $_Email; ?></a></td>
                                                                        </tr>
                                                                        
                                                                       
                                                                        <tr>
                                                                            <th scope="row">Website</th>
                                                                            <td><a href="#!">www.demo.com</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                        <?php
										if(isset($_GET['_Edit']))
										{
										?>
                                        <div class="edit-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    
                                                                     
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Address">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                        <div class="text-center">
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                            <a href="#!" id="edit-cancel" class="btn btn-danger waves-effect">Cancel</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of edit info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <?php
										}
										?>
                                        <!-- end of edit-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Description About Me</h5>
                                                <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                    <i class="icofont icofont-edit"></i>
                                                </button>
                                            </div>
                                            <div class="card-block user-desc">
                                                <div class="view-desc">
                                                    <p><?php echo $_description; ?></p>
                                                </div>
                                                <?php
												if(isset($_GET['_Edit']))
												{
												?>
                                                <div class="edit-desc">
                                                   
                                                   
                                                   <div class="form-group col-12">
                                                   <label>Edit Your Description</label>
                                                   	<textarea class="form-control" name="" style="height: 300px;"><?php echo $_description; ?></textarea>
                                                   </div>
                                                   
                                                    <div class="text-center">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                                        <a href="#!" id="edit-cancel-btn" class="btn btn-danger waves-effect m-t-20">Cancel</a>
                                                    </div>
                                                </div>
                                                <?php	
												}
												?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                  <div class="row">
                    <div class="col-sm-12">
                        <!-- 20 Icons start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Skills</h5>
                                <span>Best Skill students</span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <?php
										
										if(isset($_GET['_Edit']))
										{
										?>
                                      <div class="form-group col-6">
                                      
                                     <label>Add Skill</label>
                                     	<input type="text" name="" class="form-control" />
                                      	
                                      </div>
                                       <div class="form-group col-3">
                                      
                                     <label>...</label>
                                     	<input type="submit" name="" class="form-control btn-success" value="Add" />
                                      	
                                      </div>
                                      
                                      <div class="form-group col-3">
										</div>
                                      
                                      <?php
										}
										$Skills = mysqli_query($Link, "select * from tbl_student_skills where _fid='".$GlobalId."'");
										while($rSkill = mysqli_fetch_array($Skills))
										{
											$SkillsText = $rSkill['_skills'];
											echo '<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-commenting"></i>
                                            <label class="txt-ellipsis">'.strtoupper($SkillsText).'</label>
                                        </div>';
										}
										?>
                                      
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 20 Icons end -->
                    </div>
                </div>
                                
                                
                                <!-- personal card end-->
                            </div>
                            <!-- tab pane personal end -->
                            <!-- tab pane info start -->
                            <div class="tab-pane" id="binfo" role="tabpanel">
                                <!-- info card start -->
                             
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">PortFolio</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="main" style="height:300px;width: 100%;">
                                                <?php
												if(isset($_GET['_Edit']))
												{
												?>
                                                <div class="row">
                                                	<div class="form-group col-12">
                                                		<label>Project Title</label>
                                                		<input type="text" name="" class="form-control">
                                                	</div>
                                                	
                                                	<div class="form-group col-12">
                                                		<label>Project Screenshot</label>
                                                		<input type="file" name="" class="form-control">
                                                	</div>
                                                	
                                                	<div class="form-group col-12">
                                                		<label>Project Description</label>
                                                		<textarea class="form-control" style="height: 90px;"></textarea>
                                                	</div>
                                                	
                                                	<div class="form-group col-12">
                                                		<input class=" btn-success" type="submit" name="" value="Save" />
                                                	</div>
                                                	
                                                </div>
                                                <?php
												}
												?>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Inverse Image Caps card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Previous work</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row users-card">
                                   <?php
									$Query1 = mysqli_query($Link,"select * from tbl_UploadPortfolioWork where _FId='".$GlobalId."'");
									while($r = mysqli_fetch_array($Query1)) 
									{
										$_ProjectName = $r['_ProjectName'];
										$_ProjectDescr = $r['_ProjectDescr'];
										$_ScreenShot = $r['_ScreenShot'];
									
                                    echo '<div class="col-lg-6">
                                        <div class="card user-card">
                                            <img class="img-fluid" src="'.$_ScreenShot.'" alt="img-inverse">
                                            <div class="top-cap-text">
                                                <h4>'.$_ProjectName.'</h4>
                                                <p>'.$_ProjectDescr.'</p>
                                                
                                            </div>
                                        </div>
                                    </div>';
									}

									?>
                                   
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                        <!-- Inverse Image Caps card end -->
                    </div>
                </div>


                                                </div><!--jkjskbdskbdkjsk-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- info card end -->
                            </div>
                            <!-- tab pane info end -->
                            <!-- tab pane contact start -->
                            <div class="tab-pane" id="contacts" role="tabpanel">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- contact data table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Contacts</h5></div>
                                                    <div class="card-block contact-details">
                                                        <div class="data_table_main table-responsive dt-responsive">
                                                            <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobileno.</th>
                                                                        <th>Favourite</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                   
                                                                       
                                                                   
                                                                   
                                                                   
                                                                </tbody>
                                                             
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- contact data table card end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane contact end -->
                            <div class="tab-pane" id="review" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Feedback</h5>
                                    </div>
                                    <div class="card-block">
                                        <ul class="media-list">
                                           
                                            <?php
												$Comment = mysqli_query($Link, "select * from tbl_Feedback where _FId='".$GlobalId."'");
												while($rC = mysqli_fetch_array($Comment))
												{
													
												
												
                                            echo '<li class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle comment-img" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                                    </a>
                                                </div>
                                                
                                               
                                               <div class="media-body">
                                                    <h6 class="media-heading">'.$rC[_PersonName].'<span class="f-12 text-muted m-l-5">'.$rC[_Date].'</span></h6>
                                                    <div class="stars-example-css review-star">
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                    </div>
                                                    <p class="m-b-0">'.$rC[_Comments].'</p>
                                                    
                                                    <hr>
                                                   
                                                  
                                                   
                                                </div>
                                               
												
                                            </li>';
												}
                                                ?>
                                        </ul>
                                        <div class="md-float-material d-flex">
                                            <div class="md-group-add-on p-relative col-lg-12">
                                                <div class="input-group input-group-button input-group-primary">
                                                    <span class="input-group-addon"><i class="icofont icofont-comment"></i></span>
                                                    <input type="text" class="form-control" placeholder="Write Comment">
                                                    <span class="input-group-addon">
                                       <button class="btn btn-primary"><i class="icofont icofont-plus"></i>Add Comment</button>
                                       </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
<?php
require("footer.php");
?>