@extends('layouts.inspir')

@section('title')
<title>This is a Test Page</title>
@stop

@section('user-details')
    <span>
        <img alt="image" class="img-circle" src="/img/profile-small-2.png" />
    </span>
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="clear">
            <span class="block m-t-xs">
                <strong class="font-bold">Akhilesh Mantripragada</strong><b class="caret"></b>
            </span>
        </span>
    </a>
    <ul class="dropdown-menu animated fadeInRight m-t-xs">
        <li><a href="/profile">Profile</a></li>
        <li class="divider"></li>
        <li><a href="/logout">Logout</a></li>
    </ul>
@stop

@section('navbar-contents')
    <li>
        <a href="widgets.html"><i class="fa fa-plus"></i> <span class="nav-label">Create A New Moment</span> </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">View Baby Profile</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html">Basic form</a></li>
            <li><a href="form_advanced.html">Advanced Plugins</a></li>
            <li><a href="form_wizard.html">Wizard</a></li>
            <li><a href="form_file_upload.html">File Upload</a></li>
            <li><a href="form_editors.html">Text Editor</a></li>
        </ul>
    </li>
    <li class="active">
        <a href="#"><i class="fa fa-user"></i> <span class="nav-label"> Manage Baby Profile</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="project_detail.html">Project detail</a></li>
            <li><a href="file_manager.html">File manager</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="timeline.html">Timeline</a></li>
            <li><a href="pin_board.html">Pin board</a></li>
        </ul>
    </li>

@stop

@section('notifications')
    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
        <i class="fa fa-bell"></i>  <span class="label label-primary">0</span>
    </a>
    <ul class="dropdown-menu dropdown-alerts">
        <li>
            <a href="mailbox.html">
                <div>
                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="profile.html">
                <div>
                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                    <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="grid_options.html">
                <div>
                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div class="text-center link-block">
                <a href="notifications.html">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </li>
    </ul>
@stop


@section('content-head')
    <div class="col-sm-4">
        <h2>This is main title</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">This is</a>
            </li>
            <li class="active">
                <strong>Breadcrumb</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Create A New Moment</a>
        </div>
    </div>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
            <div class="middle-box text-center animated fadeInRightBig">
                <h3 class="font-bold">This is page content</h3>

                <div class="error-desc">
                    You can create here any grid layout you want. And any variation layout you imagine:) Check out main dashboard and other site. It use many different layout.
                    <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@stop