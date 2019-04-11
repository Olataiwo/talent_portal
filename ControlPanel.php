<?php
include('header.php');
?>

 <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
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
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Control Panel</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Control Panel</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <!-- Documents card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks dark-primary-border">
                            <div class="card-block">
                                <h5>Users (Admin)</h5>
                                <ul>
                                    <li>
                                     <i class="icofont icofont-ui-user-group text-warning"></i>
                                       
                                    </li>
                                    <li class="text-right">
                                        133
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Documents card end -->
                    <!-- New clients card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks warning-border">
                            <div class="card-block">
                                <h5>Projects</h5>
                                <ul>
                                    <li>
                                       <i class="icofont icofont-document-folder"></i>
                                    </li>
                                    <li class="text-right text-warning">
                                        23
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New clients card end -->
                    <!-- New files card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks success-border">
                            <div class="card-block">
                                <h5>Users (Students / Hirer)</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-files text-success"></i>
                                    </li>
                                    <li class="text-right text-success">
                                        240
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New files card end -->
                    <!-- Open Project card start -->
                 
                    <!-- Open Project card end -->
                    <!-- Morris chart start -->
                 
                    <!-- Morris chart end -->
                    <!-- Todo card start -->
                
                    <!-- Todo card end -->
                    <!-- User chat box start -->
                   
                    <!-- User chat box end -->
                    <!-- Horizontal Timeline start -->
                 
                    <!-- Horizontal Timeline end -->
                </div>
            </div>
        </div>
    </div>

<?php
require('footer.php');
?>